<div class="container py-3">
    <div class="card">
        <div class="row ">
             <?php 
            foreach($user->mis_favoritos() as $element): 
                    $pet = new Mascota($element['id_mascota']);
                ?>
            <div class="col-md-4 box">
                <img src="data:image/jpg;base64,<?php echo base64_encode($pet->mascota['foto'])?>" class="w-100"/>
                </img>
            </div>
           
                <div class="col-md-8 px-3">
                    <div class="card-block px-3">
                        <h4 class="card-title">
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
                                    Tamaño: <?php echo $pet->mascota['nombre'] ?>
                                </li>
                                <li>
                                    Fundación: <?php echo $pet->perteneceA()['nombre'] ?>
                                </li>
                            </ul>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, ratione!
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</div>