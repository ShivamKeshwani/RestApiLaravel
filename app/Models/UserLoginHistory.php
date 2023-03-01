<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserLoginHistory extends Model
{
    use HasFactory;

    protected $table_name = 'user_login_histories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'login_time',
        'role'
    ];

}
