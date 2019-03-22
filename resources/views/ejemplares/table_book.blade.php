@section('css')
<style>

table .collapse.in {
	display:table-row;
}
</style>
@endsection
<table class="table table-responsive table-hover" id="ejemplares-table">
    <thead>
        <tr>
            <th>Libro</th>
            <th>Número de Ejemplares</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($libros as $key=>$libro)
        <tr class="clickable" data-toggle="collapse" id="row{{$key+1}}" data-target=".row{{$key+1}}">
            <td><h6 class="text-success"><i class="material-icons">zoom_in</i>{!! $libro->nombre !!}</h6></td>
            <td>{!! $libro->ejemplares->count() !!}</td>
            <td></td>
        </tr>
        @foreach($libro->ejemplares as $ejemplar)
          <tr  class="collapse row{{$key+1}}">
            <td>
              <i class="material-icons">code</i>{{$ejemplar->numeje}}
            </td>
          <td>
          </td>
          <td>
            {!! Form::open(['route' => ['ejemplares.destroy', $ejemplar->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <a href="{!! route('ejemplares.show', [$ejemplar->id]) !!}" class='btn btn-info btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Ver detalles"><i class="material-icons">visibility</i></a>
                @can('ejemplares-edit')
                <a href="{!! route('ejemplares.edit', [$ejemplar->id]) !!}" class='btn btn-primary btn-xs' data-toggle="tooltip" data-placement="top" title data-container="body" data-original-title="Editar"><i class="material-icons">create</i></a>
                @endcan
                @can('ejemplares-delete')
                {!! Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro de eliminar este elemento?')"]) !!}
                @endcan
            </div>
            {!! Form::close() !!}
          </td>
        </tr>
          @endforeach

    @endforeach
    </tbody>
</table>
{{$libros->links()}}
