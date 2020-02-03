<div class="container">
  <h1>Material de estudio</h1>

<div class="accordion" id="accordionExample">

  @for($i=2; $i<8; $i++)

    @if($i==2)

    <div class="card">
      <div class="card-header" id="heading{{$i}}">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">
            Modulo 1 y 2
          </button>
        </h2>
      </div>

      <div id="collapse{{$i}}" class="collapse " aria-labelledby="heading{{$i}}" data-parent="#accordionExample">
        <div class="card-body">
          @foreach($archivos as $archivo)
            @if($archivo->modulo==$i)
              <ul>
                <li><a href="{{Storage::url($archivo->ruta)}}" target="_blank">{{$archivo->name}}</a></li>
              </ul>
            @else
            @endif
          @endforeach
        </div>
      </div>
    </div>

    @else
    <div class="card">
      <div class="card-header" id="heading{{$i}}">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">
            Modulo #{{$i}}
          </button>
        </h2>
      </div>

      <div id="collapse{{$i}}" class="collapse " aria-labelledby="heading{{$i}}" data-parent="#accordionExample">
        <div class="card-body">
          @foreach($archivos as $archivo)
            @if($archivo->modulo==$i)
              <ul>
                <li><a href="{{Storage::url($archivo->ruta)}}" target="_blank">{{$archivo->name}}</a></li>
              </ul>
            @else
            @endif
          @endforeach
        </div>
      </div>
    </div>
    @endif
  @endfor

  @foreach($archivos as $archivo)

    @if($archivo->modulo=="videos")

    <div class="card">
      <div class="card-header" id="heading{{$i}}">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">
            Videos
          </button>
        </h2>
      </div>
    <div id="collapse{{$i}}" class="collapse " aria-labelledby="heading{{$i}}" data-parent="#accordionExample">
        <div class="card-body">
              <ul>
                <li><a href="{{Storage::url($archivo->ruta)}}" target="_blank">{{$archivo->name}}</a></li>
              </ul>
          </div>
      </div>
    </div>
    @else
    @endif
  @endforeach

</div>


{{--   <div class="row">
  @foreach($archivos as $archivo)
    <div class="col">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$archivo->name}}</h5>
          <p class="card-text">{{$archivo->descripcion}}</p>
          <a href="{{Storage::url($archivo->ruta)}}" target="_blank" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</div> --}}