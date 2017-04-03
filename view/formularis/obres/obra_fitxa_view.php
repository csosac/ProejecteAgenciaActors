<?php ?>
<div class="container-fluid ">
    <div class="articulo contenido">
         <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3  ">
                <h3 class="col-xs-12"> <?php echo $headerTitle; ?></h3>
                <div class="col-xs-12"><h4>Títol: </h4><p><?php echo $obra->__GET('name'); ?></p></div>
                <div class="row">
                 <div class="col-xs-12 col-sm-7"><img src="<?php echo $obra->__GET('photoUrlObra'); ?>" class="img-responsive img-rounded " alt="Cinque Terre"/></div> 
                <div class="col-xs-12 col-sm-5">
                    <h3>Tipus: </h3><p><?php echo $obra->__GET('type'); ?></p>
                    <h3>Data inici: </h3><p><?php echo $obra->__GET('startDate'); ?></p>
                    <h3>Data finalització: </h3><p><?php echo $obra->__GET('endDate'); ?></p>
                    <h3>Director: </h3><p><?php echo $agencia->getNameDirectorById($obra->__GET('directorId')); ?></p>
                </div>
            </div>
                <div class="col-xs-12"><h4>Descripció: </h4><p><?php echo $obra->__GET('description'); ?></p></div>
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
