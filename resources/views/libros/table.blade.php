<table class="table" id="libros-table">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Editorial</th>
        <th>Autor</th>
        <th>Genero</th>
        <th>Año</th>
        <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($libros as $libro)
        <tr>
            <td>{!! $libro->nombre !!}</td>
            <td>{!! $libro->editorial->nombre !!}</td>
            <td>{!! $libro->autor->nombre !!}</td>
            <td>{!! $libro->genero->nombre !!}</td>
            <td>{!! date('Y', strtotime($libro->anioedit)) !!}</td>
            <td>
                {!! Form::open(['route' => ['libros.destroy', $libro->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('libros.show', [$libro->id]) !!}" class='btn btn-info btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Ver detalles"><i class="material-icons">visibility</i></a>
                    <a href="{!! route('libros.edit', [$libro->id]) !!}" class='btn btn-primary btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Editar"><i class="material-icons">create</i></a>
                    {!! Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro de eleiminar este elemento?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
