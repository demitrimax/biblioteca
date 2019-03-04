<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>


<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>


<!-- Estado Id Field -->
<div class="form-group">
    {!! Form::label('estado_id', 'Estado:') !!}
    {!! Form::select('estado_id', $estados, null, ['class' => 'form-control']) !!}
</div>


<!-- Municipio Id Field -->
<div class="form-group">
    {!! Form::label('municipio_id', 'Municipio:') !!}
    {!! Form::select('municipio_id', $municipios, null, ['class' => 'form-control']) !!}
</div>


<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clientes.index') !!}" class="btn btn-default">Cancelar</a>
</div>

@push('script')
<script>
$('#estado_id').on('change', function(e) {
  //console.log(e);
  var estado_id = e.target.value;
  //ajax
  $.get('{{url('/')}}/GetMunicipios/'+estado_id, function(data) {
    //exito al obtener los datos
    //console.log(data);
    $('#municipio_id').empty();
    $.each(data, function(index, Municipios) {
      $('#municipio_id').append('<option value ="' + Municipios.id + '">'+Municipios.nombre+'</option>' );
    });
  });
});
</script>
@endpush
