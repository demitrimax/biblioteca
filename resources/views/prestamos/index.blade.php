@extends('layouts.app')
@section('title',config('app.name').' | PRESTAMOS' )

@section('content')
  @include('prestamos.pheader')

  <div class="main main-raised">
        <div class="section section-basic">
                  @include('adminlte-templates::common.errors')
    <div class="container">

    <section class="content-header">
        <h1 class="pull-left">Préstamos</h1>
        <h1 class="pull-right">

        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
              @include('prestamos.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
  </div>
</div>
</div>
@endsection
