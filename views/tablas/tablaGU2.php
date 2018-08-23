<div class="container tabla">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b>Usuarios </b></h2>
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
						<a href="#addEmployeeModal" class="btn btn-info" data-toggle="modal"><i class="fas fa-plus-circle"></i> <span>Añadir Usuario</span></a>
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
						<th>Documento</th>
                       <th>Dirección</th>
                       <th>Valoración</th>
                       <th>Estado</th>
                       <th>tipo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><img src="img/user.jpg" class="avatar" alt="Avatar">Thomas Hardy</td>
                        <td>thomashardy@mail.com</td>
						<td>89 Chiaroscuro Rd, Portland, USA</td>
                      <<td>(171) 555-2222</td> 
                       <td>Certificado</td> 
                       <td>Certificado</td> 
                       <td>Certificado</td> 
                        <td>
                          <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i></a> 
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                    </tr>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
						</td>
                        <td><img src="img/user.jpg" class="avatar" alt="Avatar">Dominique Perrier</td>
                        <td>dominiqueperrier@mail.com</td>
						<td>Obere Str. 57, Berlin, Germany</td>
                        <td>(313) 555-5735</td>
                        <td>Certificado</td>
                        <td>Certificado</td>
                        <td>Certificado</td>
                        <td>
                           <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fas fa-edit" data-toggle="tooltip" title="Edit"> </i></a> 
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                    </tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox3" name="options[]" value="1">
								<label for="checkbox3"></label>
							</span>
						</td>
                        <td><img src="img/user.jpg" class="avatar" alt="Avatar"> Maria Anders</td>
                        <td>mariaanders@mail.com</td>
						<td>25, rue Lauriston, Paris, France</td>
                       <td>(503) 555-9931</td>
                       <td>Certificado</td>
                       <td>Certificado</td>
                       <td>Certificado</td>
                        <td>
                             <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i></a> 
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                    </tr>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox4" name="options[]" value="1">
								<label for="checkbox4"></label>
							</span>
						</td>
                        <td><img src="img/user.jpg" class="avatar" alt="Avatar">Fran Wilson</td>
                        <td>franwilson@mail.com</td>
						<td>C/ Araquil, 67, Madrid, Spain</td>
                       <td>(204) 619-5731</td>
                       <td>Certificado</td> 
                       <td>Certificado</td>
                       <td>Certificado</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fas fa-edit" data-toggle="tooltip" title="Edit"> </i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                    </tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="options[]" value="1">
								<label for="checkbox5"></label>
							</span>
						</td>
                        <td><img src="img/user.jpg" class="avatar" alt="Avatar">Martin Blank</td>
                        <td>martinblank@mail.com</td>
						<td>Via Monte Bianco 34, Turin, Italy</td>
                    <td>(480) 631-2097</td>
                   <td>Certificado</td> 
                   <td>Certificado</td>
                   <td>Certificado</td>
                        <td>
                           <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class=" fas fa-edit" data-toggle="tooltip" title="Edit"> </i></a> 
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                    </tr>
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
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Añadir Usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Documento</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Direccion</label>
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
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Añadir">
					</div>
				</form>
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
							<label>Documento</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Direccion</label>
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
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Eliminar Usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Eliminar">
					</div>
				</form>
			</div>
		</div>
	</div>
