<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">

            <h3> <?php echo $headerTitle; ?></h3>
            <div class="col-xs-12 col-sm-12  col-md-6  col-lg-6 ">
                 <form class="responsive" action="" method="post">
                    <div class="form-group">
                        <label>Nom:</label>
                        <input class="form-control" type="text" name="name"  value="<?php echo $obra->__GET('name'); ?>">
                    </div>
                    <div class="form-group">
                        <label>Descripció:</label>
                        <input class="form-control" type="text" name="description" value="<?php echo $obra->__GET('description'); ?>">
                    </div>
                    <div class="form-group">
                        <label>Tipus: </label>
                        <input class="form-control" type="text" name="type" value="<?php echo $obra->__GET('type'); ?>">
                    </div>
                    <div class="form-group">
                        <label>Data inici: </label>
                        <input class="form-control" type="text" name="startDate" value="<?php echo $obra->__GET('startDate'); ?>">
                    </div>
                    <div class="form-group">
                        <label>Data finalització: </label>
                        <input class="form-control" type="text" name="endDate" value="<?php echo $obra->__GET('endDate'); ?>">
                    </div>
                    <div class="form-group">
                        <label>Director: </label>
                        <input class="form-control" type="text" name="directorId" value="<?php echo $obra->__GET('directorId'); ?>">
                    </div>

                    <button name="submit" class="btn btn-lg btn-block btn-default"><?php echo $button?></button>
                </form>
            </div>

            <div class="col-xs-12 col-sm-12  col-md-6  col-lg-6 ">
                <form action="" method="post">
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
                    <button name="submit" class="btn btn-lg btn-block btn-default"><?php echo $button;?></button>
                </form>
            </div>
        </div> 
    </div>
</div>