@extends('layouts.app')

@section('content')
@include('ejemplares.pheader')
<div class="main main-raised">
  <div class="section section-basic">
    <section class="content-header">
        <h1>
            Ejemplares
        </h1>
    </section>
    <div class="container">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ejemplares.show_fields')
                    <a href="{!! route('ejemplares.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
