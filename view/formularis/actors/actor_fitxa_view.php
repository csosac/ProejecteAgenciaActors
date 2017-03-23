<?php ?>
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6  lletraViewActor">
                <h3> <?php echo $headerTitle; ?></h3>
                <div class="col-xs-12 col-sm-8"><img src="<?php echo $actor->__GET('photoURL'); ?>" class="img-responsive img-rounded grande" alt="Cinque Terre"/></div>
                <div class="col-xs-12 col-sm-4">

                    <div><h2>Nom: <?php echo $actor->__GET('name'); ?></h2></div>
                    <div><h2>Cognom: <?php echo $actor->__GET('lastname'); ?></h2></div>
                    <div ><h2>DNI: <?php echo $actor->__GET('nif'); ?></h2></div>
                    <div><h2>Genere:<?php if ($actor->__GET('genre') == 'female') { echo 'Dona';} else {echo 'Home';}?></h2>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>
