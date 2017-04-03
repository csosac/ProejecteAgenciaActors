
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
                <h3> <?php echo $headerTitle; ?></h3>
                <div class="col-xs-12"><h3>Nom paper: <?php echo $paper->__GET('paper'); ?></h3></div>
                <div class="col-xs-12 col-sm-6"><img src="<?php echo $actor->__GET('photoURL'); ?>" class="img-responsive img-rounded" alt="Cinque Terre"/></div>
                <div class="col-xs-12 col-sm-6">
                    <div><h5>Obra: <?php echo $obra->__GET('name'); ?></h5></div>
                    <div><h5>Nom actor: <?php echo $actor->__GET('name'); ?></h5></div>
                    <div><h5>Cognom actor: <?php echo $actor->__GET('lastname'); ?></h5></div>
                    <div><h5>Tipus Paper: <?php echo $paper->__GET('tipusPaper'); ?></h5></div>
                </div> 

            </div> 
            <div class="row"> 
                <div class="col-xs-offset-5 col-xs-2 col-sm-offset-5 col-sm-2 col-md-offset-5 col-md-2 col-lg-offset-5 col-lg-2"> 
                    <br/> 
                    <div class="btn-llamada"> 
                        <button class="btn" onclick="location.href = 'javascript:history.back(1)';"><span class='glyphicon glyphicon-arrow-left'/> Tornar</button>        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>