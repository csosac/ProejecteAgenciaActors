<div class="container-fluid ">
    <div class="articulo contenido">
        <div class="row"> 
            <h1> Els nostres actors </h1>
            <div id="carrusel">
                <input id="actorscount" type="hidden" value="<?php echo count($arrayDeActors); ?>"/>
                <a href="#" class="izquierda_flecha"><span class="glyphicon glyphicon-chevron-left" ></span></a>
                <a href="#" class="derecha_flecha"><span class=" glyphicon glyphicon-chevron-right"></span></a>
                <div class="carrusel">
                    <?php
                    $count = 0;
                    foreach ($arrayDeActors as $actor):
                        ?>
                        <div  class="actor col-xs-12 col-sm-4 col-md-4 col-lg-4" id="actor_<?php echo $count ?>">
                            <br/>
                            <img src="<?php echo $actor->__GET('photoURL'); ?>" class="img-responsive img-rounded imatgeInici" alt="Cinque Terre"/>
                            <div><h5>Nom: <?php echo $actor->__GET('name') . " " . $actor->__GET('lastname'); ?></h2></div>
                        </div>

                        <?php
                        $count++;
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
        <div class="row"> 
            <div class="subrows">
                <div  class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <img class="img-responsive img-circle imgIndiceSubRow" src="view/images/quiensomos.jpg" alt="imagen llamada">
                    <h4>¿Qui som?</h4>
                    <p>Som una agència d'actors que treballem per a moltes companyies</p>
                    <p>T'ajudem a trobar anuncis, pel·lícules, obres..</p>
                    <p>Si encara no estàs en una agència, que esperes??</p>
                    <p>Empresa líder en models i actors</p>		
                </div>
                <div  class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <img class="img-responsive img-circle imgIndiceSubRow" src="view/images/casting.jpg" alt="imagen casting">
                    <h4>Dades de contacte</h4>
                    <p>Agència d'actors</p>
                    <p>Camp de les Moreres, 14 Granollers (08401) Catalunya</p>
                    <p><span class="fa fa-envelope-o fa-1x"></span> info@agenciaActors.cat</p>
                    <p><span class="fa fa-phone"></span>Telèfon: 93860002</p>
                </div>
                <div  class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <img class="img-responsive img-circle imgIndiceSubRow" src="view/images/llamada.jpg" alt="imagen llamada">
                    <h4>¿Vols que t'ajudem?</h4>
                    <p>T'Assessorem sempre que ho necessitis</p>
                    <p>Consultan's!</p>
                    <div class="btn-llamada">
                        <button class="btn">Truca</button>
                    </div>					
                </div>
            </div>
        </div>
    </div>
</div>