
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6  lletraViewActor">
                <h3> <?php echo $headerTitle; ?></h3>
                <div class="col-xs-12"><h3>Nom paper: <?php echo $paper->__GET('paper'); ?></h3></div>
                <div class="col-xs-12 col-sm-6"><img src="<?php echo $actor->__GET('photoURL'); ?>" class="img-responsive img-rounded" alt="Cinque Terre"/></div>
                <div class="col-xs-12 col-sm-6">
                    <div><h5>Obra: <?php echo $obra->__GET('name'); ?></h5></div>
                    <div ><h5>Nom actor: <?php echo $actor->__GET('name'); ?></h5></div>
                    <div><h5>Cognom actor: <?php echo $actor->__GET('lastname'); ?></h5></div>
                   
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>
