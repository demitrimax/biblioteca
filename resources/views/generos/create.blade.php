@extends('layouts.app')

@section('content')
@include('clientes.pheader')

<div class="main main-raised">
    <div class="section section-basic">
  <div class="container">
    <section class="content-header">
        <h1>
            Alta de nuevo Genero
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
      <div class="row">
        <div class="col-sm">



                    {!! Form::open(['route' => 'generos.store']) !!}

                        @include('generos.fields')

                    {!! Form::close() !!}

            </div>
        </div>
    </div>
  </div>
</div>
</div>
@endsection
