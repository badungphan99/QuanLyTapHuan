<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class SuperAdminController extends Controller
{

    // public function detail_infor_user()
    // {
    //     return view('superAdmin/detail_user');
        
    // }

    public function index()
    {
        $uc = new UserController(0);
        $listUser =  $uc->listAllUser();
        return view('superAdmin/superAdmin')->with('listUser', json_decode($listUser, true));

    }

    public function detail_infor_user()
    {
        $courses = DB::table('course')->get();
        return view('superAdmin/detail_user', compact('courses'));
    }

}
