<table class="table" id="autores-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($autores as $autores)
        <tr>
            <td>{!! $autores->nombre !!}</td>
            <td>{!! $autores->nacionalidad !!}</td>
            <td>
                {!! Form::open(['route' => ['autoress.destroy', $autores->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('autoress.show', [$autores->id]) !!}" class='btn btn-info btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Ver detalles"><i class="material-icons">visibility</i></a>
                    <a href="{!! route('autoress.edit', [$autores->id]) !!}" class='btn btn-primary btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Editar"><i class="material-icons">create</i></a>
                    {!! Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro de eliminar este elemento?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
