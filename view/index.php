<div class="container-fluid ">
    <div class="articulo contenido">
        <div class="row"> 
            <div id="carrusel">
                <a href="#" class="izquierda_flecha"><span class="glyphicon glyphicon-chevron-left" ></span></a>
                <a href="#" class="derecha_flecha"><span class=" glyphicon glyphicon-chevron-right"></span></a>
                <div class="carrusel">
                    <?php 
                    $count = 0;
                    foreach ($arrayDeActors as $actor): ?>
                        <div class="actor col-xs-12 col-sm-6 col-md-4 col-lg-4" id="actor_<?php echo $count?>">
                            <img src="<?php echo $actor->__GET('photoURL'); ?>" class="img-responsive img-rounded" alt="Cinque Terre"/>
                            <div><h5>Nom: <?php echo $actor->__GET('name'); ?></h2></div>
                            <div><h5>Cognom: <?php echo $actor->__GET('lastname'); ?></h2></div>
                            <div><h5>DNI: <?php echo $actor->__GET('nif'); ?></h2></div>
                            <div><h5>Genere:<?php
                                    if ($actor->__GET('genre') == 'female') {
                                        echo 'Dona';
                                    } else {
                                        echo 'Home';
                                    }
                                    ?></h2>
                            </div>
                        </div>
                    
                    <?php
                    $count++;
                    endforeach; ?>

                    <!--
                                    <div class="product" id="product_0">
                                        <img class="img_carrusel" src="gallery/01.jpg" width="195px" height="100px" />
                                        <p>Titulo 1</p>
                                        <p>165.00 €</p>
                                    </div>
                                    <div class="product" id="product_1">
                                        <img class="img_carrusel" src="gallery/02.jpg" width="195px" height="100px" />
                                        <p>Titulo 2</p>
                                        <p>100.00 €</p>
                                    </div>
                                    <div class="product" id="product_2">
                                        <img class="img_carrusel" src="gallery/03.jpg" width="195px" height="100px" />
                                        <p>Titulo 3</p>
                                        <p>250.00 €</p>
                                    </div>
                                    <div class="product" id="product_3">
                                        <img class="img_carrusel" src="gallery/01.jpg" width="195px" height="100px" />
                                        <p>Titulo 4</p>
                                        <p>75.00 €</p>
                                    </div>
                                    <div class="product" id="product_4">
                                        <img class="img_carrusel" src="gallery/02.jpg" width="195px" height="100px" />
                                        <p>Titulo 5</p>
                                        <p>65.00 €</p>
                                    </div>
                                    <div class="product" id="product_5">
                                        <img class="img_carrusel" src="gallery/03.jpg" width="195px" height="100px" />
                                        <p>Titulo 6</p>
                                        <p>40.00 €</p>
                                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>