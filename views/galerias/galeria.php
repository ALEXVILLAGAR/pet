<?php 
$mascota = new Mascota();
?>

        <div class="container text-center">
            <div id="animales">                   
                <?php foreach ($mascota->all_pet() as $element): 
                    $fundacion = $mascota->perteneA($element['id_fundacion']);
                    $id=$element['id'];

                    ?>
                <div class="animal white-panel">
                    <h3 href="#Nombre2" id="NombreMas">
                        <?php echo $element['nombre'] ?>
                        <?php echo $id ?>
                    </h3>
                    <hr>
                         <img src="data:image/jpg;base64,<?php echo base64_encode($element['foto'])?> " width="250"/>
                            <div class="animal-info panel">
                                <p>
                                </p>
                                <p>
                                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#reservar_mascota" >
                                        Adoptar
                                    </a>
                                    
                                    <!-- Button to Open the Modal -->
                                    <button class="btn btn-info" data-target=<?php echo "#myModal".$element['id'] ?> data-toggle="modal" type="button">
                                        Leer Mas
                                    </button>
                                    <br><br>
                                     <button class="btn btn-danger"  href="#" data-toggle="modal" data-target="#MavisoSaveFavorito" type="button">
                                        me gusta<span class="fa fa-heart mb-2 sr-icons"></span>
                                    </button>
                                    
                                    <!-- The Modal -->

                                    <div class="modal" id=<?php echo "myModal".$element['id'] ?> >
                                        <div class="modal-dialog border-info">

                                            <div class="modal-content">
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
                                                                                <?php echo "Edad: ".$element['edad'] ?>
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
                                                <div class="modal-footer bg-seconda">
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
<?php include '..\..\modal\ComfirmarAdopcion.php' ?>
<?php include '..\..\modal\MavisoSaveFavorito.php' ?>

       


