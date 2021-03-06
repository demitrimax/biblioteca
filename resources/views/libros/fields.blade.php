@section('css')
<link href="{{asset('select2/dist/css/select2.min.css')}}" rel="stylesheet" />
<!-- iCheck for checkboxes and radio inputs -->
 <link rel="stylesheet" href="{{asset('iCheck/skins/all.css')}}">
 <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection
  @php
    $fecha = null;
    $hoy = date('Y-m-d');
    if (isset($libros->anioedit))
    {
      $fecha = date('Y-m-d', strtotime($libros->anioedit));
    }
    //echo $fecha;
  @endphp
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
    {!! Form::select('autor_id', $autores, null, ['class' => 'form-control select2', 'placeholder'=>'Seleccione un autor']) !!}
</div>

<!-- Genero Id Field -->
<div class="form-group">
    {!! Form::label('genero_id', 'Género:') !!}
    {!! Form::select('genero_id', $generos,null, ['class' => 'form-control select2', 'placeholder'=>'Seleccione un Género']) !!}
</div>

<!-- Anioedit Field -->
<div class="form-group">
    {!! Form::label('anioedit', 'Fecha:') !!}
    {!! Form::date('anioedit', $fecha, ['class' => 'form-control', 'min'=>'1910-01-01', 'max'=>$hoy, 'required']) !!}
</div>

<!-- Portadaimg Field -->
<div class="form-group">
    {!! Form::label('sinopsis', 'Sinopsis:') !!}
    {!! Form::textarea('sinopsis', null, ['class' => 'form-control']) !!}
</div>

<!-- Portadaimg Field
<div class="form-group">
    {!! Form::label('portadaimg', 'Portada:') !!}
    {!! Form::file('portadaimg', null, ['class'=>'form-file-upload']) !!}
</div>
-->

<div class="form-group form-file-upload form-file-multiple">
  <input type="file" multiple="" class="inputFileHidden" id="portadaimg" name="portadaimg" accept="image/*">
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

    $('.form-file-multiple .inputFileHidden').change(function() {
      var names = '';
      for (var i = 0; i < $(this).get(0).files.length; ++i) {
        if (i < $(this).get(0).files.length - 1) {
          names += $(this).get(0).files.item(i).name + ',';
        } else {
          names += $(this).get(0).files.item(i).name;
        }
      }
      $(this).siblings('.input-group').find('.inputFileVisible').val(names);
    });

    $('.form-file-multiple .btn').on('focus', function() {
      $(this).parent().siblings().trigger('focus');
    });

    $('.form-file-multiple .btn').on('focusout', function() {
      $(this).parent().siblings().trigger('focusout');
    });

  </script>
  <script src="{{asset('select2/dist/js/select2.full.min.js')}}"></script>
  <!-- iCheck 1.0.1 -->
  <script src="{{asset('iCheck/icheck.min.js')}}"></script>
  <script>
  $(document).ready(function() {
      $('.select2').select2();
  });
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('sinopsis')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  });
  </script>

@endsection
