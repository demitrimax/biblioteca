@extends('layouts.app')

@section('content')

  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('materialkit/assets/img/Libros-a-tope.jpg')}}')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Sistema Biblioteca</h1>
          <h4>Aplicativo para el control y seguimiento de Biblioteca</h4>
          <br>
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> PRESTAMOS
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Nuestro Títulos</h2>
            <h5 class="description">Aquí podras ver algunos de los titulos que tenemos para tí.</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Free Chat</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Verified Users</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Fingerprint</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
