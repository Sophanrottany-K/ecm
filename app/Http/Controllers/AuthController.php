<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use App\Models\Store;
use App\Models\UserLoginHistory;

class AuthController extends Controller
{
    // ---------------- LOGIN ----------------
    public function index()
    {
        return view('index');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['login_error' => 'Invalid email or password.']);
        }

        if ($user->status !== 'active') {
            return back()->withErrors(['login_error' => 'Your account is ' . $user->status . '.']);
        }

        Auth::login($user);

        // Store login history
        UserLoginHistory::create([
            'user_id'    => $user->user_id,
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        // Redirect by role
        switch ($user->role->role_name) {
            case 'Admin':
                return redirect()->route('dashboard.admin');
            case 'Seller':
                return redirect()->route('homepage');
            case 'Customer':
                return redirect()->route('homepage');
            default:
                Auth::logout();
                return redirect()->route('login.form')->withErrors(['login_error' => 'Unauthorized role.']);
        }
    }

    // ---------------- REGISTER ----------------
    public function showRoleSelection()
    {
        return view('auth.role_select');
    }

    public function registerStep1(Request $request)
    {
        $request->validate([
            'role'      => 'required|in:Customer,Seller',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6|confirmed',
            'phone_number'     => 'required'
        ]);

        $role = Role::where('role_name', $request->role)->first();
        if (!$role) {
            return back()->withErrors(['role' => 'Invalid role selected.']);
        }

        $status = $role->role_name === 'Seller' ? 'pending' : 'active';

        try {
            $user = User::create([
                'email'    => $request->email,
                'password' => Hash::make($request->password),
                'phone_number'    => $request->phone_number,
                'role_id'  => $role->role_id,
                'status'   => $status,
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }

        if ($role->role_name === 'Customer') {
            Auth::login($user);
            return redirect()->route('homepage')->with('success', 'Registration successful. Welcome!');
        }

        return view('auth.seller_info', ['user_id' => $user->user_id]);
    }


    public function registerStep2(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,user_id',
            'action'  => 'required|in:submit,skip',
        ]);

        $user = User::find($request->user_id);

        if ($request->action === 'submit') {
            $request->validate([
                'store_name'  => 'required|string|max:150',
                'description' => 'required|string',
            ]);

            Store::create([
                'owner_id'    => $user->user_id,
                'store_name'  => $request->store_name,
                'description' => $request->description,
                'status'      => 'pending',
            ]);

            return redirect()->route('login.form')
                ->with('success', 'Your store is pending approval.');
        }

        // Skip store creation
        return redirect()->route('login.form')
            ->with('info', 'You can set up your store later from your seller dashboard.');
    }

    // ---------------- LOGOUT ----------------
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form')->with('status', 'You have been logged out.');
    }


    // ---------------- DASHBOARDS ----------------
    public function adminDashboard()
    {
        if (!$this->checkAccess('Admin')) return $this->denyAccess();
        return view('dashboard.admin');
    }

    public function sellerDashboard()
    {
        if (!$this->checkAccess('Seller')) return $this->denyAccess();
        return view('dashboard.seller');
    }

    public function customerDashboard()
    {
        if (!$this->checkAccess('Customer')) return $this->denyAccess();
        return view('dashboard.customer');
    }

    // ---------------- PRIVATE HELPERS ----------------
    private function checkAccess($requiredRole)
    {
        if (!Auth::check()) {
            return false;
        }

        return Auth::user()->role->role_name === $requiredRole;
    }

    private function denyAccess()
    {
        if (!Auth::check()) {
            return redirect()->route('login.form')->withErrors(['access_denied' => 'Please log in first.']);
        }

        abort(403, 'Access denied.');
    }
}
