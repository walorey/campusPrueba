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

		@foreach($discusion->comments as $comentario)

		<div class="card">
		  <div class="card-header">{{$comentario->usuario->name}} {{$comentario->usuario->lastname}} {{$comentario->created_at}}</div>
		  <div class="card-body text-dark">
		    <p class="card-text">{{$comentario->cuerpo}}</p>
		  </div>
		</div>
		@endforeach

		<br>

{{-- 		aca terminan los comentarios --}}

		@if(Auth::user()->type == 'admin')

		<div class="card border-info mb-3">
		  <div class="card-header">Comentar</div>
		  <div class="card-body text-info">
		  	<form action="{{route('discusiones.comentar', $discusion->id)}}" method="post" >
		  		@csrf


		  	  <div class="form-group">
			    <textarea class="form-control" id="exampleFormControlTextarea1" name="cuerpo" rows="3"></textarea>
			  </div>

			  <button type="submit" class="btn btn-outline-primary">Enviar</button>

		  	</form>
		  </div>
		</div>
		@else
		@endif

	</div>


@endsection