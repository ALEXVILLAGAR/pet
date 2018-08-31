

<section>
    <div class="container py-3" id="Denuncias">
        <div class="card border-none shadow rounded" style="z-index: -1;">
            <div class="row ">
                   <?php foreach ($user->mis_denuncias() as $element): ?>

                <div class="col-md-4">
                    <?php if ($element['imagen']!=null): ?>
                         <img src="data:image/jpg;base64,<?php echo base64_encode($element['imagen'])?> " width="250"/>
                    <?php else: ?>
                        <img class="w-100" src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400">
                    </img>
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

                           
                        <form action="../../ruta.php?variable=resolver_denuncia" method="get" accept-charset="utf-8">
                            <input type="hidden" name="id_denuncia" value="<?php echo $element['id'] ?>">
                            <button type="submit" class="btn btn-primary"> resuelta </button>
                        </form>
                    </div>

                </div>
                <?php endforeach ?> 
            </div>
        </div>
        <div class="espacio1">
        </div>
        <!--         <br>
             -->
    </div>
</section>