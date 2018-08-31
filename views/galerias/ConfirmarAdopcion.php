 <!-- Modal reservar mascota para adopcion-->
<div class="modal fade " id=<?php echo "reservar_mascota".$element['id'] ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content rounded  border-primary">
      <div class="modal-header bg bg-dark">
        <h4 class="modal-title text-light text-center " id="exampleModalLongTitle">Reservar mi mascota</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title text-dark" id="exampleModalLongTitle"><center> <span  class="text-capitalize"> <?php echo $pet->mascota['nombre'] ?></span> quedara reservada, para que puedas diligenciar tramites con la fundación.</center></h5>
        <br><br>
        <table class="table table-sm">
  <thead>
    <tr>
        <th class="table-primary border border-secondary text-center" colspan="4">Debes acudir a:</th>
    </tr>
    <tr>
    
      <td class="border-top-0 border border-secondary"><span class="font-weight-bold text-capitalize"><?php echo $fundacion['nombre']; ?></span></td>
      <td class="border-top-0 border border-secondary"><?php echo $fundacion['direccion']; ?></td>
      <td class="border-top-0 border border-secondary"><?php echo $fundacion['telefono']; ?></td>
      <td class="border-top-0 border border-secondary">3 day</td>
    
    </tr>
  </thead>

  <th class="table-primary border border-secondary text-center" colspan="4">Esta Más cerca de adoptar a:</th>
    </tr>
    <tr>
      <th class="bg-primary border-none " scope="col">Nombre mascota</th>
      <th class="bg-primary border-none" scope="col">edad</th>
      <th class="bg-primary border-none" scope="col" colspan="2">raza</th>
    </tr>
  </thead>
    <tbody>
    <tr>
        <td class="border-top-0 border border-secondary"> <span class="font-weight-bold text-capitalize"> <?php echo $pet->mascota['nombre']; ?></span></td>
        <td class="border-top-0 border border-secondary"><?php echo $pet->mascota['edad']; ?></td>
        <td class="border-top-0 border border-secondary" colspan="2"><?php echo $pet->mascota['raza']; ?></td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer bg-secondary">

        <form action="http://localhost:8080/pet/ruta.php?variable=adoptar" method="post">
          <input type="hidden" name="id_pet" value="<?php echo $element['id'] ?>">
          <input type="hidden" name="id_usuario" value="<?php $user = new Usuario(); echo $user->usuario['id'] ?>">
          <button type="submit" class="btn btn-success btn-md border border-info " >Confirmar</button>
        </form>
        <button type="reset" class="btn btn-primary border btn-md border-info" data-dismiss="modal">cancelar</button>
      </div>
    </div>
  </div>
</div>