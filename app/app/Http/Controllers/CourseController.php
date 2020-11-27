<?php

namespace App\Http\Controllers;
use App\Course;
use App\Teacher;
use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = DB::table('course')->get();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        try{
            $course = new Course;
            $course->name = $data['name'];
            $course->date = $data['date'];
            $course->program_id = $data['program_id'];
            $course->content = $data['content'];
            $course->status = $data['status'];
            $course->num_student = $data['num_student'];
            $course->location = $data['location'];
            $course->save();
            return redirect('course')->with('status',"Insert successfully");
        }
        catch(Exception $e){
            return redirect('course')->with('failed',"operation failed");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = DB::table('course')->where('id', $id)->first();
        return view('courses.update',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $date = $request->input('date');
        $content = $request->input('content');
        $program_id = $request->input('program_id');
        $location = $request->input('location');
        $num_student = $request->input('num_student');
        $status = $request->input('status');
        DB::table('course')
              ->where('id', $id)
              ->update(
                  ['name' => $name,
                  'date' => $date,
                  'content' => $content,
                  'program_id' => $program_id,
                  'location' => $location,
                  'num_student' => $num_student,
                  'status' => $status]
            );
        return redirect('course')->with('status',"Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function view_teacher($id)
    {
        $teacher_id = DB::table('teacher')
                    ->select('teacher_id')
                    ->where('teacher.class_id', '=', $id)
                    ->get();
        $teacher_id = $teacher_id->__toString(); 
        $users = array();
        if(strlen($teacher_id) > 15){
            $users = DB::table('users')->where('id', '=', intval($teacher_id[15]))->get();
        }else{
            return view('teachers.index', compact('users'));
        }
        return view('teachers.index', compact('users'));
    }
}
