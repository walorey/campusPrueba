@extends('layouts.app')

@section('content')

	<div class="container">

		<h1>Editar archivo</h1>

		<form method="POST" action="{{ route('files.update', $archivo) }}" enctype="multipart/form-data">

		@csrf
		@method('PUT')
			<div class="form-group">
			   <label>¿Que vas a subir?</label>
			   <input class="form-control form-control-lg" type="text" name="name" value="{{$archivo->name}}">
			   <label>¿Que contiene el archivo?</label>
			   <input type="text" name="descripcion" value="{{$archivo->descripcion}}" class="form-control form-control-lg">
	  		   <label for="validationCustom04">Tipo</label>
	  		   <select class="form-control" name="modulo">

 					@if($archivo->modulo==1)
	 					<option value="1" selected>1</option>
	 					<option value="2">2</option>
	 					<option value="3">3</option>
	 					<option value="4">4</option>
	 					<option value="5">5</option>
	 					<option value="6">6</option>
	 					<option value="7">7</option>
	 					<option value="videos">Videos</option>
 					@elseif($archivo->modulo==2)
 						<option value="1">1</option>
	 					<option value="2" selected>2</option>
	 					<option value="3">3</option>
	 					<option value="4">4</option>
	 					<option value="5">5</option>
	 					<option value="6">6</option>
	 					<option value="7">7</option>
	 					<option value="videos">Videos</option>
	 				@elseif($archivo->modulo==3)
 						<option value="1">1</option>
	 					<option value="2">2</option>
	 					<option value="3" selected>3</option>
	 					<option value="4">4</option>
	 					<option value="5">5</option>
	 					<option value="6">6</option>
	 					<option value="7">7</option>
	 					<option value="videos">Videos</option>
	 				 @elseif($archivo->modulo==4)
 						<option value="1">1</option>
	 					<option value="2">2</option>
	 					<option value="3">3</option>
	 					<option value="4" selected>4</option>
	 					<option value="5">5</option>
	 					<option value="6">6</option>
	 					<option value="7">7</option>
	 					<option value="videos">Videos</option>
 					@elseif($archivo->modulo==5)
 						<option value="1">1</option>
	 					<option value="2">2</option>
	 					<option value="3">3</option>
	 					<option value="4">4</option>
	 					<option value="5" selected>5</option>
	 					<option value="6">6</option>
	 					<option value="7">7</option>
	 					<option value="videos">Videos</option>
 					@elseif($archivo->modulo==6)
 						<option value="1">1</option>
	 					<option value="2">2</option>
	 					<option value="3">3</option>
	 					<option value="4">4</option>
	 					<option value="5">5</option>
	 					<option value="6" selected>6</option>
	 					<option value="7">7</option>
	 					<option value="videos">Videos</option>
 					@elseif($archivo->modulo==7)
 						<option value="1">1</option>
	 					<option value="2">2</option>
	 					<option value="3">3</option>
	 					<option value="4">4</option>
	 					<option value="5">5</option>
	 					<option value="6">6</option>
	 					<option value="7" selected>7</option>
	 					<option value="videos">Videos</option>
 					@elseif($archivo->modulo=="videos")
 						<option value="1">1</option>
	 					<option value="2">2</option>
	 					<option value="3">3</option>
	 					<option value="4">4</option>
	 					<option value="5">5</option>
	 					<option value="6">6</option>
	 					<option value="7">7</option>
	 					<option value="videos" selected>Videos</option>
	 				@endif
			   </select>

			 </div>

			 <button type="submit" class="btn btn-success">Guardar</button>

		</form>

	</div>


@endsection