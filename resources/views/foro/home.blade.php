@extends('layouts.app')

@section('content')
<div class="container">
    @include('alertas')
    <div class="p-3 mb-2 bg-dark text-white rounded">
    <h1><a href="{{route('foro.index')}}" class="badge badge-success">Foro</a></h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">

          <button type="button" data-toggle="modal" data-target="#modalPreguntar" class="btn btn-info">Preguntar</button>
          <a href="{{route('mis.discusiones')}}"><button type="button" class="btn btn-success">Mis preguntas</button></a>

        </div>
        <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">

            {{-- aca empiezan las preguntas
 --}}
            @if($discusiones->count()<1)

              <h2>Aún no hay preguntas. ¡Puedes hacer una!</h2>
            @else
              @foreach($discusiones as $discusion)

              <div class="card">
                <div class="card-header">
                  {{$discusion->usuario->name}}
                  {{$discusion->usuario->lastname}}

                <form class="d-inline" method="POST" action="{{route('discusiones.destroy', $discusion->id)}}">
                      @method('DELETE')
                      @csrf
                      <button type="submit"  title="Eliminar" onclick="return confirm('¿Estas seguro que deseas eliminar la pregunta?')" class="float-right"><i class="fas fa-trash"></i></button>
                </form>

                </div>
                <div class="card-body">
                  <h5 class="card-title">{{$discusion->titulo}}</h5>
                  <p class="card-text">{{$discusion->cuerpo}}</p>
                  <a href="{{route('discusiones.show', $discusion->id)}}" class="btn btn-primary">Ver más</a>
                </div>
              </div>

              <br>

              @endforeach

            {!! $discusiones->render()!!}
            @endif
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">

        </div>
    </div>
</div>

@include('foro.hacerPregunta')

@endsection
