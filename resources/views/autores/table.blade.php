<table class="table table-responsive" id="autores-table">
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
                {!! Form::open(['route' => ['autores.destroy', $autores->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('autores.show', [$autores->id]) !!}" class='btn btn-info btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Ver detalles"><i class="material-icons">visibility</i></a>
                    <a href="{!! route('autores.edit', [$autores->id]) !!}" class='btn btn-primary btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Editar"><i class="material-icons">create</i></a>
                    {!! Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro de eliminar este elemento?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
