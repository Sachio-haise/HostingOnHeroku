<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return  view('student-list',['students' => $students,'layout' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        return  view('student-list',['students' => $students,'layout' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {




       Student::create([
            'cne' => $request->get('cne'),
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
        'age' =>$request->get('age'),
        'speciality' => $request->get('speciality')

        ]);
       return redirect('/');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return  view('student-list',['student' => $student,'students' => $students,'layout' => 'show']);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id)->first();
        $students = Student::all();
        return  view('student-list',['student' => $student,'students' => $students,'layout' => 'edit']);
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

        Student::where('id',$id)
        ->update([
            'cne' => $request->input('cne'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'age' =>$request->input('age'),
            'speciality' => $request->input('speciality')

        ]);

        return  redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    }
}
