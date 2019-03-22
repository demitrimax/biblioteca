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
        {!! Form::open(['url' => ['carrito/asignar'], 'id'=>'formasig' ]) !!}
        <div class="form-group">
            {!! Form::label('cliente', 'Cliente:') !!}
            {!! Form::select('cliente', $clientes, null, ['class' => 'form-control select2', 'placeholder'=>'Seleccione el Cliente', 'required']) !!}
        </div>
        {!! Form::close()!!}
      </div>
    </div>
<table class="table">
  <thead>
    <tr>
      <td>
        Número
      </td>
      <td>
        Titulo
      </td>
      <td>
        Ejemplar
      </td>
      <td>
        Acciones
      </td>
    </tr>
  </thead>
  <tbody>
    @foreach($carrito as $key=>$carr)
    <tr>
        <td>
          {{$key+1}}
        </td>
        <td>
          {{$carr->ejemplar->libro->nombre}}
        </td>
        <td>
          {{$carr->ejemplar->numeje}}
        </td>
        <td>
          {!! Form::open(['url' => ['carrito/eliminar', $carr->id]]) !!}
          <button type="submit" class="btn btn-primary btn-fab btn-round">
              <i class="material-icons">delete_forever</i>
            <div class="ripple-container"></div>
          </button>
          {!! Form::close() !!}
        </td>
        @endforeach
    </tr>

  </tbody>
</table>
<br>
<button class="btn btn-primary btn-round" onclick="sendform()">Asignar Prestamo <div class="ripple-container"></div></button>

@section('scripts')

  <script src="{{asset('select2/dist/js/select2.full.min.js')}}"></script>
  <!-- iCheck 1.0.1 -->
  <script src="{{asset('iCheck/icheck.min.js')}}"></script>
  <script>
  $(document).ready(function() {
      $('.select2').select2();
  });
  function sendform()
  {
    document.forms['formasig'].submit();
  }
  </script>
@endsection
