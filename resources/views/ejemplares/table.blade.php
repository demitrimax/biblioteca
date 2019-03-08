<table class="table table-responsive" id="ejemplares-table">
    <thead>
        <tr>
            <th>Libro</th>
            <th>Número de Ejemplar</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ejemplares as $ejemplares)
        <tr>
            <td>{!! $ejemplares->libro_id !!}</td>
            <td>{!! $ejemplares->numeje !!}</td>
            <td>
                {!! Form::open(['route' => ['ejemplares.destroy', $ejemplares->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ejemplares.show', [$ejemplares->id]) !!}" class='btn btn-info btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Ver detalles"><i class="material-icons">visibility</i></a>
                    <a href="{!! route('ejemplares.edit', [$ejemplares->id]) !!}" class='btn btn-primary btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Editar"><i class="material-icons">create</i></a>
                    {!! Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro de eliminar este elemento?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
