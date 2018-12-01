@extends('layouts.app')
@section('title', 'Course List')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-center mt-5 mb-4">Lista dos Cursos</h3>
        <a class="btn btn-primary mt-4 mb-4 float-right" href="{{url('courses/create')}}">+ Adicionar Curso</a>
      <table class="table table-bordered table-striped">
            <thead>
              <tr>
                  <th width="10">ID</th>
                  <th>Curso</th>
              </tr>
            </thead>

            <tbody>
              @if(count($courses) == 0)
              <tr>
                <td  class="text-center" colspan="2">Nenhum curso encontrado.</td>
              </tr>
              @else
              <tr>
                @foreach($courses as $course)
                <td>{{$course->id}}</td>
                <td>{{$course->name}}</td>
              </tr>
                @endforeach
              @endif
            </tbody>
        </table>
    </div>
  </div>
</div>
@endsection
