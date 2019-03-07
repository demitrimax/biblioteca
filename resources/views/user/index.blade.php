@extends('layouts.app')

@section('title',config('app.name').' | Administración de Usuarios' )

@section('content')
@include('user.pheader')
<div class="main main-raised">
  <div class="section section-basic">
<section class="container">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Administración de Usuarios</h3>
              <div class="pull-right">
                  <a class="btn btn-success" href="{{ route('user.create') }}"> Alta de Nuevo Usuario</a>
              </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif
            <!-- /.box-header -->

              <div class="box-body table-responsive no-padding">
                <table class="table table-bordered">
                 <tr>
                   <th>No</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Roles</th>
                   <th width="280px">Action</th>
                 </tr>
                 @foreach ($data as $key => $user)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                           <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                      @endif
                    </td>
                    <td>
                       <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Detalles</a>
                       <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Editar</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $user->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                  </tr>
                 @endforeach
                </table>



              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                                {!! $data->render() !!}
              </div>

          </div>
          <!-- /.box -->



        </div>

      </div>
      <!-- /.row -->
    </div>
  </div>



@endsection
