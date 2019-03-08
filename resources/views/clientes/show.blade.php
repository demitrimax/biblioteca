@extends('layouts.app')

@section('content')
@include('clientes.pheader')
<div class="main main-raised">
  <div class="section section-basic">

    <section class="container">
        <h1>
            Cliente: <b>{{$clientes->nombre}}</b>
        </h1>
    </section>
    <div class="container">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('clientes.show_fields')
                    <a href="{!! route('clientes.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
