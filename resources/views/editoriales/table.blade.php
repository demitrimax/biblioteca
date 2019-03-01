<table class="table table-responsive" id="editoriales-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Facebook</th>
        <th>Twitter</th>
        <th>Website</th>
        <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($editoriales as $editoriales)
        <tr>
            <td>{!! $editoriales->nombre !!}</td>
            <td>{!! $editoriales->facebook !!}</td>
            <td>{!! $editoriales->twitter !!}</td>
            <td>{!! $editoriales->website !!}</td>
            <td>
                {!! Form::open(['route' => ['editoriales.destroy', $editoriales->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('editoriales.show', [$editoriales->id]) !!}" class='btn btn-info btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Ver detalles"><i class="material-icons">visibility</i></a>
                    <a href="{!! route('editoriales.edit', [$editoriales->id]) !!}" class='btn btn-default btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Editar"><i class="material-icons">create</i></a>
                    {!! Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
