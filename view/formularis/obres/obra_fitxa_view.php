<?php ?>
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <h3> <?php echo $headerTitle; ?></h3>
            <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
                <h3>Nom: </h3><p><?php echo $obra->__GET('name'); ?></p>
                <h3>Descripció: </h3><p><?php echo $obra->__GET('description'); ?></p>
                <h3>Tipus: </h3><p><?php echo $obra->__GET('type'); ?></p>
                <h3>Data inici: </h3><p><?php echo $obra->__GET('startDate'); ?></p>
                <h3>Data finalització: </h3><p><?php echo $obra->__GET('endDate'); ?></p>
                <h3>Director: </h3><p><?php echo $agencia->getNameDirectorById($obra->__GET('directorId')); ?></p>
            </div>
        </div>        
    </div>
</div>
