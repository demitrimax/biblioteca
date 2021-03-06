@extends('layouts.app')
@section('title',config('app.name').' | Editar Libro' )

@section('content')
  @include('libros.pheader')
<div class="main main-raised">
  <div class="section section-basic">
  <div class="container">
    <section class="content-header">
        <h1>
            Editar Libro
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
    <div class="row">
    <div class="col-md-6">
       <div class="box box-primary">
           <div class="box-body">

                   {!! Form::model($libros, ['route' => ['libros.update', $libros->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('libros.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
@endsection
