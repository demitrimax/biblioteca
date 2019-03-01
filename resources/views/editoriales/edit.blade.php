@extends('layouts.app')

@section('content')
@include('editoriales.pheader')

<div class="main main-raised">
  <div class="section section-basic">
  <div class="container">
    <section class="content-header">
        <h1>
            Editoriales
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
      <div class="row">
       <div class="col-sm">

                   {!! Form::model($editoriales, ['route' => ['editoriales.update', $editoriales->id], 'method' => 'patch']) !!}

                        @include('editoriales.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
 </div>
</div>
</div>
@endsection
