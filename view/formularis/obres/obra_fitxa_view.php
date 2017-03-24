<?php

?>
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6  lletraViewActor">
                
                
                <div class="col-xs-12 col-sm-8"><img src="" class="img-responsive img-rounded grande" alt="Cinque Terre"/></div>
                <div class="col-xs-12 col-sm-4">
                
                    <div><h2>Nom: <?php echo $obra->__GET('name'); ?></h2></div>
                    <div><h2>Descripció: <?php echo $obra->__GET('description'); ?></h2></div>
                    <div ><h2>Tipus: <?php echo $obra->__GET('type'); ?></h2></div>
                    <div ><h2>Data inici: <?php echo $obra->__GET('startDate'); ?></h2></div>
                    <div ><h2>Data finalització: <?php echo $obra->__GET('endDate'); ?></h2></div>
                    <div ><h2>Director: <?php echo $obra->__GET('directorId'); ?></h2></div>
                </div>
                
            </div>        </div>
    </div>
</div>
            