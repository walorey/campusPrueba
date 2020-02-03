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
		    <label for="inputPassword2" class="sr-only">Contraseña</label>
		    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
		  </div>
		  <button type="submit" class="btn btn-primary mb-2">Cambiar</button>
		</form>

	</div>
@endsection