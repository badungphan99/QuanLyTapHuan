<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Course;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = Auth::id();
        $courses = DB::table('course')->get();
        $courses_id = DB::table('enroll')
                    ->select('class_id')
                    ->where('enroll.student_id', '=', $userId)
                    ->distinct('class_id')
                    ->get();
        $course_users = array();
        foreach($courses_id as $id){
            array_push($course_users, DB::table('course')->where('id', $id->class_id)->first());
        }
        return view('home')->with('courses', $courses)->with('course_users', $course_users);
    }
}
