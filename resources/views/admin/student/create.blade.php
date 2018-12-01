@extends('layouts.app')
@section('title', 'Create student profile')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h3 class="text-center mt-5 mb-4">Cadastrar aluno</h3>

  {!! Form::open(['url' => 'students']) !!}
          <div class="form-group">
              {!! Form::label('Nome') !!}
              {!! Form::text('name', null, ['placeholder'=>'Nome', 'class'=>'form-control', 'required'=>'required']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('E-mail') !!}
            {!! Form::email('email', null, ['placeholder'=>'E-mail', 'class'=>'form-control', 'required'=>'required']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('Selecione curso(s)') !!}
            {!! Form::select('courses[]', $courses , null, ['multiple'=>'multiple', 'class'=>'form-control']) !!}
          </div>


          <div class="form-group">
                {!! Form::submit('Cadastrar aluno', [ 'class'=>'btn btn-primary float-right']) !!}
          </div>
  {!! Form::close() !!}

    </div>
  </div>
</div>
@endsection
