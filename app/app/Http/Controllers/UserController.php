<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::user()->role > 2) return false;
        $user = User::where('username','=', $userName)->first();
        if (Auth::user()->role <= $user->role) return false;
        $user->status = false;
        $user->save();
    }

    public function enableUser($userName)
    {
        if (Auth::user()->role > 2) return false;
        $user = User::where('username','=', $userName)->first();
        if (Auth::user()->role <= $user->role) return false;
        $user->status = true;
        $user->save();
    }

    public function creatNewAccount($data)
    {
        User::create([
            'fullname' => $data['fullname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }

    public function setRoleUser()
    {

        $userId = request('userid');
        $role = request('role');
        print($role);
        if (Auth::user()->role > 2 && Auth::user()->role < $role) return false;
        $user = User::where('id','=', $userId)->first();
        if (Auth::user()->role <= $user->role) return false;
        $user->role = $role;
        $user->save();
    }

    public function setInfoUser($data)
    {
        if (Auth::user()->role > 2 && Auth::user()->role < $data['role']) return false;
        $user = User::where('id','=', $data['id'])->first();
        if (Auth::user()->role <= $user->role) return false;
        $user->fullname = $data['fullname'];
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();
    }
}
