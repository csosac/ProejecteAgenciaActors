<?php ?>
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6 ">
                <h3> <?php echo $headerTitle; ?></h3>
                <div class="col-xs-12 col-sm-8"><img src="<?php echo $actor->__GET('photoURL'); ?>" class="img-responsive img-rounded" alt="Cinque Terre"/></div>
                <div class="col-xs-12 col-sm-4">

                    <div><h4>Nom: </h4><p><?php echo $actor->__GET('name'); ?></p></div>
                    <div><h4>Cognom: </h4><p><?php echo $actor->__GET('lastname'); ?></p></div>
                    <div><h4>DNI: </h4><p><?php echo $actor->__GET('nif'); ?></p></div>
                    <div><h4>Genere:</h4><p><?php
                            if ($actor->__GET('genre') == 'female') {
                                echo 'Dona';
                            } else {
                                echo 'Home';
                            }
                            ?></p>
                    </div>
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
                <h3>Obres en las que a treballat l'actor:</h3>
                <?php foreach ($arrayDePapers as $r): ?><tr>
                    <br/>
                    <p>Paper: <?php echo $r->__GET('paper'); ?></p>
                    <p>Obra: <?php echo $agencia->getNameObraById($r->__GET('id_obra')); ?>
                        <br/>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
