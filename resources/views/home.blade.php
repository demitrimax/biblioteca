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

         <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                      <i class="material-icons">perm_media</i> Genero
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                      <i class="material-icons">account_box</i> Autores
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                      <i class="material-icons">bookmarks</i> Editoriales
                    </a>
                  </li>
              </ul>
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Dashboard</div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif

                      You are logged in!
                  </div>
              </div>
          </div>
      </div>
      <a href="route('libros.create')" class="btn btn-primary btn-round">Alta de Libro</a>
  </div>
</div>
@endsection
