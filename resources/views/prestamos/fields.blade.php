@section('css')
<link href="{{asset('select2/dist/css/select2.min.css')}}" rel="stylesheet" />
<!-- iCheck for checkboxes and radio inputs -->
 <link rel="stylesheet" href="{{asset('iCheck/skins/all.css')}}">
@endsection

<div class="row">
      <div class="col-lg-6 col-md-4">
        {!! Form::open(['url' => 'carrito/guardar']) !!}
        <div class="title">
          <h3>Datos del Préstamo</h3>
        </div>
        <div class="form-group">
            {!! Form::label('cliente', 'Cliente:') !!}
            {!! Form::select('cliente', $clientes, null, ['class' => 'form-control select2', 'placeholder'=>'Seleccione el Cliente']) !!}
        </div>
      </div>

      <div class="col-lg-6 col-md-4">
        <div class="title">
          <h3>Seleccione el libro</h3>
        </div>
        <div class="form-group">
            {!! Form::label('libro', 'Libro:') !!}
            {!! Form::select('libro', $libros, null, ['class' => 'form-control select2', 'placeholder'=>'Seleccione un libro']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ejemplar', 'Ejemplar:') !!}
            {!! Form::select('ejemplar', [], null, ['class' => 'form-control select2']) !!}
        </div>
        <button class="btn btn-primary btn-round">Agregar<div class="ripple-container"></div></button>

    {!! Form::close() !!}

        <p class="text-info">
                Puede tambien capturar el número de ejemplar</p>

      <div class="form-group">
          {!! Form::label('ejemplar', 'Ejemplar Número:') !!}
          {!! Form::text('ejemplar', null, ['class' => 'form-control']) !!}
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
  $('#libro').on('change', function(e) {
    //console.log(e);
    var libro_id = e.target.value;
    //ajax
    $.get('{{url('/')}}/GetEjemplares/'+libro_id, function(data) {
      //exito al obtener los datos
      //console.log(data);
      $('#ejemplar').empty();
      $.each(data, function(index, ejemplares) {
        $('#ejemplar').append('<option value ="' + ejemplares.id + '">'+ejemplares.numeje+'</option>' );
      });
    });
  });
  </script>
@endsection
