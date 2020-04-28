
     <div class="card-header">Panel administrativo</div>

      <div class="card-body">

         @if (session('status'))
             <div class="alert alert-success" role="alert">
                 {{ session('status') }}
             </div>
         @endif

         <a href="{{route('crear.usuario')}}">
            <button type="button" class="btn btn-primary btn-lg">Crear usuario <i class="fas fa-user-plus"></i></button>
        </a>
        <a href="{{route('usuarios.index')}}">
            <button type="button" class="btn btn-secondary btn-lg">Ver usuarios <i class="far fa-address-card"></i></button>
        </a>
{{--         <a href="{{route('subir.archivo')}}">
            <button type="button" class="btn btn-success btn-lg">Subir archivos <i class="far fa-arrow-alt-circle-up"></i></button>
        </a> --}}
         <a href="{{route('archivos.index')}}">
            <button type="button" class="btn btn-secondary btn-lg">Ver archivos <i class="far fa-file-alt"></i></button>
         </a>
         <a href="{{route('foro.index')}}">
            <button type="button" class="btn btn-success btn-lg">Foro <i class="far fa-question-circle"></i></button>
         </a>
     </div>


