       <div class="container text-center">
            <div id="animales">                   
                <?php foreach ($consulta as $element): 
                    $pet = new Mascota($element['id']);
                    $fundacion = $pet->perteneceA();
                ?>
                <div class="animal white-panel">
                    <h3 href="#Nombre2" id="NombreMas">
                        <?php echo $pet->mascota['nombre'] ?>
                    </h3>
                    <hr>
                         <img src="data:image/jpg;base64,<?php echo base64_encode($element['foto'])?> " width="250"/>
                            <div class="animal-info panel">
                                <p>
                                </p>
                                <p>
                            <?php if (isset($vistauser) && Control::botonesGaleria()): ?>
                                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target=<?php echo "#reservar_mascota".$element['id'] ?> >
                                        Adoptar
                                    </a>
                                    <!-- Button to Open the Modal -->
                                    <br><br>
                                <?php if (!$pet->MePrefiere(SessionesPet::session_info()['id'])): ?>
                                     <button class="btn btn-danger"  href="#" data-toggle="modal" data-target=<?php echo "#MavisoSaveFavorito".$element['id'] ?> type="button">
                                        me gusta <span class="fa fa-heart mb-2 sr-icons"></span>
                                    </button>
                                <?php endif ?>
                            <?php endif?>
                                    <button class="btn btn-info" data-target=<?php echo "#myModal".$element['id'] ?> data-toggle="modal" type="button">
                                        Leer Mas
                                    </button>
                                   <?php if (isset($conocerEstado)): ?>
                                    <br><br>
                                        <button class="btn btn-warning" data-target=<?php echo "#Mestado_Adopcion".$element['id'] ?> data-toggle="modal" type="button">
                                            conocer estado
                                        </button>
                                        <br><br>
                                        <button class="btn btn-warning" data-target=<?php echo "#Mcancelar_adopcion".$element['id'] ?> data-toggle="modal" type="button">
                                            cancelar Solicitud.
                                        </button>
                                        <?php include 'leermas.php'; ?>
                                    <?php include '..\modal\Mcancelar_adopcion.php'; ?>
                                    <?php endif ?> 
                                    
                                    <!-- The Modal -->
                                    <?php include 'ConfirmarAdopcion.php'; ?>
                                    <?php include 'MavisoSaveFavorito.php'; ?>
                                     <?php include 'Mestado_Adopcion.php'; ?>
                                    
                                </p>
                            </div>
                        </img>
                    </hr>
                </div>
                     

                <?php endforeach ?>
                
            </div>
        </div>
