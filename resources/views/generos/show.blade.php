@extends('layouts.app')

@section('content')
<div class="main main-raised">
  <div class="section section-basic">
    <section class="content-header">
        <h1>
            Genero
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('generos.show_fields')
                    <a href="{!! route('generos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
