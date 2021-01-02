<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function index(){
        $students = DB::table('users')->where('role', '=', 4)->get();
        $student_id = DB::table('enroll')->select('enroll.student_id')->distinct('student_id')->get();
        $enroll = DB::table('enroll')
                    -> join('users','enroll.student_id', '=', 'users.id')
                    -> where('enroll.student_id', '=', 4)
                    -> join('course','enroll.class_id', '=', 'course.id')
                    -> select('course.name',
                            'users.fullname',
                            'enroll.student_id')->get();
        return view('students.list')->with('students', $students)->with('student_id', $student_id)->with('enroll', $enroll);
    }
}
