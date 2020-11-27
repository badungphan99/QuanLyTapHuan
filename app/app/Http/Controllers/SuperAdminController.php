<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class SuperAdminController extends Controller
{
   
    public function index()
    {
        return view('superAdmin/superAdmin');
        
    }
    public function detail_infor_user()
    {
        return view('superAdmin/detail_user');
        
    }

    // public function show_data()
    // {
    //     $makeups=DB::table('products');
    //         return view('manageProducts',compact('makeups','skincares','hairs','bodys','foods','tools'));
    // }

}
