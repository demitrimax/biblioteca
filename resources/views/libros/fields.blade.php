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

<!-- Portadaimg Field -->
<div class="form-group">
    {!! Form::label('portadaimg', 'Portada:') !!}
    {!! Form::file('portadaimg', null) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('libros.index') !!}" class="btn btn-default">Cancelar</a>
</div>
