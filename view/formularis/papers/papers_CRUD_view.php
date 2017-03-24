<!--cos principal del formulari-->
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 ">
                <h3> <?php echo $headerTitle; ?></h3>
                <form class="responsive" action="<?php echo $action; ?>" method="post">
                    <div class="form-group">
                        <label>Paper:</label>
                        <input class="form-control" type="text" name="paper" value="<?php echo $paper->__GET('paper'); ?>">
                    </div>
                    <div class="form-group">
                        <label>Actor:</label>
                        <select class="form-control" id="actor">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Obra:</label>
                        <select class="form-control" id="obra">
                        </select>
                    </div>



                    <button name="submit" class="btn btn-lg btn-block btn-default"><?php echo $button ?></button>
                </form>
            </div>
        </div> 
    </div>
</div>