<div class="container ">
    <div class="row my-2 bg-faded">
        <div class="col-lg-4 order-lg-1 text-center">
            <img alt="avatar" class="mx-auto img-fluid img-circle d-block" src="//placehold.it/150">
                <h6 class="mt-2">
                    Cambiar Foto
                </h6>
                <label class="custom-file">
                    <input class="custom-file-input" id="file" type="file">
                        <span class="custom-file-control btn btn-dark">
                            Subir Foto
                        </span>
                    </input>
                </label>
            </img>
        </div>
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-target="#profile" data-toggle="tab" href="">
                        Perfil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-target="#edit" data-toggle="tab" href="">
                        Editar
                    </a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>
                                Nombre
                            </h5>
                            <p>
                                <?php echo $fundacion->fundacion['nombre'] ?>
                            </p>
                            <h5>
                                Dirección
                            </h5>
                            <p>
                                <?php echo $fundacion->fundacion['direccion'] ?>
                                
                            </p>
                            <h5>
                                Email
                            </h5>
                            <p>
                                <?php echo $fundacion->fundacion['email'] ?>
                            </p>
                             <h5>
                                Telefono
                            </h5>
                            <p>
                                <?php echo $fundacion->fundacion['telefono'] ?>
                            </p>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="edit">
                    <form role="form">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">
                                Nombre
                            </label>
                            <div class="col-lg-9">
                                <input class="form-control" name="nombre" type="text" value="<?php echo $fundacion->fundacion['nombre'] ?>" required autofocus="autofocus">
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">
                                NIT
                            </label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="NIT">
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">
                                Email
                            </label>
                            <div class="col-lg-9">
                                <input class="form-control" name="correo" type="email" value="<?php echo $fundacion->fundacion['email'] ?>" required autofocus="autofocus">
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">
                                Telefono
                            </label>
                            <div class="col-lg-9">
                                <input class="form-control" name="telefono" type="text" value="<?php echo $fundacion->fundacion['telefono'] ?>" required autofocus="autofocus">
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">
                                Dirección
                            </label>
                            <div class="col-lg-9">
                                <input class="form-control" name="direccion" placeholder="Dirección" type="text" value="<?php echo $fundacion->fundacion['direccion'] ?>" required autofocus="autofocus">
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">
                            </label>
                            <div class="col-lg-6">
                                <input class="form-control" placeholder="Ciudad" type="text" value="">
                                </input>
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" placeholder="Departamento" type="text" value="">
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">
                                Contraseña
                            </label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333" readonly>
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">
                                Confirmar contraseña
                            </label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333" readonly>
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Certificado</label>
                            <div class="col-lg-9">
                                <input type="file" class="form-control" >
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">
                            </label>
                            <div class="col-lg-9">
                                <input class="btn btn-primary" type="reset" value="Cancelar">
                                    <input class="btn btn-info" type="button" value="Guardar Cambios">
                                    </input>
                                </input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
