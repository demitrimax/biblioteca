@extends('layouts.app')

@section('content')
@include('ejemplares.pheader')


<div class="main main-raised">
  <div class="section section-basic">
  <div class="container">
    <section class="content-header">
        <h1 class="pull-left">Ejemplares</h1>
        <h1 class="pull-right">
          @can('ejemplares-create')
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('ejemplares.create') !!}">Agregar Nuevo</a>
          @endcan
        </h1>
    </section>
    <div class="container">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('ejemplares.table_book')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
  </div>
</div>
</div>
@endsection
