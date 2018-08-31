<div class="container py-3"  id="favoritos">

    <?php 
            foreach($user->mis_favoritos() as $element): 
                    $pet = new Mascota($element['id_mascota']);
                    $fundacion = $pet->perteneceA();
                ?>
    <div class="card border-none  shadow rounded" style="z-index: ">
        <div class="row ">
             
            <div class="col-md-4 box " id="fundaciones">
                <img src="data:image/jpg;base64,<?php echo base64_encode($pet->mascota['foto'])?>" class="w-100"/>
                </img>
            </div>
           
                <div class="col-md-8 px-3 py-3">
                    <div class="card-block px-3">
                        <h4 class="card-title text-uppercase font-weight-bold">
                            <?php echo $pet->mascota['nombre'] ?>
                        </h4>
                        <div class="mascota-info panel">
                            <ul class=" list-group list-group-flush  pt-1 mx-3">
                                <li class="list-group-item">
                                    <span class="font-weight-bold">Raza:</span> <?php echo $pet->mascota['raza'] ?>
                                </li>
                                <li class="list-group-item">
                                    <span class="font-weight-bold">Edad:</span> <?php echo $pet->mascota['edad'] ?>
                                </li>
                                <li class="list-group-item">
                                    <span class="font-weight-bold">Tamaño:</span> <?php echo $pet->mascota['tamano'] ?>
                                </li>
                                <li class="list-group-item">
                                   <span class="font-weight-bold">Fundación:</span> <?php echo $fundacion['nombre'] ?>
                                </li>
                                <br>


                            <?php if ($pet->mascota['solicitud']==null) : ?>
                                <a class="btn btn-success" align="left" href="#" data-toggle="modal" data-target=<?php echo "#reservar_mascota".$element['id'] ?> >Quiero adoptarla</a>
                            <?php endif ?>

                            </ul>
                            

                        </div>
                    </div>


            </div>

        </div><br><?php include 'galerias/ConfirmarAdopcion.php';?> 

    <?php endforeach ?>

</div>

