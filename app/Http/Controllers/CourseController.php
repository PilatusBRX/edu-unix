<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{



    public function index()
    {
      $courses = Course::all();
      return view('admin.course.index', compact('courses'));


    }


    public function create()
    {

      return view('admin.course.create');
    }


    public function store(Request $request)
    {
      $course = new Course;
      $course->name = $request->input('name');
      $course->save();
      return redirect('/courses');  


    }

    public function show($id)
    {



    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {



    }


    public function destroy($id)
    {

    }




}//Fim
