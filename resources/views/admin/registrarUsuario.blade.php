@extends('layouts.app')

@section('content')

<div class="container">

	<h1>Registrar usuario</h1>

	<form method="POST" action="{{ route('users.store') }}">
		@csrf

	  	<div class="form-row">
	  	  <div class="form-group col-md-6">
	  	    <label for="validationCustom01">Nombre</label>
	  	    <input type="text" class="form-control" id="name" name="name" required>
	  	  </div>
	  	  <div class="form-group col-md-6">
	  	    <label for="validationCustom02">Apellido</label>
	  	    <input type="text" class="form-control" id="lastname" name="lastname" required>
	  	  </div>
	  	</div>
	  	<div class="form-row">
	  	  <div class="form-group col-md-6">
	  	    <label for="inputEmail4">Email</label>
	  	    <input type="email" class="form-control" id="email" name="email" required>
	  	  </div>
	  	  <div class="form-group col-md-6">
	  	    <label for="inputPassword4">Contraseña</label>
	  	    <input type="password" class="form-control" id="password" name="password" required>
	  	  </div>
	  	</div>
	  	<div class="form-row">
	  		<div class="form-group col-md-6">
	  			<label for="validationCustom04">Tipo</label>
	  			<select class="form-control" name="type">
 					<option value="member">Cliente</option>
 					<option value="admin">Administrador</option>
				</select>
	  		</div>
	  	</div>
	  	<button type="submit" class="btn btn-primary">Guardar</button>
	</form>

	<br>

	<a href="{{route('home')}}"><button type="button" class="btn btn-secondary" style="margin-right: 5px;">Volver al inicio</button></a>

</div>

@endsection