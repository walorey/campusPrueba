@extends('layouts.app')

@section('content')

<div class="container">

	<h1>Editar usuario</h1>

	<form method="POST" action="{{ route('users.update', $usuario) }}">
		@csrf
		@method('PUT')
	  	<div class="form-row">
	  	  <div class="form-group col-md-6">
	  	    <label for="validationCustom01">Nombre</label>
	  	    <input type="text" class="form-control" id="name" name="name" required value="{{$usuario->name}}">
	  	  </div>
	  	  <div class="form-group col-md-6">
	  	    <label for="validationCustom02">Apellido</label>
	  	    <input type="text" class="form-control" id="lastname" name="lastname" required value="{{$usuario->lastname}}">
	  	  </div>
	  	</div>
	  	<div class="form-row">
	  	  <div class="form-group col-md-6">
	  	    <label for="inputEmail4">Email</label>
	  	    <input type="email" class="form-control" id="email" name="email" required value="{{$usuario->email}}">
	  	  </div>
		  <div class="form-group col-md-6">
			<label for="validationCustom04">Tipo</label>
			<select class="form-control" name="type">

			@if($usuario->type=='admin')

				<option value="admin">Administrador</option>
			 	<option value="member">Cliente</option>

			@else

			 	<option value="member">Cliente</option>
			 	<option value="admin">Administrador</option>

			 @endif


			</select>
		   </div>
	  	</div>
	  	<button type="submit" class="btn btn-primary">Guardar</button>
	</form>

</div>

@endsection