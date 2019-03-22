@if($clientes->carritos->count()>0)
<table class="table">
  <thead>
    <tr>
      <td>Número.</td>
      <td>Título</td>
      <td>Ejemplar</td>
      <td>Acciones</td>
    </tr>
  </thead>
  <tbody>
    @foreach($clientes->carritos as $key=>$carrito)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$carrito->ejemplar->libro->nombre}}</td>
      <td>{{$carrito->ejemplar->numeje}}</td>
      <td><a href="{{url('carrito/devolver/'.$carrito->id)}}">Devolver</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
