    <div class="table-wrapper tabla">
            <div class="table-title bg-warning">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b>Mascotas </b></h2>
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
						<a href="#addEmployeeModal" class="btn btn-info" data-toggle="modal"><i class="fas fa-plus-circle"></i> <span>Añadir Mascota</span></a>
						<!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="fas fa-minus-circle"></i> <span>Eliminar</span></a> -->
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
						<th>Raza</th>
						<th>Especie</th>
						<th>Tamaño</th>
                        <th>Estado</th>
                        <th>Foto</th>
                        <th>Editar/Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                	<?php foreach ($fundacion->mis_mascotas() as $element): ?>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        
                        <td> <?php echo $element['nombre'] ?></td>
                        <td> <?php echo $element['raza'] ?></td>
                        <td> <?php echo $element['especie'] ?></td>
                        <td> <?php echo $element['tamano'] ?></td>
                        <td> <?php echo $element['estado'] ?></td>
                        <td> <img src="data:image/jpg;base64,<?php echo base64_encode($element['foto'])?> " class="avatar" alt="Avatar"/></td>
                        <td>
                            <a href=<?php echo "#editEmployeeModal".$element['id'] ?> class="edit" data-toggle="modal"><i class="fas fa-edit" data-toggle="tooltip" title="Editar"></i></a>
                            <a href=<?php echo "#deleteEmployeeModal".$element['id'] ?> class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Eliminar"></i></a>
                        </td>
                    </tr>

    <div id=<?php echo "editEmployeeModal".$element['id'] ?> class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../../ruta.php?variable=updatePet" method="POST" enctype="multipart/form-data">
					<div class="modal-header">
						<h4 class="modal-title">Editar Información</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>

					<div class="modal-body">
						<div class="form-group">
								<label>Nombre</label>
								<input type="text" class="form-control" name="nombre" value="<?php echo $element['nombre'] ?>" placeholder="nombre" required>
							</div>
						<input type="hidden" name="id" value=<?php echo $element['id'] ?>>
						<div class="form-group">
							<label> Especie </label>
							<input type="text" class="form-control" name="especie" value="<?php echo $element['especie'] ?>" readonly>
						</div>

							<div class="form-group">
								<label>Raza</label>
								<input type="text" class="form-control" name="raza" placeholder="raza" value="<?php echo $element['raza'] ?>" required> 
							</div>
							<div class="form-group">
								<label>Edad</label>
								<input type="text" class="form-control" name="edad" value="<?php echo $element['edad'] ?>" placeholder="edad" required> 
							</div>

							<div class="form-group">
								<label>Tamaño</label>
								<input type="text" class="form-control" name="tamano" value="<?php echo $element['tamano'] ?>" placeholder="Pequeño, Mediano, Grande" required autofocus="autofocus"> 
							</div>

							<div class="form-group">
								<label>Estado</label>
								<input type="text" class="form-control" name="estado" placeholder="estado ()" value="<?php echo $element['estado'] ?>" required>
							</div>

							<div class="form-group">
								<label>Foto</label>
								<input type="file"  name="imagen" class="form-control">
							</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id=<?php echo "deleteEmployeeModal".$element['id'] ?> class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../../ruta.php?variable=eliminar_pet" method="post">
					<div class="modal-header">
						<h4 class="modal-title">Eliminar Mascota</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>¿Seguro que quieres eliminar estos registros de <?php echo $element['nombre'] ?> ?</p>
						<p class="text-warning"><i class="fas fa-exclamation-triangle"></i><small>Esta acción no se puede deshacer.</small></p>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="id" value="<?php echo $element['id'] ?>">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Eliminar">
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
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item  "><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    	
	<!-- Edit Modal HTML -->
	
<!-- Add modal  -->
<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../../ruta.php?variable=agregar_pet" method="POST" enctype="multipart/form-data">
					<div class="modal-header">
						<h4 class="modal-title">Añadir Protectora</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					</div>
					<div class="modal-body">
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" class="form-control" name="nombre" placeholder="nombre" required>
							</div>

							<div class="form-group">
								<label>Especie</label>
								<select name="especie" required autofocus="autofocus" class="form-control">
									  <option value="Gato">Gato</option>
									  <option value="Perro">Perro</option>
								</select>
							</div>


							<div class="form-group">
								<label>Raza</label>

								<input type="text" class="form-control" name="raza" placeholder="raza" required> 
							</div>
							<div class="form-group">
								<label>Edad</label>

								<input type="text" class="form-control" name="edad" placeholder="edad" required> 
							</div>

							<div class="form-group">
								<label>Tamaño</label>
								<input type="text" class="form-control" name="tamano" placeholder="Pequeño, Mediano, Grande" required autofocus="autofocus"> 
							</div>

							<div class="form-group">
								<label>Estado</label>

								<input type="text" class="form-control" name="estado" placeholder="estado ()" required>
							</div>

							<div class="form-group">
								<label>Foto</label>

								<input type="file"  name="imagen" class="form-control" required>
							</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Añadir">
					</div>
				</form>
			</div>
		</div>
	</div>