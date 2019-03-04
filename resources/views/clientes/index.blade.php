@extends('layouts.app')

@section('content')
@include('clientes.pheader')

<div class="main main-raised">
  <div class="section section-basic">
    <div class="container">
    <section class="content-header">
        <h1 class="pull-left">Clientes</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('clientes.create') !!}">Agregar Nuevo</a>
        </h1>
    </section>
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('clientes.table')
            </div>
        </div>
        <div class="text-center">

        </div>
  </div>
</div>
</div>
@endsection
