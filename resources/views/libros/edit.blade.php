@extends('layouts.app')

@section('content')
  @include('libros.pheader')
<div class="main main-raised">
  <div class="container">
    <section class="content-header">
        <h1>
            Libros
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($libros, ['route' => ['libros.update', $libros->id], 'method' => 'patch']) !!}

                        @include('libros.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
 </div>
</div>
@endsection
