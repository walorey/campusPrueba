@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">



          <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-info">Preguntar</button>
          <a href="{{route('mis.discusiones')}}"><button type="button" class="btn btn-success">Mis preguntas</button></a>

        </div>
        <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">

            {{-- aca empiezan las preguntas
 --}}

            @foreach($usuario->discusiones as $discusion)

            <div class="card">
              <div class="card-header">
                {{$discusion->usuario->name}}
                {{$discusion->usuario->lastname}}

{{--                 @php
                 $discusion->cuerpo = substr($discusion->cuerpo, 0, 50) . '...' ;
                @endphp
 --}}
              </div>
              <div class="card-body">
                <h5 class="card-title">{{$discusion->titulo}}</h5>
                <p class="card-text">{{$discusion->cuerpo}}</p>
                <a href="{{route('discusiones.show', $discusion->id)}}" class="btn btn-primary">Ver más</a>
              </div>
            </div>

            <br>

            @endforeach


        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">

        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hacer una pregunta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('discusiones.store')}}" method="post">

            @csrf

              <div class="form-group">
                <label for="formGroupExampleInput">¿Cuál es tu duda?</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="titulo" required placeholder="¿Que alimentos...?">
              </div>

             <div class="form-group">
                <label for="exampleFormControlTextarea1">Detalles</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="cuerpo"  required placeholder="..."></textarea>
             </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Publicar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
