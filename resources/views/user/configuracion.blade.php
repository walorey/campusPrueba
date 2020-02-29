@extends('layouts.app')

@section('content')
	<div class="container">

		<h1>Configuración</h1>

		<hr>

		<h3>{{Auth::user()->name}} {{Auth::user()->lastname}}
		<h4>Cambiar contraseña</h4>

		@if(isset($errors))
			<p> {{$errors->first('password')}} </p>
		@endif

		<form class="form-inline" method="post" action="{{route('config.update', Auth::user()->id)}}">

		@csrf
		@method('PUT')

		  <div class="form-group mx-sm-3 mb-2">
		    <input type="password" class="form-control" name="passwordactual" placeholder="Contraseña actual">
		    <input type="password" class="form-control" name="password" placeholder="Contraseña nueva">
		    <input type="password" class="form-control" name="password_confirmation" placeholder="Repetir contraseña">
		  </div>
		  <button type="submit" class="btn btn-primary mb-2">Cambiar</button>
		</form>

		<p>Si usted olvido su contraseña comuniquese con alimentaria.edu@gmail.com para blaquearla.</p>
	</div>
@endsection