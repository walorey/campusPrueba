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
		      	<a href="#" title="Eliminar">
		      		<button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
		      	</a>
		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
		{!! $usuarios->render()!!}
	</div>

@endsection