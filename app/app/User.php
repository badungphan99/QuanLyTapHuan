<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;
//
//    /**
//     * The attributes that are mass assignable.
//     *
//     * @var array
//     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];
//
//    /**
//     * The attributes that should be hidden for arrays.
//     *
//     * @var array
//     */
//    protected $hidden = [
//        'password', 'remember_token',
//    ];
//
//    /**
//     * The attributes that should be cast to native types.
//     *
//     * @var array
//     */
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];
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
//        DB::table('users')->insert(
//            [
//                'fullname' => $array['fullname'],
//                'username' => $array['username'],
//                'email' => $array['email'],
//                'password' => $array['password']
//            ]
//        );
    }
}
