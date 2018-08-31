       <div class="container text-center">

            <div id="animales">
                <?php foreach ($consulta as $element):
    $pet       = new Mascota($element['id']);
    $fundacion = $pet->perteneceA();
    ?>

                                                <div class="animal white-panel">
                                                    <h3 href="#Nombre2" id="NombreMas">
                                                        <?php echo $pet->mascota['nombre'] ?>
                                                    </h3>
                                                    <hr>
                                                         <img src="data:image/jpg;base64,<?php echo base64_encode($element['foto']) ?> " width="250"/>
                                                            <div class="animal-info panel">

                            <?php if (isset($vistauser) && Control::botonesGaleria()): ?>
                                <?php if (!$pet->MePrefiere(SessionesPet::session_info()['id'])): ?>
                                          <!-- <input id="<?php //echo 'toggle-heart'.$element['id']?>" type="checkbox"/>
                                            <label aria-label="like" for="toggle-heart">
                                                ❤
                                            </label> -->
                                    <button class="btn btn-success"  href="#" data-toggle="modal" data-target=<?php echo "#MavisoSaveFavorito".$element['id'] ?> type="button">
                                        me gusta <span class="fa fa-heart mb-2 sr-icons"></span>
                                    </button>

                                <?php else: ?>

                                    <button class="btn btn-danger"  href="#" data-toggle="modal" data-target=<?php echo "#MavisoSaveFavorito".$element['id'] ?> type="button">
                                        no me gusta <span class="fa fa-heart mb-2 sr-icons"></span>
                                    </button>

                                <?php endif?>
                                    
                                        <br>
                                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target=<?php echo "#reservar_mascota" . $element['id'] ?> >
                                            Adoptar
                                        </a>
                                        <!-- Button to Open the Modal -->

                                   
                                <?php endif?>
                                    <button class="btn btn-info" data-target=<?php echo "#myModal" . $element['id'] ?> data-toggle="modal" type="button">
                                        Leer Mas
                                    </button>
                                <?php if (isset($conocerEstado)): ?>
                                    <br><br>
                                        <button class="btn btn-warning" data-target=<?php echo "#Mestado_Adopcion" . $element['id'] ?> data-toggle="modal" type="button">
                                            conocer estado
                                        </button>
                                        <br><br>
                                        <button class="btn btn-warning" data-target=<?php echo "#Mcancelar_adopcion" . $element['id'] ?> data-toggle="modal" type="button">
                                            cancelar Solicitud.
                                        </button>
                                        
                                    <?php include '..\modal\Mcancelar_adopcion.php'; ?>
                                    <?php endif ?> 
                                    
                                    <!-- The Modal -->
                                    <?php include 'leermas.php'; ?>
                                    <?php include 'ConfirmarAdopcion.php'; ?>
                                    <?php include 'MavisoSaveFavorito.php'; ?>
                                     <?php include 'Mestado_Adopcion.php'; ?>

                                </p>
                            </div>
                        </img>
                    </hr>
                </div>

    <!--              <script type="text/javascript">
    var checkbox = document.getElementById('<?php //echo 'toggle-heart'.$element['id']?>');
    checkbox.addEventListener("change", function(){
            if(checkbox.checked){
                 $.ajax({
                url: '/pet/ruta.php?variable=agregarFav&&id_mascota=<?php //echo $element['id'] ?>',
                type: 'get',
                success: function(response){
                    if(response){
                        console.log('exito');
                    }else{
                        //error de algun tipo
                    }
                },
                fail: function(response){
                  console.log('falla de conexion');
                }
            });
        }
    },false);
    </script> -->

                <?php endforeach?>

            </div>
        </div>

   