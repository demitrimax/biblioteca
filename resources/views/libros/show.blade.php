@extends('layouts.app')

@section('body-class', 'profile-page sidebar-collapse')
@section('content')
@include('libros.pheader')
<div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="{{ asset($libros->portadaimg) }}" alt="Circle Image" width="50" height="50" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">{{$libros->nombre}}</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
          <p>{{$libros->sinopsis}}</p>
        </div>
      </div>
    </div>
  </div>
@endsection
