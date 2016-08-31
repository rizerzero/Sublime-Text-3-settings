<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone','address','name', 'email', 'password',
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

