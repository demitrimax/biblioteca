@extends('layouts.app')

@section('content')
@include('autores.pheader')

<div class="main main-raised">
  <div class="container">
    <section class="content-header">
        <h1>
            Alta de nuevo Autores
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
      <div class="row">
        <div class="col-sm">



                    {!! Form::open(['route' => 'autores.store']) !!}

                        @include('autores.fields')

                    {!! Form::close() !!}

            </div>
        </div>
    </div>
  </div>
</div>
@endsection
