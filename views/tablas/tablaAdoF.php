<div class="container tabla">
        <div class="table-wrapper">
            <div class="table-title bg-danger">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b>Adoptados </b></h2>
					</div>
					<div class="">
                        <div class="search-box">
							<div class="input-group">
								<input type="text" id="search" class="form-control" placeholder="Buscar por nombre">
                                <span class="input-group-addon"><i class="fas fa-search"></i></span>
							</div>
                        </div>
                    </div>
					<div class="col-sm-6">						
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="fas fa-minus-circle"></i> <span>Eliminar</span></a>
					</div>

                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Foto</th>
                        <th>Mascota</th>
						<th>Fecha</th>
                       <th>Adoptante</th>
                       <th>Documento</th>
                       <th>Direccion</th>
                       <th>opciones</th>
                    </tr>
                </thead>
                <tbody>
                	<?php
                    foreach (Adopcion::adoptadasDeFun($fundacion->fundacion['id']) as $element): $pet=new Mascota($element['id_mascota']); 
                        $usuario = Usuario::GetUsuario($element['id_usuario'])?>
                		
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><img src="data:image/jpg;base64,<?php echo base64_encode($pet->mascota['foto'])?> " class="avatar" alt="avatar"/></td>
                        <td> <?php echo $pet->mascota['nombre'] ?> </td>
                        <td> <?php echo $element['fecha'] ?> </td>
                      <td> <?php echo $usuario['nombre'] ?> </td>
                      <td> <?php echo $usuario['documento'] ?> </td>
                      <td> <?php echo $usuario['direccion'] ?> </td>

                        <td>

                            <a href="<?php echo "#deleteEmployeeModal".$element['id'] ?>" class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                    </tr>

	<!-- Delete Modal HTML -->
	<div id="<?php echo "deleteEmployeeModal".$element['id'] ?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Eliminar registro de Adopcion</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>Esta seguro de borrar estos registros?</p>
						<p class="text-warning"><small>Esta Acción no se puede deshacer.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Eliminar">
					</div>
				</form>
			</div>
		</div>
	</div>
    </div>

                	<?php endforeach ?>

                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Mostrando <b>5</b> De <b>25</b> Uusarios</div>
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