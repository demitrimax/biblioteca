<table class="table" id="generos-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($generos as $genero)
        <tr>
            <td>{!! $genero->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['generos.destroy', $genero->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('generos.show', [$genero->id]) !!}" class='btn btn-info btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Ver detalles"><i class="material-icons">visibility</i></a>
                    @can('generos-edit')
                    <a href="{!! route('generos.edit', [$genero->id]) !!}" class='btn btn-primary btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Editar"><i class="material-icons">create</i></a>
                    @endcan
                    @can('generos-delete')
                    {!! Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro de eleiminar este elemento?')"]) !!}
                    @endcan
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
