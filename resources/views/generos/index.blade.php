@extends('layouts.app')
@section('title',config('app.name').' | Géneros')

@section('content')
@include('generos.pheader')

<div class="main main-raised">
  <div class="section section-basic">
  <div class="container">
    <section class="content-header">
        <h1 class="pull-left">Géneros</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('generos.create') !!}">Agregar Nuevo</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('generos.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
  </div>
</div>
</div>
@endsection
