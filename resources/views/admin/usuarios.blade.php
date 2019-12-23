@extends('layouts.app')

@section('content')

	<div class="container">

		<h1>Usuarios</h1>

		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Apellido</th>
		      <th scope="col">Email</th>
		      <th scope="col">Tipo</th>
		      <th scope="col">Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach($usuarios as $usuario)
		    <tr>
		      <th scope="row">{{$usuario->id}}</th>
		      <td>{{$usuario->name}}</td>
		      <td>{{$usuario->lastname}}</td>
		      <td>{{$usuario->email}}</td>
		      <td>
		      	@if($usuario->type =='admin')

		      		Administrador

		      	@else
		      	Cliente
		      	@endif
		      </td>
		      <td>
		      	<a href="{{route('users.edit', $usuario->id)}}" title="Editar">
		      		<button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
		      	</a>
		      	<form class="d-inline" method="POST" action="{{route('users.destroy', $usuario->id)}}">
		      		@method('DELETE')
		      		@csrf
		      		<button type="submit"  title="Eliminar" onclick="return confirm('Estas seguro que deseas eliminarlo?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
		      	</form>
		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
		{!! $usuarios->render()!!}
	</div>

@endsection

