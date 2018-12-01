@extends('layouts.app')
@section('title', 'Course List')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 ">
      <div class="jumbotron text-center pb-5 pt-5">
        <h1 class="text-center mb-4 mt-5">Bem-vindo ao Portal de cursos da Edu Unix</h1>
        <h3 class="text-center mb-4 mt-4">Conheço os cursos do portal</h3>
        <a class="btn btn-primary  mb-4 mt-4" href="{{url('/courses')}}">Acesse agora</a>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="box col-md-4 mb-5 mt-5 text-center">
      <span class="fa fa-graduation-cap mt-4 mb-4"></span>
      <h4>Justo Nullam Euismod</h4>
      <p>Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
    <div class="box col-md-4 mb-5 mt-5 text-center">
      <span class="fa fa-user mt-4 mb-4"></span>
      <h4>Nullam Adipiscing Ridiculus</h4>
      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper.</p>
    </div>

    <div class="box col-md-4 mb-5 mt-5 text-center">
      <span class="fa fa-flag mt-4 mb-4"></span>
      <h4>Dolor Condimentum</h4>
      <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    </div>
  </div>
</div>
@include('layouts.footer')
@endsection
