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
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('editoriales.show_fields')
                    <a href="{!! route('editoriales.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
@endsection
