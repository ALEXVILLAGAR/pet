

<section>
    <div class="container py-3">
        <div class="card" style="z-index: -1;">
            <div class="row ">
                <div class="col-md-4">
                    <img class="w-100" src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400">
                    </img>
                </div>
                <div class="col-md-8 px-3">
                   <?php foreach ($user->mis_denuncias() as $element): ?>
                        
                    <div class="card-block px-3">
                        <h4 class="card-title">
                            Lorem ipsum dolor sit amet
                        </h4>
                        <p class="card-text">
                            <?php echo "Descripcion: ".$element['descripcion']." direccion: <br>".$element['direccion'] ?>
                        </p>
                        <p class="card-text">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a class="btn btn-primary" href="#">
                            Resuelta
                        </a>
                    </div>

                    <?php endforeach ?> 

                </div>
            </div>
        </div>
        <div class="espacio1">
        </div>
        <!--         <br>
             -->
    </div>
</section>