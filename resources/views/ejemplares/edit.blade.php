@extends('layouts.app')

@section('content')
@include('ejemplares.pheader')
<div class="main main-raised">
  <div class="section section-basic">
  <div class="container">
    <section class="content-header">
        <h1>
            Ejemplares
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
               <div class="row">
               <div class="col-ms">
                   {!! Form::model($ejemplares, ['route' => ['ejemplares.update', $ejemplares->id], 'method' => 'patch']) !!}

                        @include('ejemplares.fields')

                   {!! Form::close() !!}
               </div>
           </div>
   </div>
  </div>
</div>
</div>
@endsection
