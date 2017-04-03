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
                        <label>Obra:</label>
                        <select class="form-control" name="obraId" id="obra">
                        </select>
                    </div>
                    <div class="form-group">
                        <label id="lblActor">Actor:</label>
                        <select class="form-control" name="actorId" id="actor">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Paper:</label>
                       <label class="radio-inline"><input type="radio" name="tipusPaper" value="primari">Primari</label>
                     <label class="radio-inline"><input type="radio" name="tipusPaper" value="secondari">Secondari</label>
                     <label class="radio-inline"><input type="radio" name="tipusPaper" value="extra">Extra</label>
                    </div>
                    <input type="hidden" id="actorid" value="<?php echo $paper->__GET('id_actor'); ?>">
                    <input type="hidden" id="obraid" value="<?php echo $paper->__GET('id_obra'); ?>">
                    <button name="submit" class="btn btn-lg btn-block btn-default"><?php echo $button ?></button>
                </form>
            </div>
        </div> 
    </div>
</div>