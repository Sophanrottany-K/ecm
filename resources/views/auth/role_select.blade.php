<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: #fff;
            width: 380px;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            padding: 30px 40px;
        }

        .register-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        select,
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #d0d0d0;
            border-radius: 6px;
            outline: none;
            font-size: 14px;
            transition: border-color 0.2s ease;
        }

        input:focus,
        select:focus {
            border-color: #f59e0b;
        }

        button {
            background-color: #f59e0b;
            color: #000;
            padding: 10px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #e68a00;
        }

        .login-link {
            text-align: center;
            font-size: 14px;
            color: #555;
            margin-top: 10px;
        }

        .login-link a {
            color: #f59e0b;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <h2>Register</h2>

        <form action="{{ route('register.step1') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <select name="role" required>
                <option value="">Choose Role</option>
                <option value="Customer">Customer</option>
                <option value="Seller">Seller</option>
            </select>

            <input type="email" name="email" placeholder="Email address" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
            <input type="text" name="phone_number" placeholder="Phone Number" required />

            <button type="submit">Next</button>
        </form>


    </div>
</body>

</html>
