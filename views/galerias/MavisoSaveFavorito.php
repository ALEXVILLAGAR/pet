<!-- Modal -->
<div class="modal fade" id=<?php echo "MavisoSaveFavorito".$element['id'] ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-info">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="exampleModalLabel">Aviso de favoritos.</h5>
        <button type="button" class="close bg-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <h5 class="text-info">Quieres añadir a <?php echo $element['nombre'] ?> a tus favoritos ?</h5>
      </div>
      <div class="modal-footer bg-secondary">
        <form action="/pet/ruta.php?variable=agregarFav" method="post" accept-charset="utf-8">
          <input type="hidden" name="id_pet" value="<?php echo $element['id']  ?>">
          
        <button  type="submit" class="btn btn-primary bg-success text-dark">Añadir</button>
        </form>
        <button type="button" class="btn btn-primary bg-success text-dark" data-dismiss="modal">cerrar</button>
      </div>
    </div>
  </div>
</div>