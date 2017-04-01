
<?php ?>
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <h3> <?php echo $headerTitle; ?></h3>
            <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-2 col-lg-6 ">
                <h3>Nom : </h3><p><?php echo $director->__GET('name')." ".$director->__GET('lastname'); ?></p>
                <h3>DNI: </h3><p><?php echo $director->__GET('nif'); ?></p>
            </div>        
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-6 col-lg-offset-2 col-lg-6 ">
                <h3>Obres en las que a treballat el director:</h3>
                <?php foreach ($obres as $obra): ?><tr>
                    <br/>
                    <h4>Nom: </h4><p><?php echo $obra->__GET('name'); ?></p>
                    <h4>Data inici: </h4><p><?php echo $obra->__GET('startDate'); ?></p>
                    <h4>Data finalització: </h4><p><?php echo $obra->__GET('endDate'); ?></p>
                    <br/>
                <?php endforeach; ?>
            </div>
        </div>        
    </div>
</div>
</div>
