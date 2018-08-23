       <div class="container text-center">
            <div id="animales">                   
                <?php foreach ($user->mis_reservadas() as $element): 
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
                                    <button class="btn btn-info" data-target=<?php echo "#myModal".$element['id'] ?> data-toggle="modal" type="button">
                                        Leer Mas
                                    </button>
                                    <br> <br>
                                    <button class="btn btn-warning" data-target=<?php echo "#Mestado_Adopcion".$element['id'] ?> data-toggle="modal" type="button">
                                        conocer estado
                                    </button>
                                    
                                    <!-- The Modal -->
                                    <?php include 'leermas.php'; ?>
                                     <?php include 'Mestado_Adopcion.php'; ?>
                                    
                                </p>
                            </div>
                        </img>
                    </hr>
                </div>
                    
                <?php endforeach ?>
                 
            </div>
        </div>
       