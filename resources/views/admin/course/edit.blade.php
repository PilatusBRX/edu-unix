@extends('layouts.app')
@section('title', 'Create Course')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h3 class="text-center mt-5 mb-4">Update Course </h3>

  {!! Form::open(['url' => 'courses']) !!}
          <div class="form-group">
              {!! Form::label('Course') !!}
              {!! Form::text('name', null, ['placeholder'=>'Course', 'class'=>'form-control']) !!}
          </div>


          <div class="form-group">
                {!! Form::submit('Update', [ 'class'=>'btn btn-primary float-right']) !!}
          </div>
  {!! Form::close() !!}

    </div>
  </div>
</div>
@endsection
