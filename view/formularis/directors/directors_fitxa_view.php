
<?php ?>
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-2 col-lg-6 ">
                <h3> <?php echo $headerTitle; ?></h3>
                <div class="col-xs-12 col-sm-6">
                    <img src="<?php echo $director->__GET('photoUrlDirector'); ?>" class="imgListaCrud img-responsive img-rounded " alt="Cinque Terre"/>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <h3>Nom : </h3><p><?php echo $director->__GET('name') . " " . $director->__GET('lastname'); ?></p>
                    <h3>DNI: </h3><p><?php echo $director->__GET('nif'); ?></p>
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-6 col-lg-offset-2 col-lg-6 ">
                <h3>Obres en las que a treballat el director:</h3>
                <?php foreach ($obres as $obra): ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <img src="<?php echo $obra->__GET('photoUrlObra'); ?>" class="imgListaCrud img-responsive img-rounded " alt="Cinque Terre"/>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <h4>Nom: </h4><p><?php echo $obra->__GET('name'); ?></p>
                            <h4>Data inici: </h4><p><?php echo $obra->__GET('startDate'); ?></p>
                            <h4>Data finalització: </h4><p><?php echo $obra->__GET('endDate'); ?></p>
                        </div>
                        <br/>
                    </div>
                <?php endforeach; ?>
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
