 <div class="row text-center">
            <div class="col-lg-12">

                <h2 class="section-heading text-white">
                    Fundaciones aliadas
                </h2>
                <hr class="my-4">
                </hr>
                <div class="carousel slide" data-ride="carousel" id="demo">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#demo">
                        </li>
                        <li data-slide-to="1" data-target="#demo">
                        </li>
                        <li data-slide-to="2" data-target="#demo">
                        </li>
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <center>
                            <?php foreach (Fundacion::FundacionSlide() as $key => $element): ?>
                                <?php if ($key>2) continue; ?>
                                <?php if ($key+1==1): ?>
                                    <div class="carousel-item active">
                                <?php else: ?>
                                    <div class="carousel-item">
                                <?php endif ?>
            <img src="data:image/jpg;base64,<?php echo base64_encode($element['foto_fundacion'])?>" alt="Los Angeles"/>
                                        <div class="carousel-caption">
                                            <h3>
                                                <?php echo $element['nombre'] ?>
                                            </h3>
                                            <p>
                                                <strong><?php echo "direccion: ".$element['direccion']."<br> Email: ".$element['email'] ?></strong>
                                            </p>
                                        </div>
                                    </img>
                                </div>
                            <?php endforeach ?>

                        </center>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" data-slide="prev" href="#demo">
                        <span class="carousel-control-prev-icon">
                        </span>
                    </a>
                    <a class="carousel-control-next" data-slide="next" href="#demo">
                        <span class="carousel-control-next-icon">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>