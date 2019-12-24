@extends('layouts.app')

@section('content')

	<div class="container">

		<h1>Subir un archivo</h1>

		<form method="POST" action="{{route('files.store')}}" enctype="multipart/form-data">

		@csrf

			<div class="form-group">
				<label>¿Que vas a subir?</label>
				<input class="form-control form-control-lg" type="text" name="name" placeholder="Nombre del archivo">
			   <label for="exampleFormControlFile1">Carga el archivo</label>
			   <input type="file" name="archivo" class="form-control-file" >
			 </div>

			 <button type="submit" class="btn btn-success">Subir</button>

		</form>

	</div>


@endsection