@extends('layouts.app')
@section('title',config('app.name').' | Lista de Libros' )

@section('content')
  @include('libros.pheader')

  <div class="main main-raised">
        <div class="section section-basic">
    <div class="container">

    <section class="content-header">
        <h1 class="pull-left">Libros</h1>
        <h1 class="pull-right">
          @can('libros-create')
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('libros.create') !!}">Alta de Libro</a>
          @endcan
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('libros.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
  </div>
</div>
</div>
@endsection
