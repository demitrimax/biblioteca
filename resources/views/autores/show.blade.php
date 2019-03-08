@extends('layouts.app')

@section('body-class', 'profile-page sidebar-collapse')
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('materialkit/assets/img/64d2bec0d8df456f834d96aa5de96524.jpg')}}');"></div>
<div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <a href="#" data-toggle="modal" data-target="#fotoautor">
                <img src="{{ asset($autores->autorfoto) }}" alt="Circle Image" width="50" height="50" class="img-raised rounded img-fluid">
                </a>
              </div>
              <div class="name">
                <h3 class="title">{{$autores->nombre}}</h3>
                <h6>Nacionalidad: {{$autores->nacionalidad}}</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 ml-auto mr-auto">
            <h2>Biografía</h2>
            <h4>{{$autores->bio}}</h4>
            <br>
            <a class="btn btn-primary" href="{{url('autores/'.$autores->id.'/edit/')}}">Editar<div class="ripple-container"></div></a>
          </div>


      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="fotoautor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Foto Autor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="{{ asset($autores->autorfoto) }}" alt="Circle Image" class="img-raised rounded img-fluid">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

@endsection
