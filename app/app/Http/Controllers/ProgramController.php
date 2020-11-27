<?php

namespace App\Http\Controllers;
use App\Course;
use App\Program;
use Illuminate\Http\Request;
use DB;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = DB::table('program')->get();
        return view('programs.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.create');
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
            $program = new Program;
            $program->name = $data['name'];
            $program->program = $data['program'];
            $program->status = $data['status'];
            $program->save();
            return redirect('program')->with('status',"Insert successfully");
        }
        catch(Exception $e){
            return redirect('program')->with('failed',"Insert failed");
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
        $program = DB::table('program')->where('id', $id)->first();
        return view('programs.update',compact('program'));
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
        $program = $request->input('program');
        $status = $request->input('status');
        DB::table('program')
              ->where('id', $id)
              ->update(
                  ['name' => $name,
                  'program' => $program,
                  'status' => $status]
            );
        return redirect('program')->with('status',"Update successfully");
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
    public function view_course($id)
    {
        $courses = DB::table('course')
                    ->where('course.program_id', '=', $id)
                    ->get();
        return view('courses.index', compact('courses'));
    }
}
