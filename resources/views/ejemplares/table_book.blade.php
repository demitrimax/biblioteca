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
            Eliminar
          </td>
        </tr>
          @endforeach

    @endforeach
    </tbody>
</table>
{{$libros->links()}}
