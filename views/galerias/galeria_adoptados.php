       <div class="container text-center">
            <div id="animales">                   
                <?php foreach (Mascota::all_dogs() as $element): 
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
                            <?php if (SessionesPet::session_active()): ?>
                                    
                                <?php endif?>
                                    <button class="btn btn-info" data-target=<?php echo "#myModal".$element['id'] ?> data-toggle="modal" type="button">
                                        Leer Mas
                                    </button>
                                    
                                    <!-- The Modal -->
                                    <?php include 'ConfirmarAdopcion.php'; ?>
                                    <?php include 'MavisoSaveFavorito.php'; ?>

                                    <?php include 'leermas.php'; ?>
                                </p>
                            </div>
                        </img>
                    </hr>
                </div>
                     

                <?php endforeach ?>
                
            </div>
        </div>
       <div class="container text-center">
            <div id="animales">                   
                <?php foreach (Mascota::all_dogs() as $element): 
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
                            <?php if (SessionesPet::session_active()): ?>   
                                <?php endif?>
                                    <button class="btn btn-info" data-target=<?php echo "#myModal".$element['id'] ?> data-toggle="modal" type="button">
                                        Leer Mas
                                    </button>
                                    
                                    <!-- The Modal -->
                                    <?php include 'leermas.php'; ?>
                                   
                                </p>
                            </div>
                        </img>
                    </hr>
                </div>
                     

                <?php endforeach ?>
                
            </div>
        </div>
