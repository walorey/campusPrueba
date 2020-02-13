@extends('layouts.app')

@section('content')

	<div class="container">
		<form>

			  <div class="form-group">
			    <label for="formGroupExampleInput">¿Cuál es tu duda?</label>
			    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
			  </div>

			 <div class="form-group">
			    <label for="exampleFormControlTextarea1">Detalles</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			 </div>
		</form>
	</div>

@endsection