
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div  class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 ">
                <h3> <?php echo $headerTitle; ?></h3>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class='text-center col-xs-1'>Nom</th>
                                <th class='text-center col-xs-1'>Cartell</th>
                                <th class='text-center col-xs-3'>Descripció</th>
                                <th class='text-center col-xs-1'>Tipus</th>                     
                                <th class='text-center col-xs-1'>Data inici</th>
                                <th class='text-center col-xs-1'>Data finalització</th>
                                <th class='text-center col-xs-1'>Director</th>  
                                <th class="text-center col-xs-1">Veure</th>
                                <?php if (checkSession()) { ?>
                                    <th class="text-center col-xs-1">Modificar</th>
                                    <th class="text-center col-xs-1">Eliminar</th>
                                <?php } ?>
                            </tr>
                        </thead>    
                        <?php
                        foreach ($arrayDeObres as $r):
                            ?>
                            <tr>
                                <td class='text-center col-xs-1'><?php echo $r->__GET('name'); ?></td>
                                <td class="col-xs-1"><img src="<?php echo $r->__GET('photoUrlObra'); ?>" class="img-responsive img-rounded" alt="Cinque Terre"/></td>
                                <td class='text-center col-xs-3'><?php echo $r->__GET('description'); ?></td>
                                <td class='text-center col-xs-1'><?php echo $r->__GET('type'); ?></td>
                                <td class='text-center col-xs-1'><?php echo $r->__GET('startDate'); ?></td>
                                <td class='text-center col-xs-1'><?php echo $r->__GET('endDate'); ?></td>
                                <td class='text-center col-xs-1'><?php echo $agencia->getNameDirectorById($r->__GET('directorId')); ?></td>
                                <td class="text-center col-xs-1">
                                    <a href="?ctl=obra&act=veure&id=<?php echo $r->__GET('id_obra'); ?>"><span class="fa fa-eye text-center fa-lg" aria-hidden="true"/></a>
                                </td>
                                <?php if (checkSession()) { ?>
                                    <td class="text-center col-xs-1">
                                        <a href="?ctl=obra&act=modificar&id=<?php echo $r->__GET('id_obra'); ?>"><span class="fa fa-pencil fa-lg" aria-hidden="true"/></a>
                                    </td>
                                    <td class="text-center col-xs-1">
                                        <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?ctl=obra&act=eliminar&id=<?php echo $r->id_obra; ?>"><span class="fa fa-trash fa-lg" aria-hidden="true"/></a>
                                    </td>
                                        <?php } ?>
                            </tr>
                        <?php endforeach; ?>
                    </table> 
                </div>
                <?php if (checkSession()) { ?>
                    <button onclick="window.location.href = '?ctl=obra&act=afegir'" name="submit" class="btn btn-lg btn-block btn-default"><?php echo $button; ?></button>
                <?php } ?>    
                </form>
            </div>
        </div> 
    </div>
</div>
