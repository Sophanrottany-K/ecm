<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLoginHistory extends Model
{
    use HasFactory;

    protected $table = 'user_login_history';
    public $timestamps = false;

    protected $fillable = ['user_id', 'ip_address', 'user_agent', 'login_time'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
