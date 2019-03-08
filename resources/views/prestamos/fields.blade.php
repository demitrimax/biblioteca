@section('css')
<link href="{{asset('select2/dist/css/select2.min.css')}}" rel="stylesheet" />
<!-- iCheck for checkboxes and radio inputs -->
 <link rel="stylesheet" href="{{asset('iCheck/skins/all.css')}}">
@endsection

<div class="row">
      <div class="col-lg-6 col-md-4">
        <div class="title">
          <h3>Datos del Préstamo</h3>
        </div>
        <div class="form-group">
            {!! Form::label('cliente', 'Cliente:') !!}
            {!! Form::select('cliente', $clientes, null, ['class' => 'form-control select2']) !!}
        </div>
      </div>

      <div class="col-lg-6 col-md-4">
        <div class="title">
          <h3>Seleccione el libro</h3>
        </div>
        <div class="form-group">
            {!! Form::label('libro', 'Libro:') !!}
            {!! Form::select('libro', $libros, null, ['class' => 'form-control select2']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ejemplar', 'Ejemplar:') !!}
            {!! Form::select('ejemplar', [], null, ['class' => 'form-control select2']) !!}
        </div>
      </div>

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
