
<!-- Modal -->
<div class="modal fade" id="Mhacer_nueva_pregunta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-info">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="exampleModalLabel">Nueva pregunta frecuente</h5>
        <button type="button" class="close bg-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../../ruta.php?variable=nueva_pregunta" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput2">Pregunta:</label>
    <textarea class="form-control" rows="3" id="id_pregunta" placeholder="escribe la pregunta" name="pregunta" required autofocus="autofocus"></textarea>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">respuesta:</label>
    <textarea class="form-control" rows="3" id="id_respuesta" placeholder="escribe la respuesta" name="respuesta" required autofocus="autofocus"></textarea>
  </div>
      </div>
      <div class="modal-footer bg-secondary">
        <button type="submit" class="btn btn-secondary bg-warning text-dark" >agregar</button>
        <button type="reset" class="btn btn-primary bg-danger text-dark" data-dismiss="modal">cancelar</button>
      </div>
</form>

    </div>
  </div>
</div>
