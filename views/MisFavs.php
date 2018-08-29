<div class="container py-3" >
    <?php
foreach ($user->mis_favoritos() as $element):
    $pet       = new Mascota($element['id_mascota']);
    $fundacion = $pet->perteneceA();
    if ($pet->mascota['solicitud'] != null) {
        continue;
    }

    ?>
        <div class="card border-danger rounded-right" style="z-index: ">
            <div class="row ">

                <div class="col-md-4 box " id="fundaciones">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($pet->mascota['foto']) ?>" class="w-100"/>
                    </img>
                </div>

                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">
                            <h4 class="card-title" id="NombreMas">
                                <?php echo $pet->mascota['nombre'] ?>
                            </h4>
                            <div class="mascota-info panel">
                                <ul>
                                    <li>
                                        Raza: <?php echo $pet->mascota['raza'] ?>
                                    </li>
                                    <li>
                                        Edad: <?php echo $pet->mascota['edad'] ?>
                                    </li>
                                    <li>
                                        Tamaño: <?php echo $pet->mascota['tamano'] ?>
                                    </li>
                                    <li>
                                        Fundación: <?php echo $fundacion['nombre'] ?>
                                    </li>
                                    <br>
                                    <a class="btn btn-success" align="left" href="#" data-toggle="modal" data-target=<?php echo "#reservar_mascota" . $element['id'] ?> >Quiero adoptarla</a>

                                </ul>


                            </div>

                        </div>
                    </div>


            </div>

        </div><br><?php include 'galerias/ConfirmarAdopcion.php';?> <?php endforeach?>

</div>

