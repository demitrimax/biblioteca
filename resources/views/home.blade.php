@extends('layouts.app')

@section('content')
<div class="page-header header-sm header-filter" data-parallax="true" style="background-image: url('{{asset('materialkit/assets/img/library_4.jpg')}}')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center">
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="main main-raised">
  <div class="container">
     <h2 class="title text-center">Dashboard</h2>

     <div id="libros">
      <div class="title">
        <h2>Libros</h2>
      </div>
      <br>
    @foreach($libros as $key=>$libro)
    @if ($key%4==0)
      <div class="row">
        @endif
        <div class="col-sm-2 ml-auto">
          <h4>{{$libro->nombre}}</h4>
          <img src="{{$libro->imgportada}}" alt="Rounded Image" class="rounded img-fluid" width="120">
        </div>
        @endforeach
      </div>

    </div>

      @can('libros-create')
      <a href="{{route('libros.create')}}" class="btn btn-primary btn-round">Alta de Libro</a>
      @endcan
  </div>
</div>
@endsection
