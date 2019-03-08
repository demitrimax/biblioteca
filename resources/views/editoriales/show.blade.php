@extends('layouts.app')

@section('content')
@include('editoriales.pheader')

<div class="main main-raised">
  <div class="section section-basic">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Editoriales</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('editoriales.index') }}"> Regresar</a>
            </div>
        </div>
    </div>


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
