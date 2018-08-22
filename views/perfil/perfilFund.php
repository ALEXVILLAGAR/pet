<div class="container ">
    <div class="row my-2 bg-faded">
        <div class="col-lg-4 order-lg-1 text-center">
        <?php if (isset($fundacion->fundacion['foto_fundacion'])): ?>
            <img src="data:image/jpg;base64,<?php echo base64_encode($fundacion->fundacion['foto_fundacion'])?> " class="mx-auto img-fluid img-circle d-block" alt="Avatar"/>
        <?php else: ?>
            <img alt="avatar" class="mx-auto img-fluid img-circle d-block" src="//placehold.it/150">
        <?php endif ?>
                <h6 class="mt-2">
                    Cambiar Foto
                </h6>
                <label class="custom-file">
                    <form action="../../ruta.php?variable=FotoFundacion" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <input class="custom-file-input" id="file" type="file" name="imagen">
                            <span class="custom-file-control btn btn-dark">
                                Cargar Foto
                            </span>
                        </input>

                        <input type="submit" class="btn btn-danger" value="Subir Foto">
                    </form>
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
                <li class="nav-item">
                    <a class="nav-link" data-target="#pass" data-toggle="tab" href="">
                        Cambiar Contraseña
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
                    <form action="../../ruta.php?variable=actualizarFun" role="form" method="post" enctype="multipart/form-data">
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
                            <label class="col-lg-3 col-form-label form-control-label">Certificado</label>
                            <div class="col-lg-9">
                                <input type="file" class="form-control" name="certificado">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">
                            </label>
                            <div class="col-lg-9">
                                <input class="btn btn-primary" type="reset" value="Cancelar">
                                    <input class="btn btn-info" type="submit" value="Guardar Cambios">
                                    </input>
                                </input>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="pass">
                    <form action="../../ruta.php?variable=actualizarFun" role="form" method="post" enctype="multipart/form-data">
                        
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
                            <label class="col-lg-3 col-form-label form-control-label">
                            </label>
                            <div class="col-lg-9">
                                <input class="btn btn-primary" type="reset" value="Cancelar">
                                    <input class="btn btn-info" type="submit" value="Guardar Cambios">
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
