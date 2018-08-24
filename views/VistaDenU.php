

<section>
    <div class="container py-3">
        <div class="card" style="z-index: -1;">
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
                <div class="col-md-8 px-3">
                        
                    <div class="card-block px-3">
                        <h4 class="card-title">
                            <?php echo $element['fecha'] ?>
                        </h4>
                        <p class="card-text">
                            <?php echo "Descripcion: ".$element['descripcion']." direccion: <br>".$element['direccion'] ?>
                        </p>
                        <p class="card-text">
                            Duis aute irure sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
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