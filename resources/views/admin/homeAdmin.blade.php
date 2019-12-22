
     <div class="card-header">Panel administrativo</div>

      <div class="card-body">
         @if (session('status'))
             <div class="alert alert-success" role="alert">
                 {{ session('status') }}
             </div>
         @endif

         <a href="/CrearUsuario"><button type="button" class="btn btn-primary btn-lg">Crear usuario <i class="fas fa-user-plus"></i></button></a>
         <button type="button" class="btn btn-secondary btn-lg">Ver usuarios <i class="far fa-address-card"></i></button>
         <button type="button" class="btn btn-success btn-lg">Subir archivos <i class="far fa-arrow-alt-circle-up"></i></button>
         <button type="button" class="btn btn-secondary btn-lg">Ver archivos <i class="far fa-file-alt"></i></button>

     </div>


