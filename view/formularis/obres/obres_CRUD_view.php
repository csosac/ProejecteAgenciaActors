<!--cos principal del formulari-->
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 ">
                <h3> <?php echo $headerTitle; ?></h3>
                <form class="responsive" action="<?php echo $action; ?>" method="post">
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
                        <input class="form-control js-datepicker" type="text" name="startDate" value="<?php echo $obra->__GET('startDate'); ?>">
                    </div>
                    <div class="form-group">
                        <label>Data finalització: </label>
                        <input class="form-control js-datepicker" type="text" name="endDate" value="<?php echo $obra->__GET('endDate'); ?>">
                    </div>
                    <div class="form-group">
                        <label>Director:</label>
                        <select class="form-control" name="directorId" id="director">
                        </select>
                    </div>
                    <input type="hidden" id="directorid" value="<?php echo $obra->__GET('directorId'); ?>">
                    <button name="submit" class="btn btn-lg btn-block btn-default"><?php echo $button?></button>
                </form>
            </div>
        </div> 
    </div>
</div>