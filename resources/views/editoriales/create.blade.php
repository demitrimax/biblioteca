@extends('layouts.app')

@section('content')
@include('editoriales.pheader')

<div class="main main-raised">
  <div class="container">
    <section class="content-header">
        <h1>
            Alta de Editorial
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
    <div class="row">
              <div class="col-sm-6">

                    {!! Form::open(['route' => 'editoriales.store']) !!}

                        @include('editoriales.fields')

                    {!! Form::close() !!}
                  </div>
        </div>
    </div>
  </div>
</div>
@endsection
