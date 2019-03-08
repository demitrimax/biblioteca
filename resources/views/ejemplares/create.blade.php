@extends('layouts.app')

@section('content')
@include('ejemplares.pheader')

<div class="main main-raised">
  <div class="section section-basic">
  <div class="container">
    <section class="content-header">
        <h1>
            Alta de nuevo Ejemplares
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
      <div class="row">
        <div class="col-sm">



                    {!! Form::open(['route' => 'ejemplares.store']) !!}

                        @include('ejemplares.fields')

                    {!! Form::close() !!}

            </div>
        </div>
    </div>
  </div>
</div>
</div>
@endsection
