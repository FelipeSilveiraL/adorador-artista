<?php

namespace App\Models\portal;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';
    protected $connection = 'mysql';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'profession',
        'img_profile',
        'user_create',
        'date_create',
    ];
}
