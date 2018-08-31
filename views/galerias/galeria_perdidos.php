<div class="container">
    <!--   <h1 class="text-center mb-3 font-weight-bold text-light">
      Denuncias
  </h1> -->
    <!--  <div class="espacio">
   </div> -->
    <div "="">
        <h3 class="text-center text-light font-weight-bold">
            En I Want A Pet
            <br>
                te  ayudamos  a encontrar tu mascota perdida
            </br>
        </h3>
        <!-- <div class="espacio">
        </div>
        <h3 class="text-center text-light font-weight-bold">
            aqui podras subir tu anuncio con el cual  podremos ayudarte
        </h3> -->
    </div>
    <br>
        <div class="carousel slide h-50" data-ride="carousel" id="carruselcard">
            
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <?php foreach (Denuncia::denuncias() as $elemento):?>
                    <div class="row">

                        <div class="col-sm bg-dark" >
                            
                            <div class="card rounded border-0">
                               
                                <img class="card-img-top img-fluid" src="data:image/jpg;base64,<?php echo base64_encode($elemento['imagen']) ?> " width="250"/>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php echo "denuncia numero ".$elemento['id']; ?>
                                        </h4>
                                        <p class="card-text">
                                            <?php echo $elemento['descripcion']; ?>
                                        </p>
                                    </div>
                                </img>
                            </div>
                        
                        </div>
                       
                    </div>
<?php endforeach ?>
                </div>
                
            </div>

            <a class="carousel-control-prev" data-slide="prev" href="#carruselcard" role="button">
                <span aria-hidden="true" class="carousel-control-prev-icon">
                </span>
                <span class="sr-only">
                    Previous
                </span>
            </a>
            <a class="carousel-control-next" data-slide="next" href="#carruselcard" role="button">
                <span aria-hidden="true" class="carousel-control-next-icon">
                </span>
                <span class="sr-only">
                    Next
                </span>
            </a>
        </div>
    </br>
</div>