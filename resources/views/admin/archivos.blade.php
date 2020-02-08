@extends('layouts.app')

@section('content')

<div class="container">

	<h1>Archivos</h1>


	<div class="table-responsive">
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Descripción</th>
		      <th scope="col">Modulo</th>
		      <th scope="col">Enlace</th>
		      <th scope="col">Fecha</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($archivos as $archivo)
		    <tr>
		      <th scope="row">{{$archivo->id}}</th>
		      <td>{{$archivo->name}}</td>
		      <td>{{$archivo->descripcion}}</td>
		      <td>{{$archivo->modulo}}</td>
		      <td>
		      	<a href="{{Storage::url($archivo->ruta)}}" target="_blank">Ver</a>
		      </td>
		      <td>{{$archivo->created_at}}</td>
		      <td>
		      		<a href="{{route('files.edit', $archivo->id)}}" title="Editar">
			      		<button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
			      	</a>
			      	<form class="d-inline" method="POST" action="{{route('files.destroy', $archivo->id)}}">
			      		@method('DELETE')
			      		@csrf
			      		<button type="submit"  title="Eliminar" onclick="return confirm('Estas seguro que deseas eliminarlo?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
			      	</form>

		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
	{!! $archivos->render()!!}

	<div class="btn-group" role="group" aria-label="Basic example">
		<a href="{{route('home')}}"><button type="button" class="btn btn-secondary" style="margin-right: 5px;">Volver al inicio</button></a>
		<a href="{{route('crear.usuario')}}"><button type="button" class="btn btn-secondary">Registrar usuario</button></a>
	</div>

</div>

@endsection('content')