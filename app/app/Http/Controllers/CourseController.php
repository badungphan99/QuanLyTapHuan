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
        
    }

    public function create_teacher()
    {
        return view('teachers.create');
    }

    public function view_teacher($id)
    {
        $teacher_id = DB::table('teacher')
                    ->select('teacher_id')
                    ->where('teacher.class_id', '=', $id)
                    ->distinct('teacher_id')
                    ->get();
        $teacher_id = $teacher_id->__toString(); 
        $users = array();
        $i = 15;
        while( $i < strlen($teacher_id) ){
            $user = DB::table('users')->where('id', '=', intval($teacher_id[$i]))->get();
            array_push($users, $user[0]);
            $i = $i + 17;
        }
        $teachers = DB::table('users')->where('role', '=', 3)->get();
        return view('teachers.index')->with('class_id', $id)->with('users', $users)->with('teachers', $teachers);
    }

    public function store_teacher(Request $request, $id)
    {
        $data = $request->input('teacher_id');
        DB::table('teacher')->insert(
            ['teacher_id' => $data, 'class_id' => $id]
        );
        $teacher_id = DB::table('teacher')
                    ->select('teacher_id')
                    ->where('teacher.class_id', '=', $id)
                    ->distinct('teacher_id')
                    ->get();
        $teacher_id = $teacher_id->__toString(); 
        $users = array();
        $i = 15;
        while( $i < strlen($teacher_id) ){
            $user = DB::table('users')->where('id', '=', intval($teacher_id[$i]))->get();
            array_push($users, $user[0]);
            $i = $i + 17;
        }
        $teachers = DB::table('users')->where('role', '=', 3)->get();
        return view('teachers.index')->with('class_id', $id)->with('users', $users)->with('teachers', $teachers)->with('status', 'Đã thêm giảng viên!');
    }


    public function delete_teacher($id)
    {
        DB::delete('delete from teacher where teacher_id = ?',[$id]);
        return redirect('course')->with('status', 'Đã xóa giảng viên!')->with('class_id', $id);
    }

    public function view_student($id)
    {
        $student_id = DB::table('enroll')
                    ->select('student_id')
                    ->where('enroll.class_id', '=', $id)
                    ->distinct('student_id')
                    ->get();
        $student_id = $student_id->__toString();
        $users = array();
        $i = 15;
        while( $i < strlen($student_id) ){
            $user = DB::table('users')->where('id', '=', intval($student_id[$i]))->get();
            array_push($users, $user[0]);
            $i = $i + 17;
        }
        //dd($users);
        $students = DB::table('users')->where('role', '=', 4)->get();
        return view('students.index')->with('class_id', $id)->with('users', $users)->with('students', $students);
    }

    public function store_student(Request $request, $id)
    {
        $data = $request->input('student_id');
        DB::table('enroll')->insert(
            ['student_id' => $data, 'class_id' => $id]
        );

        $student_id = DB::table('enroll')
                    ->select('student_id')
                    ->where('enroll.class_id', '=', $id)
                    ->distinct('student_id')
                    ->get();
        $student_id = $student_id->__toString();
        $users = array();
        $i = 15;
        while( $i < strlen($student_id) ){
            $user = DB::table('users')->where('id', '=', intval($student_id[$i]))->get();
            array_push($users, $user[0]);
            $i = $i + 17;
        }
        $students = DB::table('users')->where('role', '=', 4)->get();
        return view('students.index')->with('users', $users)->with('class_id', $id)->with('students', $students)->with('status', 'Đã thêm sinh viên!');
    }

    public function delete_student($id)
    {
        DB::delete('delete from enroll where student_id = ?',[$id]);
        return redirect('course')->with('status', 'Đã xóa sinh viên!');
    }
}