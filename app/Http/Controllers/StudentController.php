<?php

namespace App\Http\Controllers;
use App\Student;
use App\Course;
use App\Session;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('admin.student.index', compact('students'));

    }

    public function create()
    {
      $courses= Course::pluck('name', 'id');
      return view('admin.student.create', compact('courses'));

    }


    public function store(Request $request)
    {

      $student = new Student;
      $student->name = $request->input('name');
      $student->email = $request->input('email');
      $student->save();

      $student->courses()->sync($request->courses,  false);
      //Session::flash('success', $student->name . 'added successfully');

      return redirect('/students');

    }


    public function show($id)
    {


    }


    public function edit(Student $student)
    {
      $courses = Course::pluck('name', 'id');
      return view('admin.student.edit', ['student' => $student, 'courses' => $courses]);
    }


    public function update(Request $request, $id)
    {
      $student = Student::find($id);
      $student->name = $request->input('name');
      $student->email = $request->input('email');
      $student->save();

      $student->courses()->sync($request->courses);
      //Session::flash('primary', $student->name . 'update successfully');

      return redirect('/students');

    }

        public function destroy(Student $student)
        {

                $student->courses()->detach();
                $student->delete();
                return redirect('/students');

        }



}//Fim
