<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Course;
use App\Enroll;
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
        //dd($courses);
        return view('home')->with('courses', $courses);
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
            echo "<script type='text/javascript'>alert('Đăng ký thành công');</script>";
            return redirect('/home')->with('success', 'Đăng ký thành công');
        }
        else{
            return redirect('/home')->with('success', 'Đăng ký không thành công');
        }
       
        
    }
}
