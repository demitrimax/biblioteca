@extends('layouts.app')

@section('content')
@include('generos.pheader')
<div class="main main-raised">
  <div class="section section-basic">

<section>
    <div class="container ">

        <section class="error-wrapper text-center">
            <h1><img alt="" src="img/403-_you_are_not_authorized.png"></h1>
            <h2>NO TIENE PERMISOS!!!</h2>
            <h3>Algo salió mal, usted no tiene permiso para este recurso..</h3>
            <p class="nrml-txt">Usted puede <a href="mailto:moi.aguilar@outlook.com">contactar a soporte</a> si cree que el problema es de nosotros.</p>
            <a class="back-btn" href="{{url('/home')}}"> Regrese al Inicio</a>
        </section>

    </div>
</section>
</div>
</div>
@endsection
