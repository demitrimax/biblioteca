@extends('layouts.app')

@section('content')
@include('autores.pheader')
<div class="main main-raised">
  <div class="section section-basic">
  <div class="container">
    <section class="content-header">
        <h1>
            Autores
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
               <div class="row">
               <div class="col-sm">
                   {!! Form::model($autores, ['route' => ['autoress.update', $autores->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('autores.fields')

                   {!! Form::close() !!}
               </div>
           </div>
   </div>
  </div>
</div>
</div>
@endsection
