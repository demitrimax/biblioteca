@extends('layouts.app')

@section('content')
@include('generos.pheader')
<div class="main main-raised">
  <div class="section section-basic">
  <div class="container">
    <section class="content-header">
        <h1>
            Genero
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
               <div class="row">
               <div class="col-ms">
                   {!! Form::model($genero, ['route' => ['generos.update', $genero->id], 'method' => 'patch']) !!}

                        @include('generos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
   </div>
  </div>
</div>
</div>
@endsection
