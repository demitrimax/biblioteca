<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Editorial Id Field -->
<div class="form-group">
    {!! Form::label('editorial_id', 'Editorial Id:') !!}
    {!! Form::number('editorial_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Autor Id Field -->
<div class="form-group">
    {!! Form::label('autor_id', 'Autor Id:') !!}
    {!! Form::number('autor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Genero Id Field -->
<div class="form-group">
    {!! Form::label('genero_id', 'Genero Id:') !!}
    {!! Form::number('genero_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Anioedit Field -->
<div class="form-group">
    {!! Form::label('anioedit', 'Año:') !!}
    {!! Form::date('anioedit', null, ['class' => 'form-control']) !!}
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
