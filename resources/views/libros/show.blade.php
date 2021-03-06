@extends('layouts.app')

@section('body-class', 'profile-page sidebar-collapse')
@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('materialkit/assets/img/thumb-1920-26102.jpg')}}');"></div>
<div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <a href="#" data-toggle="modal" data-target="#portadaimagen">
                <img src="{{ asset($libros->imgportada) }}" alt="Circle Image" width="50" height="50" class="img-raised rounded img-fluid">
                </a>
              </div>
              <div class="name">
                <h3 class="title">{{$libros->nombre}}</h3>
                <h6><a href="{{url('/autores/'.$libros->autor_id)}}">{{$libros->autor->nombre}}</a></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 ml-auto mr-auto">
            <h2>Sinópsis</h2>
            <h4>{!! $libros->sinopsis !!}</h4>
            <br>
            @if($ejemplares->count()>0)
            <table class="table">
              <thead>
                <tr>
                  <td>Ejemplares</td>
                  <td>Acciones</td>
                </tr>
              </thead>
              <tbody>
                @foreach($ejemplares as $ejemplar)
                <tr>
                  <td>
                    {{$ejemplar->numeje}}
                  </td>
                  <td>
                    {!! Form::open(['url' => 'carrito/guardar']) !!}
                      {!! Form::hidden('ejemplar', $ejemplar->id)!!}
                      <button type="submit" class="btn btn-primary">Agregar al carrito<div class="ripple-container"></div></button>
                    {!! Form::close() !!}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @else
            <p><span class="badge badge-pill badge-warning">No existen ejemplares disponibles.</span></p>

            @endif

            <a class="btn btn-primary" href="{{url('libros/'.$libros->id.'/edit/')}}">Editar<div class="ripple-container"></div></a>
            <a class="btn btn-primary" href="{{url('libros/')}}">Regresar<div class="ripple-container"></div></a>
            @can('ejemplares-create')
            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#ejemplares">Agregar Ejemplares<div class="ripple-container"></div></a>
            @endcan
          </div>


      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="portadaimagen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Portada</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="{{ asset($libros->imgportada) }}" alt="Circle Image" class="img-raised rounded img-fluid">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
@can('ejemplares-create')
  <!-- Modal -->
  <div class="modal fade" id="ejemplares" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"Agregar Ejemplares</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          {!! Form::open(['route' => 'ejemplares.store']) !!}
        <div class="modal-body">

          @include('libros.fields0')
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Agregar</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
  @endcan
@endsection
