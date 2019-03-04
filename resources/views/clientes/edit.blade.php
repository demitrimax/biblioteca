@extends('layouts.app')

@section('content')
@include('clientes.pheader')
<div class="main main-raised">
  <div class="section section-basic">
    <div class="container">
    <section class="content-header">
        <h1>
            Editar Cliente
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
               <div class="row">
                 <div class="col-md">
                   {!! Form::model($clientes, ['route' => ['clientes.update', $clientes->id], 'method' => 'patch']) !!}

                        @include('clientes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
   </div>
  </div>
</div>
</div>
@endsection
