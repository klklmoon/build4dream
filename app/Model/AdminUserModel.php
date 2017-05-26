<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUserModel extends Authenticatable
{

    protected $table = 'admin_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
