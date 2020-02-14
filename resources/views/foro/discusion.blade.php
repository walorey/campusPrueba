@extends('layouts.app')

@section('content')

	<div class="container">

		<h2>Pregunta #{{$discusion->id}}</h2>


		<div class="card border-dark mb-3">
		  <div class="card-header">
		    {{$discusion->usuario->name}} {{$discusion->usuario->lastname}}
		  </div>
		  <div class="card-body">
		    <blockquote class="blockquote mb-0">
		      <p>{{$discusion->titulo}}</p>
		      <footer class="blockquote-footer">{{$discusion->cuerpo}}</footer>
		    </blockquote>
		  </div>
		</div>

		<br>

		<h4>Comentarios</h4>


		<div class="card">
		  <div class="card-header">Header</div>
		  <div class="card-body text-dark">
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		</div>

		<br>

{{-- 		aca terminan los comentarios --}}

		<div class="card border-info mb-3">
		  <div class="card-header">Comentar</div>
		  <div class="card-body text-info">
		  	<form action="{{route('comentarios.comentar', $discusion->id)}}" method="post" >
		  		@csrf


		  	  <div class="form-group">
			    <textarea class="form-control" id="exampleFormControlTextarea1" name="cuerpo" rows="3"></textarea>
			  </div>

			  <button type="submit" class="btn btn-outline-primary">Enviar</button>

		  	</form>

		  </div>


		</div>

	</div>


@endsection