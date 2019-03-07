@extends('layouts.app')

@section('content')
@include('autores.pheader')

<div class="main main-raised">
  <div class="section section-basic">
  <div class="container">
    <section class="content-header">
        <h1>
            Alta de nuevo Autor
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
      <div class="row">
        <div class="col-sm">



                    {!! Form::open(['route' => 'autoress.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('autores.fields')

                    {!! Form::close() !!}

            </div>
        </div>
    </div>
  </div>
</div>
</div>
@endsection
