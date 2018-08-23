<div class="modal" id=<?php echo "myModal".$element['id'] ?> >
    <div class="modal-dialog">

        <div class="modal-content border-white">
            <!-- Modal Header -->
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-light">
                    Información Mascota
                </h4>
                <button class="close bg-danger" data-dismiss="modal" type="button">
                    ×
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mascota-block">
                             <img src="data:image/jpg;base64,<?php echo base64_encode($pet->mascota['foto'])?> "/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mascota-block">
                            <h3>
                                <?php echo $pet->mascota['nombre'] ?>
                            </h3>
                            <hr>
                                <div class="mascota-info panel">
                                    <ul>
                                        <li>
                                            <?php echo "Raza: ".$pet->mascota['raza'] ?>
                                        </li>
                                        <li>
                                            <?php echo "Edad: ".$pet->mascota['edad'] ?>
                                        </li>
                                        <li>
                                            <?php echo "Tamaño: ".$pet->mascota['tamano'] ?>
                                        </li>
                                        <li>
                                            <?php echo "Fundación: ".$fundacion['nombre']?>
                                        </li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, ratione!
                                    </p>
                                </div>
                            </hr>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer bg-secondary">

                <?php if(isset($vistauser)): ?>
                    <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target=<?php echo "#reservar_mascota".$element['id'] ?> data-dismiss="modal">
                        Adoptar
                    </button>
                <?php endif ?>

                <button class="btn btn-warning" data-dismiss="modal" type="button">
                    Cerrar
                </button>
            </div>
            </div>
    </div>
</div>