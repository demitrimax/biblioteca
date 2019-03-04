@extends('layouts.app')

@section('content')
@include('clientes.pheader')
<div class="main main-raised">
  <div class="section section-basic">
    <section class="content-header">
        <h1>
            Clientes
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('clientes.show_fields')
                    <a href="{!! route('clientes.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
