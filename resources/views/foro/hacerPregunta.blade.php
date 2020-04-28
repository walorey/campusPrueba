<div class="modal fade" tabindex="-1" role="dialog" id="modalPreguntar">
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
                <input type="text" class="form-control" maxlength="60" id="formGroupExampleInput" name="titulo" required placeholder="¿Que alimentos...?">
              </div>

             <div class="form-group">
                <label for="exampleFormControlTextarea1">Detalles</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="cuerpo" maxlength="1000" required placeholder="..."></textarea>
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