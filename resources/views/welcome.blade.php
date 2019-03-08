@extends('layouts.app')

@section('content')

  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('materialkit/assets/img/Libros-a-tope.jpg')}}')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Sistema Biblioteca</h1>
          <h4>Aplicativo para el control y seguimiento de Biblioteca</h4>
          <br>
          <a href="{{route('prestamos.index')}}" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-book"></i> PRÉSTAMOS
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
            <h2 class="title">Carácteristicas Principales</h2>
            <h5 class="description">Dele un vistaso a las principales carácteristicas de nuestra aplicación web.</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">book</i>
                </div>
                <h4 class="info-title">Nuestros Libros</h4>
                <p>Navegue por la amplia selección de libros que tenemos en nuestros acervos, podrá  buscar por autor o por editorial, incluso por año.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">account_circle</i>
                </div>
                <h4 class="info-title">Clientes</h4>
                <p>Puede ver los clientes que se tienen registrados en el sistema y a la vez tambien podrá visualizar los libros que tiene en prestamos.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">important_devices</i>
                </div>
                <h4 class="info-title">Multiplataforma</h4>
                <p>No importa si es un telefono celular, tablet o pc de escritorio, nuestro sistema funcionará en los diferentes dispositivos.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
