<div class="modal" id="<?php echo "Mcancelar_adopcion".$element['id'] ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-warning">
      <div class="modal-header bg-dark">
        <h5 class="modal-title text-white">Confirmar cancelar adopcion</h5>
        <button type="button" class="close bg-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-danger">
        <h4><i class="fas fa-exclamation-triangle"></i> desea cacelar la adopcion de <?php echo $element['nombre']." "?></h4>
      </div>
      <div class="modal-footer bg-secondary">

        <button type="button" class="btn btn-default bg-success" data-dismiss="modal">salir</button>
         <form action="../../ruta.php?variable=negar_adopcion" method="post" accept-charset="utf-8">
          <input type="hidden" name="id_mascota" value="<?php echo $element['id']  ?>">
          
        <button  type="submit" class="btn btn-primary text-dark">confirmar</button>
        </form>
       <!-- <a href="../../ruta.php?variable=negar_adopcion" ><button type="button" class="btn btn-warning" confirmar</button></a> -->
      </div>
    </div>
  </div>
</div>