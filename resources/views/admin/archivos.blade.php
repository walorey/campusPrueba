@extends('layouts.app')

@section('content')

<div class="container">

	<h1>Archivos</h1>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Enlace</th>
	      <th scope="col">Fecha</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($archivos as $archivo)
	    <tr>
	      <th scope="row">{{$archivo->id}}</th>
	      <td>{{$archivo->name}}</td>
	      <td>
	      	<a href="/storage/{{$archivo->ruta}}" target="_blank">Enlace</a>
	      </td>
	      <td>{{$archivo->created_at}}</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>

@endsection('content')