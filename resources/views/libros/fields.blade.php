<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'maxlength' => '60']) !!}
</div>

<!-- Editorial Id Field -->
<div class="form-group">
    {!! Form::label('editorial_id', 'Editorial:') !!}
    {!! Form::select('editorial_id', $editoriales, null, ['class' => 'form-control select2', 'placeholder'=>'Seleccione una editorial']) !!}
</div>

<!-- Autor Id Field -->
<div class="form-group">
    {!! Form::label('autor_id', 'Autor:') !!}
    {!! Form::select('autor_id', $autores, null, ['class' => 'form-control select2']) !!}
</div>

<!-- Genero Id Field -->
<div class="form-group">
    {!! Form::label('genero_id', 'Genero:') !!}
    {!! Form::select('genero_id', $generos,null, ['class' => 'form-control']) !!}
</div>

<!-- Anioedit Field -->
<div class="form-group">
    {!! Form::label('anioedit', 'Año:') !!}
    {!! Form::date('anioedit', null, ['class' => 'form-control']) !!}
</div>

<!-- Portadaimg Field -->
<div class="form-group">
    {!! Form::label('sinpsos', 'Sinopsis:') !!}
    {!! Form::textarea('sinopsis', null, ['class' => 'form-control']) !!}
</div>

<!-- Portadaimg Field
<div class="form-group">
    {!! Form::label('portadaimg', 'Portada:') !!}
    {!! Form::file('portadaimg', null, ['class'=>'form-file-upload']) !!}
</div>
-->

<div class="form-group form-file-upload form-file-multiple">
  <input type="file" multiple="" class="inputFileHidden" id="portadaimg" name="portadaimg">
  <div class="input-group">
      <input type="text" class="form-control inputFileVisible" placeholder="Portada...">
      <span class="input-group-btn">
          <button type="button" class="btn btn-fab btn-round btn-primary">
              <i class="material-icons">attach_file</i>
          </button>
      </span>
  </div>
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('libros.index') !!}" class="btn btn-default">Cancelar</a>
</div>

@section('scripts')
<script>

    // FileInput
    $('.form-file-simple .inputFileVisible').click(function() {
      $(this).siblings('.inputFileHidden').trigger('click');
    });

    $('.form-file-simple .inputFileHidden').change(function() {
      var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
      $(this).siblings('.inputFileVisible').val(filename);
    });

    $('.form-file-multiple .inputFileVisible, .form-file-multiple .input-group-btn').click(function() {
      $(this).parent().parent().find('.inputFileHidden').trigger('click');
      $(this).parent().parent().addClass('is-focused');
    });


    $('.form-file-multiple .btn').on('focus', function() {
      $(this).parent().siblings().trigger('focus');
    });

    $('.form-file-multiple .btn').on('focusout', function() {
      $(this).parent().siblings().trigger('focusout');
    });


</script>
@endsection
