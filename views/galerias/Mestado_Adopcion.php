<div class="modal fade" id=<?php echo "Mestado_Adopcion".$element['id'] ?> >
  <div class="modal-dialog" role="document">
    <div class="modal-content border-info">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="exampleModalLabel">Proceso de adopcion</h5>
        <button type="button" class="close bg-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h1> <?php echo $element['nombre']." su estado de la adopcion es ".$element['solicitud'] ?></h1>

    </div>
    <div class="modal-footer bg-secondary">
        <button type="reset" class="btn btn-primary bg-success text-dark" data-dismiss="modal">cerrar</butto>
      </div>
  </div>
</div>
</div>