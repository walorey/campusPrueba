@extends('layouts.app')

@section('content')

	<div class="container">

		<h1>Subir un archivo</h1>

		<form method="POST" action="{{route('files.store')}}" enctype="multipart/form-data">

		@csrf

			<div class="form-group">
			   <label for="exampleFormControlFile1">Carga el archivo</label>
			   <input type="file" name="archivo" class="form-control-file" >
			   <label>¿Que vas a subir?</label>
			   <input class="form-control form-control-lg" type="text" name="name" placeholder="Nombre del archivo">
			   <label>¿Que contiene el archivo?</label>
			   <input type="text" name="descripcion" placeholder="Descripcion" class="form-control form-control-lg">
	  		   <label for="validationCustom04">Tipo</label>
	  		   <select class="form-control" name="modulo">
 					<option value="1">1</option>
 					<option value="2">2</option>
 					<option value="3">3</option>
 					<option value="4">4</option>
 					<option value="5">5</option>
 					<option value="6">6</option>
 					<option value="7">7</option>
 					<option value="videos">Videos</option>
			   </select>

			 </div>

			 <button type="submit" class="btn btn-success">Subir</button>

		</form>

		<br>

		<a href="{{route('home')}}"><button type="button" class="btn btn-secondary" style="margin-right: 5px;">Volver al inicio</button></a>

	</div>


@endsection