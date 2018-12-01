@extends('layouts.app')
@section('title', 'student List')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">

      @if(Session::has('success'))
        <div class="alert alert-success">
          <strong>Success!</strong> {{Session::get('success')}}
        </div>
        @elseif(Session::has('delete'))
          <div class="alert alert-danger">
            <strong>Delete!</strong> {{Session::get('delete')}}
          </div>
      @endif

      <h3 class="text-center mt-5 mb-4">Lista de Estudantes</h3>
      <a class="btn btn-primary mt-4 mb-4 float-right" href="{{url('students/create')}}">+ Cadastrar aluno</a>
      <table class="table table-bordered table-striped mb-5">
            <thead>
              <tr>
                  <th width="10">ID</th>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Curso</th>
                  <th style="width: 165px;">Ação</th>
              </tr>
            </thead>

            <tbody>
              @if(count($students) == 0)
              <tr>
                <td class="text-center" colspan="8">Nenhum aluno cadastrado ainda.</td>
              </tr>
              @else
              <tr>
                @foreach($students as $student)
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>
                    @foreach($student->courses as $course)
                      <span class="badge badge-info">{{$course->name}}</span>
                    @endforeach
                </td>

                <td>
                    <a class="btn btn-primary  float-left"  href="{{route('students.edit', $student->id)}}">Editar</a>

                    {!! Form::open(['method'=> 'DELETE', 'url' => 'students/' .$student->id, 'id' =>'deleteForm']) !!}
                        {!! Form::submit('Deletar', ['class' => 'btn btn-danger  float-right']) !!}
                    {!! Form::close() !!}
               </td>

              </tr>
                @endforeach
              @endif
            </tbody>
        </table>
    </div>
  </div>
</div>
@endsection
