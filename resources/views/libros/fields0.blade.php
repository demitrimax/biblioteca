@php

$alat = random_int(100, 999);
$fecha = date('dmyhis');
$mialeatorio = $alat.$fecha;

if(isset($libro->numeje))
{
  $mialeatorio = $libro->numeje;
}
@endphp
@section('css')
<link href="{{asset('select2/dist/css/select2.min.css')}}" rel="stylesheet" />
<!-- iCheck for checkboxes and radio inputs -->
 <link rel="stylesheet" href="{{asset('iCheck/skins/all.css')}}">
@endsection
<!-- Libro Id Field -->
    {!! Form::hidden('libro_id',  $libros->id ) !!}


<!-- Numeje Field -->
<div class="form-group">
    {!! Form::label('numeje', 'Número de Ejemplar:') !!}
    {!! Form::text('numeje', $mialeatorio, ['class' => 'form-control', 'maxlength'=>'10']) !!}
</div>


@section('scripts')
  <script src="{{asset('select2/dist/js/select2.full.min.js')}}"></script>
  <!-- iCheck 1.0.1 -->
  <script src="{{asset('iCheck/icheck.min.js')}}"></script>
  <script>
  $(document).ready(function() {
      $('.select2').select2();
  });
  </script>
@endsection
