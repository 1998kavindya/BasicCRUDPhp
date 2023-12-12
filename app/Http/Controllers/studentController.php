<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    public function index(){

        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $data = $request->validate([
            'StuName' => 'required',
            'StuAddress' => 'required',
            'School' => 'required',
            'PhoneNumber' => 'required|numeric',
            'Description' => 'required'
        ]);

        // dd($request->all());

        $newStudent = Student::create($data);

        return redirect(route('student.index'));
    }

    public function edit(student $student){
        return view('students.edit', ['student' => $student]);
    }

    public function update(Student $student, Request $request){

        $data = $request->validate([
            'StuName' => 'required',
            'StuAddress' => 'required',
            'School' => 'required',
            'PhoneNumber' => 'required|numeric',
            'Description' => 'required'
        ]);

        $student->update($data);

        return redirect(route('student.index'))->with('success','Product Updated Successfully');

    }
    public function delete(student $student){

        $student->delete();
        return redirect(route('student.index'))->with('success','Product Updated Successfully');
    }
}
