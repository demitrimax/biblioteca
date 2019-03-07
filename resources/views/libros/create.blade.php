@extends('layouts.app')

@section('content')
  @include('libros.pheader')
  <div class="main main-raised">
            <div class="section section-basic">
    <div class="container">
    <section class="content-header">
        <h1>
            Alta de Libros
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
      <div class="row">
        <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-body">

                    {!! Form::open(['route' => 'libros.store', 'enctype' => 'multipart/form-data']) !!}

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

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@endsection
