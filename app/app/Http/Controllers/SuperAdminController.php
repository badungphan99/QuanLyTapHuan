<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class SuperAdminController extends Controller
{

    public function index()
    {
        $uc = new UserController(0);
        $listUser =  $uc->listAllUser();
        return view('superAdmin/superAdmin')->with('listUser', json_decode($listUser, true));

    }
    // public function show_data()
    // {
    //     $makeups=DB::table('products');
    //         return view('manageProducts',compact('makeups','skincares','hairs','bodys','foods','tools'));
    // }

}
