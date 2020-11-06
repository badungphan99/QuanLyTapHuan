<?php

namespace App;

use http\Env\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $rememberTokenName = false;
//
//    /**
//     * The attributes that are mass assignable.
//     *
//     * @var array
//     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
    protected $table = 'users';
    public $timestamps = false;
    
    public static function create(array $array)
    {
        $user = new User();
        $user->fullname = $array['fullname'];
        $user->username = $array['username'];
        $user->email = $array['email'];
        $user->password = $array['password'];
        $user->save();

        return $user;
    }
}
