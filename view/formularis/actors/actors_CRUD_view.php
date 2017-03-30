<!--cos principal del formulari-->
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 ">
                <h3> <?php echo $headerTitle; ?></h3>
                <form class="responsive" name="formulari" action="<?php echo $action; ?>" method="post">
                    <div class="form-group">
                        <label>NIF:</label>
                        <input class="form-control" type="text" name="nif" required value="<?php echo $actor->__GET('nif'); ?>">
                    </div>
                    <div class="form-group">
                        <label>Nom:</label>
                        <input class="form-control" type="text" name="name" required value="<?php echo $actor->__GET('name'); ?>">
                    </div>
                    <div class="form-group">
                        <label>Cognom</label>
                        <input class="form-control" type="text" name="lastname" required value="<?php echo $actor->__GET('lastname'); ?>">
                    </div>
                    <div class="form-group" required>
                        <label>Sexe</label><br/>
                        <label class="radio-inline" ><input type="radio" name="genre" value="male" <?php if ($actor->__GET('genre')== 'male')echo 'checked'; ?>> Home<br></label>
                        <label class="radio-inline" ><input type="radio" name="genre" value="female" <?php if ($actor->__GET('genre')== 'female')echo 'checked'; ?>> Dona<br></label>
                        
                    </div>
                    <div class="form-group">
                        <label>URL de la foto</label>
                        <input class="form-control" type="text" name="photoURL" required value="<?php echo $actor->__GET('photoURL'); ?>">
                    </div>

                    <button name="submit" class="btn btn-lg btn-block btn-default"><?php echo $button?></button>
                </form>
            </div>
        </div> 
    </div>
</div>