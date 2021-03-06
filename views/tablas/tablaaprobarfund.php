<div class="container tabla">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b>Solicitud de Fundaciones </b></h2>
					</div>
					<div class="col-sm-3">
                        <div class="search-box">
							<div class="input-group">
								<input type="text" id="search" class="form-control" placeholder="Buscar por nombre">
                                <span class="input-group-addon"><i class="fas fa-search"></i></span>
							</div>
                        </div>
                    </div>


                </div>
            </div>
            <table class="table table-striped table-hover" id="tabla">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Nombre</th>
                        <th>Email</th>
						<th>Direccion</th>
                        <th>Telefono</th>
                        <th>Certificado</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                	<!-- consultar las fundaciones q piden registro -->
                	<?php foreach (Fundacion::FundacionInactiva() as $element): ?>
                		
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><?php echo $element['nombre'] ?> </td>
                        <td><?php echo $element['email'] ?> </td>
						<td><?php echo $element['direccion'] ?></td>
                        <td><?php echo $element['telefono'] ?></td>
                        <td>Certificado</td>
                        <td>
                            <a href=<?php echo "#deleteEmployeeModal".$element['id'] ?> class="delete" data-toggle="modal"><i class="fas fa-ban" data-toggle="tooltip" title="Cancelar Solicitud"></i></a>
                            <a href=<?php echo "#aceptarEmployeeModal".$element['id'] ?>  data-toggle="modal"><i class="fas fa-check-square" data-toggle="tooltip" title="Aprobar solicitud"></i></a>
                        </td>
                    </tr>

                    <!-- Aceptar Modal HTML -->
	<div id=<?php echo "aceptarEmployeeModal".$element['id'] ?> class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				
					<div class="modal-header">
						<h4 class="modal-title">Aceptar Solicitud de Fundación <?php echo $element['nombre'] ?> </h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>La fundación sera registrada dentro de la base de datos.</p>
						<p class="text-info"><small>Se enviara un email a la fundación para notificarla.</small></p>

					</div>

					<div class="modal-footer">
					<form action="../../ruta.php?variable=aceptarFundacion" method="post">
						<input type="hidden" name="id_fundacion" value="<?php echo $element['id'] ?>">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar">
						<input type="submit" class="btn btn-primary" value="Aceptar">
					</form>	
					</div>
			</div>
		</div>
	</div>

	<!-- Delete Modal HTML -->
	<div id=<?php echo "deleteEmployeeModal".$element['id'] ?> class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				
					<div class="modal-header">
						<h4 class="modal-title">Cancelar Solicitud de Fundación <?php echo $element['nombre'] ?> </h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>¿Seguro que quieres cancelar la solicitud de esta fundación?</p>
						<p class="text-warning"><small>Se enviara un email a la fundación para notificarla.</small></p>
						<div class="form-group">
							<label>Comentarios</label>
							<textarea placeholder="Agrege aqui la razón para negar la solicitud"	class="form-control" maxlength="65525" required="required"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<form action="../../ruta.php?variable=negarFundacion" method="post">
						<input type="hidden" name="id_fundacion" value="<?php echo $element['id'] ?>">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar">
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
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>