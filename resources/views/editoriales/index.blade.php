@extends('layouts.app')

@section('content')
@include('editoriales.pheader')

<div class="main main-raised">
  <div class="section section-basic">
  <div class="container">
    <section class="content-header">
        <h1 class="pull-left">Editoriales</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('editoriales.create') !!}">Agregar Nueva</a>
        </h1>
    </section>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('editoriales.table')
            </div>
            {{$editoriales->links()}}
        </div>
        <div class="text-center">

        </div>

  </div>
</div>
</div>
@endsection
