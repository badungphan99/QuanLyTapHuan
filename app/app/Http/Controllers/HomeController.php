<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Course;
use DB;
use App\Enroll;
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
        $role = DB::table('users')
                    ->select('role')
                    ->where('id', '=', $userId)
                    ->get();
        //dd($role[0]->role);
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
        return view('home')->with('courses', $courses)->with('course_users', $course_users)->with('role', $role[0]->role);
    }

    public function register_course(Request $request, $id)
    {
        $userId = Auth::id();

        $status = DB::table('course')
                    ->select('status')
                    ->where('course.id', '=', $id)
                    ->distinct('status')
                    ->first()->status;

        if($status==1){
            DB::table('enroll')->insert([ 'class_id' => $id,'student_id' => $userId, 'status'=>1]);
            return redirect('/home')->with('success', 'Đăng ký thành công');
        }
        else{
            return redirect('/home')->with('success', 'Đăng ký không thành công');
        }
    }
    public function detail_infor_user()
    {
        return view('/detail_user');

    }
}
