@extends('layouts.app')
@section('title', 'Create student profile')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h3 class="text-center mt-5 mb-4">Update Student Profile</h3>

  {!! Form::open(['url' => 'students/' . $student->id, 'method' => 'patch']) !!}
          <div class="form-group">
              {!! Form::label('Nome') !!}
              {!! Form::text('name', $student->name, ['placeholder'=>'Nome', 'class'=>'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('E-mail') !!}
            {!! Form::email('email', $student->email, ['placeholder'=>'E-mail', 'class'=>'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('Selecione curso(s)') !!}
            {!! Form::select('courses[]', $courses , null, ['multiple'=>'multiple', 'class'=>'form-control']) !!}
          </div>


          <div class="form-group">
                {!! Form::submit('Atualizar cadastro', [ 'class'=>'btn btn-primary float-right']) !!}
          </div>
  {!! Form::close() !!}

    </div>
  </div>
</div>
@endsection
