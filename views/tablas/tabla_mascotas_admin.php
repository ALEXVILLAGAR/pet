<div class="container tabla">
        <div class="table-wrapper border border-info">
            <div class="table-title ">
                <div class="row">
                    <div class="col-sm-6 ">
						<h2><b> <?php echo $titulo?> </b></h2>
					</div>
					<div class="col-sm-3">
                        <div class="search-box ">
							<div class="input-group ">
								<input type="text" id="search" class="form-control" placeholder="Buscar por nombre">
                                <span class="input-group-addon"><i class="fas fa-search"></i></span>
							</div>
                        </div>
                    </div>
					<div class="col-sm-2">

						<a href="#deleteEmployeeModal" class="btn btn-danger border border-warning" data-toggle="modal"><i class="fas fa-minus-circle"></i> <span>Eliminar</span></a>
					</div>

                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead class="border border-white">
                    <tr>
						<th>
							<span class="custom-checkbox" >
								<label for="selectAll" ></label>
								<input type="checkbox" id="selectAll" placeholder="todas" >
							</span>
							
						</th>
                        <th>Nombre</th>
                        <th>Raza</th>
						<th>Edad</th>
                        <th>Tamaño</th>
                        <th>Fundación</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>

                	<?php foreach ($consulta as $element): 
                		$pet = new Mascota($element['id']); ?>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><img src="data:image/jpg;base64,<?php echo base64_encode($element['foto'])?> " class="avatar" alt="avatar"/>
                        	<?php echo $pet->mascota['nombre'] ?> </td>
                        <td><?php echo $pet->mascota['raza'] ?></td>
						<td><?php echo $pet->mascota['edad'] ?></td>
                        <td><?php echo $pet->mascota['edad'] ?></td>
                        <td><?php echo $pet->perteneceA()['nombre'] ?></td>
                        <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quisquam.</p></td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fas fa-edit" data-toggle="tooltip" title="Editar"></i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Eliminar"></i></a>

                        </td>
                    </tr>

<!-- Edit Modal HTML -->
	<div class="modal fade" id=<?php echo "editEmployeeModal".$element1['id']?>>
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
							<label>Raza</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Edad</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Tamaño</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input type="file" class="form-control" >
						</div>
						<div class="form-group">
							<label>Descripción</label>
							<input type="text" class="form-control" required>
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
	<div class="modal fade" id=<?php echo "deleteEmployeeModal".$element1['id']?> >
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Eliminar Mascota</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>¿Seguro que quieres eliminar este registro?</p>
						<p class="text-warning"><small>Se enviara un email a la fundación para notificarla.</small></p>
						<div class="form-group">
							<label>Comentarios</label>
							<textarea placeholder="Escriba aqui la razón por la cual se eliminara la mascota"	class="form-control" maxlength="65525" required="required"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-primary" value="Eliminar">
					</div>
				</form>
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