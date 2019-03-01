<table class="table table-responsive" id="libros-table">
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
    @foreach($libros as $libros)
        <tr>
            <td>{!! $libros->nombre !!}</td>
            <td>{!! $libros->editorial_id !!}</td>
            <td>{!! $libros->autor_id !!}</td>
            <td>{!! $libros->genero_id !!}</td>
            <td>{!! $libros->anioedit !!}</td>
            <td>{!! $libros->portadaimg !!}</td>
            <td>
                {!! Form::open(['route' => ['libros.destroy', $libros->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('libros.show', [$libros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('libros.edit', [$libros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
