@extends('layouts.app')

@section('content')
	<div class="container">

		<h1>Configuración</h1>

		<hr>

		<h3>{{Auth::user()->name}} {{Auth::user()->lastname}}
		<h4>Cambiar contraseña</h4>

		<form class="form-inline" method="post" action="{{route('config.update', $usuario)}}">

		@csrf
		@method('PUT')

		  <div class="form-group mx-sm-3 mb-2">
		    <input type="password" class="form-control" name="passwordactual" placeholder="Contraseña actual">
		    <input type="password" class="form-control" name="passwordnuevo" placeholder="Contraseña nueva">
		    <input type="password" class="form-control" name="password2" placeholder="Repetir contraseña">
		  </div>
		  <button type="submit" class="btn btn-primary mb-2">Cambiar</button>
		</form>

	</div>
@endsection