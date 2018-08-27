<div class="modal" id=<?php echo "Mleer_fundacion".$element['id'] ?> >
    <div class="modal-dialog">

        <div class="modal-content border-white">
            <!-- Modal Header -->
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-light">
                    Información de la fundación
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
                             <img src="data:image/jpg;base64,<?php echo base64_encode($element['foto_fundacion'])?> "/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mascota-block">
                            <h3>
                                <?php echo $element['nombre'] ?>
                            </h3>
                            <hr>
                                <div class="mascota-info panel">
                                    <ul>
                                        <li>
                                            <?php echo "correo: ".$element['email'] ?>
                                        </li>
                                        <li>
                                            <?php echo "telefono: ".$element['telefono'] ?>
                                        </li>
                                        <li>
                                            <?php echo "direccion: ".$element['direccion']?>
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
                <button class="btn btn-warning" data-dismiss="modal" type="button">
                    Cerrar
                </button>
            </div>
            </div>
    </div>
</div>