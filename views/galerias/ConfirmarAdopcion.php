 <!-- Modal reservar mascota para adopcion-->
<div class="modal fade " id=<?php echo "reservar_mascota".$element['id'] ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content rounded  border-primary">
      <div class="modal-header bg bg-dark">
        <h4 class="modal-title text-light text-center " id="exampleModalLongTitle">Reservar mi mascota</h4>
        <button type="button" class="close bg-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title text-dark" id="exampleModalLongTitle"><center> <?php echo $element['nombre'] ?> quedara reservada, para que puedas diligenciar tramites con la fundación.</center></h5>
        <br><br>
        <table class="table table-sm">
  <thead>
    <tr>
        <th class="table-primary border border-secondary" colspan="4">Debes acudir a:</th>
    </tr>
    <tr>
    
      <td class="border-top-0 border border-secondary"><?php echo $fundacion['nombre']; ?></td>
      <td class="border-top-0 border border-secondary"><?php echo $fundacion['direccion']; ?></td>
      <td class="border-top-0 border border-secondary"><?php echo $fundacion['telefono']; ?></td>
      <td class="border-top-0 border border-secondary">3 day</td>
    
    </tr>
  </thead>

  <th class="table-primary border border-secondary" colspan="4">esta mas cerca de adoptar a:</th>
    </tr>
    <tr>
      <th class="bg-secondary border border-secondary" scope="col">Nombre mascota</th>
      <th class="bg-primary border border-secondary" scope="col">edad</th>
      <th class="bg-success border border-secondary" scope="col" colspan="2">raza</th>
    </tr>
  </thead>
    <tbody>
    <tr>
        <td class="border-top-0 border border-secondary"><?php echo $element['nombre']; ?></td>
        <td class="border-top-0 border border-secondary"><?php echo $element['edad']; ?></td>
        <td class="border-top-0 border border-secondary" colspan="2"><?php echo $element['raza']; ?></td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer bg-secondary">
        <form action="ruta.php?variable=adoptar" method="post">
          <input type="hidden" name="id_pet" value="<?php echo $element['id'] ?>">
          <button type="submit" class="btn btn-success border border-info" >Confirmar reserva</button>
        </form>
        <button type="reset" class="btn btn-primary border border-info" data-dismiss="modal">cancelar reserva</button>
      </div>
    </div>
  </div>
</div>