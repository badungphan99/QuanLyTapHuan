<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $courses = DB::table('course')->take(3)->get();
        return view('welcome',['courses'=>$courses]);
    }
}
