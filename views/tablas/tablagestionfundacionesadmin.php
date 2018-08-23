<div class="container tabla">
        <div class="table-wrapper border border-dark">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b>Fundaciones </b></h2>
					</div>
					<div class="col-sm-3">
                        <div class="search-box">
							<div class="input-group">
								<input type="text" id="search" class="form-control" placeholder="Buscar por nombre">
                                <span class="input-group-addon"><i class="fas fa-search"></i></span>
							</div>
                        </div>
                    </div>
					<div class="col-sm-3">

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
                        <th>Nombre</th>
                        <th>Email</th>
						<th>Direccion</th>
                        <th>Telefono</th>
                        <th>Certificado</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	<?php foreach (Fundacion::fundaciones() as $element1): 
                		$entidad = new Fundacion($element1['id']); ?>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                       <td><img src="data:image/jpg;base64,<?php echo base64_encode($element1['foto_fundacion'])?> " class="avatar" alt="avatar"/>
                        	<?php echo $element1['nombre'] ?> </td>
                        <td><?php echo $element1['email'] ?></td>
						<td><?php echo $element1['direccion'] ?></td>
                        <td><?php echo $element1['telefono'] ?></td>
                        <td>Certificado</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fas fa-edit" data-toggle="tooltip" title="Editar"></i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Eliminar"></i></a>

                        </td>
                    </tr>
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

	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Editar Información</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>

					<div class="modal-body">
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Dirección</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Telefono</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input type="file" class="form-control" >
						</div>
						<div class="form-group">
							<label>Certificado</label>
							<input type="file" class="form-control" >
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-primary" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Eliminar Fundación</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>¿Seguro que quieres eliminar estos registros?</p>
						<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-primary" value="Eliminar">
					</div>
				</form>
			</div>
		</div>
	</div>
