<div class="container tabla mr-3">
        <div class="table-wrapper " >
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6 pr-5 col-lg-5">
						<h2><b>Solicitud de Adopciones </b></h2>
					</div>				
                        <div class="search-box pl-5 col-lg-5" >
							<div class="input-group col-sm-5 col-lg-5" style="float: right;">
								<input type="text" id="search" class="form-control" placeholder="Buscar por nombre">
                                <span class="input-group-addon"><i class="fas fa-search"></i></span>
							</div>             
                    </div>
                </div>
     		</div>
            <table class="table table-striped table-hover  ">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Nombre Usuario</th>
                        <th>Cedula</th>
                        <th>Email</th>

						<th>Direccion</th>
                        <!-- <th>fecha</th> -->
                        <th>Mascota</th>
                        <th>foto</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                	<?php foreach ($fundacion->only_reservada() as $element): $usuario = Usuario::GetUsuario($element['id_usuario']); $pet=new mascota($element['id'])?>
                		
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>  <img src="data:image/jpg;base64,<?php echo base64_encode($usuario['foto_perfil'])?> " class="mx-auto img-fluid img-circle d-block" alt="Avatar"/> <?php echo $usuario['nombre'] ?> </td>
                        <td> <?php echo $usuario['documento'] ?> </td>
                        <td> <?php echo $usuario['email'] ?> </td>
                        <td> <?php echo $usuario['direccion'] ?> </td>
                        <td> <?php echo $pet->mascota['nombre'] ?> </td>
                        <td><img src="data:image/jpg;base64,<?php echo base64_encode($pet->mascota['foto'])?> " class="mx-auto img-fluid img-circle d-block" alt="Avatar"/></td>
                        <td>

                            <a href="<?php echo "#deleteEmployeeModal".$element['id']?>" class="delete" data-toggle="modal"><i class="fas fa-ban" data-toggle="tooltip" title="Cancelar Solicitud"></i></a>
                            <a href="<?php echo "#aceptarEmployeeModal".$element['id']?>"  data-toggle="modal"><i class="fas fa-check-square" data-toggle="tooltip" title="Aprobar solicitud"></i></a>
                        </td>
                    </tr>

                    <!-- Aceptar Modal HTML -->
	<div id=<?php echo "aceptarEmployeeModal".$element['id']?> class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content border border-success">
					<div class="modal-header bg-dark text-white">
						<h4 class="modal-title">Aceptar Solicitud de <?php echo $usuario['nombre'] ?></h4>
						<button type="button" class="close bg-danger" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center text-info">La mascota <?php echo $pet->mascota['nombre'] ?> sera adoptada por <?php echo $usuario['nombre'] ?>.</h5>
						<h6 class="text-warning text-center"><small>Se enviara un email a la fundación para notificarla.</small></h6>

					</div>

					<div class="modal-footer bg-secondary">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar">
						<form action="../../ruta.php?variable=darmascota" method="post">
							<input type="hidden" name="id_mascota" value="<?php echo $pet->mascota['id']?>">
							<input type="hidden" name="id_usuario" value="<?php echo $usuario['id']?>">
							<input type="submit" class="btn btn-primary" value="Aceptar">
						</form>
					</div>
			</div>
		</div>
	</div>

	<!-- Delete Modal HTML -->
	<div id="<?php echo "deleteEmployeeModal".$element['id']?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content border border-danger">
					<div class="modal-header bg-dark text-white">
						<h4 class="modal-title">Cancelar Solicitud de la mascota <?php echo $pet->mascota['nombre'] ?></h4>
						<button type="button" class="close bg-danger" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<h5 class="text-info text-center">¿Seguro que quieres cancelar la solicitud de esta fundación?</h5>
						<p class="text-warning text-center"><small>Se enviara un email a la fundación para notificarla.</small></p>
						<div class="form-group">
							<label class="text-danger">agregar un comentario:</label>
							<textarea placeholder="Agrege aqui la razón porque negar la solicitud"	class="form-control" maxlength="65525" required="required"></textarea>
						</div>
					</div>
					<div class="modal-footer bg-secondary">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar">
						<form action="../../ruta.php?variable=negar_adopcion" method="POST">
							<input type="hidden" name="id_mascota" value="<?php echo $pet->mascota['id']?>">
							<input type="submit" class="btn btn-primary" value="Aceptar">
						</form>
					</div>
			</div>
		</div>
	</div>

                	<?php endforeach ?>

                    
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Mostrando <b>5</b> De <b>25</b> entradas</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previo</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
                </ul>
            </div>
        </div>
    </div>