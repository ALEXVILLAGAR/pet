<?php $imagenes = array('img/perro1.gif', 'img/perro2.gif', 'img/perro3.gif', 'img/gato1.gif', 'img/gato2.gif', 'img/gato3.gif');
$mascota = new Mascota();
?>

        <div class="container text-center">
            <div id="animales">                   
                <?php foreach ($mascota->all_dogs() as $element): 
                    $fundacion = $mascota->perteneA($element['id_fundacion']);
                    ?>
                <div class="animal white-panel">
                    <h3 href="#Nombre2" id="NombreMas">
                        <?php echo $element['nombre'] ?>
                    </h3>
                    <hr>
                         <img src="data:image/jpg;base64,<?php echo base64_encode($element['foto'])?> " width="250"/>
                            <div class="animal-info panel">
                                <p>
                                </p>
                                <p>
                                    <a class="btn btn-primary" href="#">
                                        Adoptar
                                    </a>
                                    <!-- Button to Open the Modal -->
                                    <button class="btn btn-info" data-target="#myModal" data-toggle="modal" type="button">
                                        Leer Mas
                                    </button>
                                    <!-- The Modal -->
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">
                                                        Información Mascota
                                                    </h4>
                                                    <button class="close" data-dismiss="modal" type="button">
                                                        ×
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mascota-block">
                                                                 <img src="data:image/jpg;base64,<?php echo base64_encode($element['foto'])?> "/>
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
                                                                                <?php echo "Raza: ".$element['raza'] ?>
                                                                            </li>
                                                                            <li>
                                                                                <?php echo "Edad: ".$element['nombre'] ?>
                                                                            </li>
                                                                            <li>
                                                                                <?php echo "Tamaño: ".$element['nombre'] ?>
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
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary btn-block" type="button">
                                                        Adoptar
                                                    </button>
                                                    <button class="btn btn-danger" data-dismiss="modal" type="button">
                                                        Cerrar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </img>
                    </hr>
                </div>
                <?php endforeach ?>
            </div>
        </div>

