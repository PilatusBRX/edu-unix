@extends('layouts.app')
@section('title', 'Create Course')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h3 class="text-center mt-5 mb-4">Criar cursos </h3>

  {!! Form::open(['url' => 'courses']) !!}
          <div class="form-group">
              {!! Form::label('Cursos') !!}
              {!! Form::text('name', null, ['placeholder'=>'Cursos', 'class'=>'form-control']) !!}
          </div>


          <div class="form-group">
                {!! Form::submit('Criar cursos', [ 'class'=>'btn btn-primary float-right']) !!}
          </div>
  {!! Form::close() !!}

    </div>
  </div>
</div>
@endsection
