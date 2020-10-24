<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /*
    *   List all User in database
    **/
    public function listAllUser()
    {
        return User::all();
    }

    public function getUserByUserName($userName)
    {
        print('User name ');
        print($userName);
        $user = User::where('username','=', $userName)->first();
        return $user;
    }

    public function disableUser($userName)
    {
        $user = User::where('username','=', $userName)->first();
        $user->status = false;
        $user->save();
    }
    public function enableUser($userName)
    {
        $user = User::where('username','=', $userName)->first();
        $user->status = true;
        $user->save();
    }
}
