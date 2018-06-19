@extends('layouts.layout')
@section('content')
				
                <!-- /.row -->
                <div class="col-lg-12">
                <label><a href="{{ url('admin/users/create') }}" class="btn btn-success btn-lg" role="button"><i class="glyphicon glyphicon-plus"></i> Nuevo Usuario</a></label>
                 </div>
                 <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                @include('mensajes.messages')
            </div>
                
                 
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <h2>Listado de Usuarios</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="tablausers">
                                <thead >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>email</th>
                                        <th>Tipo</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ($users as $u)
                                    <tr>
                                    	<td>{{ $u->id}}</td>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->email }}</td>
                                        @if($u->type=='admin')
                                        <td>Administrador del Sistema</td>
                                        @endif
                                        @if($u->type=='gerente')
                                        <td>Usuario Gerencial</td>
                                        @endif
                                        @if($u->type=='coordinador')
                                        <td>Usuario Tactico</td>
                                        @endif

                                        @if($u->active=='1')
                                           <td><p style="color:#239B56";>Activo</p></td>
                                          @else
                                             @if($u->active=='0')
                                               <td><p style="color:red;">Inactivo</p></td>
                                             @endif   
                                        @endif

                                        <td>
                                        <a href="{{URL::action('UsuarioController@edit',$u->id)}}"><button type="button" class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-edit"></i> Editar</button></a>
                                        <a href="" data-target="#modal-delete-{{$u->id}}" data-toggle="modal"><button  class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove-circle"></i> Eliminar</button></a>


                                        <a href="{{URL::action('UsuarioController@estado',$u->id)}}"><button  class="btn btn-xs btn-success"> <i class="glyphicon  glyphicon-remove"></i>Estado</button></a>
                                        </td>
                                    </tr>
                                    @include('admin.users.modal')
                                @endforeach 
                                </tbody>
                            </table>
                        </div>   
                    </div>    
@endsection