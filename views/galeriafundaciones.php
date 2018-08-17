<section class="bg-faded mascotas-index py-2 text-xs-center p-0" id="portfolio">
    <div class="container">
        <div class="container text-center">
            <div id="animales">
                <?php foreach (Fundacion::fundaciones() as $element): ?>
                <div class="animal white-panel">
                    <h3 href="#Nombre2" id="NombreMas">
                        <?php echo $element['nombre'] ?>
                    </h3>
                    <hr>
                        <img src="https://static.wixstatic.com/media/af93c6_644d5bb4aab74c3790e965e7b4e46939.png/v1/fill/w_130,h_131,al_c,usm_0.66_1.00_0.01/af93c6_644d5bb4aab74c3790e965e7b4e46939.png" width="250"/>
                        <div class="animal-info panel">
                            <p>
                            </p>
                            <p>
                                <a class="btn btn-primary" href="#">
                                    Leer Más
                                </a>
                                <!-- Button to Open the Modal -->
                                <button class="btn btn-info" data-target="#newDonationM" data-toggle="modal" type="button">
                                    Donar
                                </button>
                                <!-- The Modal -->
                                <?php include 'donar.html'?>
                            </p>
                        </div>
                    </hr>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>