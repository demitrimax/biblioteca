<table class="table" id="libros-table">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Editorial</th>
        <th>Autor</th>
        <th>Género</th>
        <th>Año</th>
        <th>Ejemplares</th>
        <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($libros as $libro)
        <tr>
            <td><a href="{!! route('libros.show', [$libro->id]) !!}">{!! $libro->nombre !!}</a></td>
            <td>{!! $libro->editorial->nombre !!}</td>
            <td>{!! $libro->autor->nombre !!}</td>
            <td>{!! $libro->genero->nombre !!}</td>
            <td>{!! date('Y', strtotime($libro->anioedit)) !!}</td>
            <td>{!! $libro->ejemplares->count() !!}</td>
            <td>
                {!! Form::open(['route' => ['libros.destroy', $libro->id], 'method' => 'delete', 'id'=>'form'.$libro->id]) !!}
                <div class='btn-group'>

                    <a href="{!! route('libros.show', [$libro->id]) !!}" class='btn btn-info btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Ver detalles"><i class="material-icons">visibility</i></a>
                    @can('libros-edit')
                    <a href="{!! route('libros.edit', [$libro->id]) !!}" class='btn btn-primary btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Editar"><i class="material-icons">create</i></a>
                    @endcan
                    @can('libros-delete')
                    {!! Form::button('<i class="material-icons">delete</i>', ['type' => 'button', 'class' => 'btn btn-danger btn-xs', 'onclick' => "ConfirmDelete(".$libro->id.")"]) !!}
                    @endcan
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$libros->links()}}
@section('scripts')
<script>
function ConfirmDelete(id) {
  swal({
        title: '¿Estás seguro?',
        text: 'Estás seguro de borrar este elemento.',
        type: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        }).then((result) => {
  if (result.value) {
    document.forms['form'+id].submit();
  }
})

}
</script>
@endsection
