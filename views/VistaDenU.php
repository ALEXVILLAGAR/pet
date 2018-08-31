

<section>

    <div class="container py-3">
         <?php foreach ($user->mis_denuncias() as $element): ?>
            <br>
        <div class="card    border-none shadow rounded" >
            
            <div class="row espacio1">
                  


                <div class="col-md-4">
                    <?php if ($element['imagen']!=null): ?>
                         <img src="data:image/jpg;base64,<?php echo base64_encode($element['imagen'])?> " width="250"/>
                         <p class="text-primary">  foto de la mascota (no obligatoria).</p>
                    <?php else: ?>
                        <img class="w-100" src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400">
                    </img>
                    <p class="text-primary text-center">  foto de la mascota (no obligatoria).</p>
                    <?php endif ?>
                </div>
                <div class="col-md-8 px-3 pt-3">
                        
                    <div class="card-block px-3">

                        <h4 class="card-title font-weight-bold">
                            <?php echo $element['fecha'] ?>
                        </h4>        
                                 
                        <p class="card-text mx-3">

                             <ul class="list-group list-group-flush">
                                 <li class="list-group-item"><span class="font-weight-bold "> Descripción: </span><?php echo $element['descripcion'] ?></li>
                             <li class="list-group-item"><span class="font-weight-bold "> Dirección: </span><?php echo $element['direccion'] ?></li>

                         
                                                     
                        <p class="card-text text-justify list-group-item">
                            Duis aute irure sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                         </p>
                            
                        </ul>  

                           
                     <?php if (!($element['resuelta']=='1')) {?>
                       <form action="../../ruta.php?variable=resolver_denuncia" method="POST" accept-charset="utf-8">
                        <br>

                        
                    </div>
                    

                            <input type="hidden" name="id_denuncia" value="<?php echo $element['id'] ?>">
                            <h2 class="text-danger"><i class="fas fa-cogs"></i>esta denuncia aún no se atendido</h2>
                            <button type="submit" class="btn btn-primary text-center"> se resolvió  </button>
                        </form>
                    <?php }else{ ?> 
                        <br><br>
                        <h2 class="text-success"><i class="fas fa-check-circle"></i>esta denuncia ya fue atendida</h2>
                    <?php } ?>
                </div>
                
            </div> 
           
        </div><?php endforeach ?> 
        <div class="espacio1">
        </div>
        <!--         <br>
             -->
    </div>
</section>