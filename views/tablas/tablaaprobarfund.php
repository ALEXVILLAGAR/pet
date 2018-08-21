<div class="container tabla">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b>Solicitud de Fundaciones </b></h2>
					</div>
					<div class="">
                        <div class="search-box">
							<div class="input-group">
								<input type="text" id="search" class="form-control" placeholder="Buscar por nombre">
                                <span class="input-group-addon"><i class="fas fa-search"></i></span>
							</div>
                        </div>
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
                        <th>Opciones</th>
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
                        <td>(171) 555-2222</td>
                        <td>Certificado</td>
                        <td>

                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-ban" data-toggle="tooltip" title="Cancelar Solicitud"></i></a>
                            <a href="#aceptarEmployeeModal"  data-toggle="modal"><i class="fas fa-check-square" data-toggle="tooltip" title="Aprobar solicitud"></i></a>
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
                        <td>

                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-ban" data-toggle="tooltip" title="Cancelar Solicitud"></i></a>
                            <a href="#aceptarEmployeeModal"  data-toggle="modal"><i class="fas fa-check-square" data-toggle="tooltip" title="Aprobar solicitud"></i></a>
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
                        <td>

                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-ban" data-toggle="tooltip" title="Cancelar Solicitud"></i></a>
                            <a href="#aceptarEmployeeModal"  data-toggle="modal"><i class="fas fa-check-square" data-toggle="tooltip" title="Aprobar solicitud"></i></a>
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
                        <td>

                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-ban" data-toggle="tooltip" title="Cancelar Solicitud"></i></a>
                            <a href="#aceptarEmployeeModal"  data-toggle="modal"><i class="fas fa-check-square" data-toggle="tooltip" title="Aprobar solicitud"></i></a>
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
                        <td>

                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-ban" data-toggle="tooltip" title="Cancelar Solicitud"></i></a>
                            <a href="#aceptarEmployeeModal"  data-toggle="modal"><i class="fas fa-check-square" data-toggle="tooltip" title="Aprobar solicitud"></i></a>
                        </td>
                    </tr>
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

	<!-- Aceptar Modal HTML -->
	<div id="aceptarEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Aceptar Solicitud de Fundación</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>La fundación sera registrada dentro de la base de datos.</p>
						<p class="text-info"><small>Se enviara un email a la fundación para notificarla.</small></p>

					</div>

					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar">
						<input type="submit" class="btn btn-primary" value="Aceptar">
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
						<h4 class="modal-title">Cancelar Solicitud de Fundación</h4>
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
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar">
						<input type="submit" class="btn btn-danger" value="Cancelar Solicitud">
					</div>
				</form>
			</div>
		</div>
	</div>
