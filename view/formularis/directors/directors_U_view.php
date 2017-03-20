<!--cos principal del formulari-->
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-sm-offset-4 ">
                <h3> <?php echo $headerTitle; ?></h3>
                <form action="?ctl=director&act=modificar&id=<?php echo $director->__GET('id_director'); ?>" method="post">
                    <div class="form-group">
                        <label>NIF:</label>
                        <input class="form-control" type="text" name="nif" value="<?php echo $director->__GET('nif'); ?>" >
                    </div>
                    <div class="form-group">
                        <label>Nom:</label>
                        <input class="form-control" type="text" name="name" value="<?php echo $director->__GET('name'); ?>" >
                    </div>
                    <div class="form-group">
                        <label>Cognom</label>
                        <input class="form-control" type="text" name="lastname" value="<?php echo $director->__GET('lastname'); ?>" >
                    </div>                   
                    <button name="submit" class="btn btn-lg btn-block btn-default">Guardar</button>
                </form>
            </div>
        </div> 
    </div>
</div>