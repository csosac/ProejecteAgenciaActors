
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8 "> 
                <h3> <?php echo $headerTitle; ?></h3>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nif</th>
                                <th>Nom</th>
                                <th>Cognoms</th>     
                                <th class='text-center'>Foto</th> 
                                <th class="text-center">Veure</th>
                                <?php if (checkSession()) { ?>
                                    <th class="text-center">Modificar</th>
                                    <th class="text-center">Eliminar</th>
                                <?php } ?>
                            </tr>
                        </thead>    
                        <?php
                        foreach ($arrayDeDirectors as $r):
                            ?>
                            <tr>
                                <td><?php echo $r->__GET('nif'); ?></td>
                                <td><?php echo $r->__GET('name'); ?></td>
                                <td><?php echo $r->__GET('lastname'); ?></td> 
                                <td><img src="<?php echo $r->__GET('photoUrlDirector'); ?>" class="imgListaCrud img-responsive img-rounded " alt="Cinque Terre"/> </td>
                                <td class="text-center">
                                    <a href="?ctl=director&act=veure&id=<?php echo $r->__GET('id_director'); ?>"><span class="fa fa-eye text-center fa-lg" aria-hidden="true"/></a>                                
                                </td>
                                <?php if (checkSession()) { ?>
                                    <td class="text-center">            
                                        <a href="?ctl=director&act=modificar&id=<?php echo $r->__GET('id_director'); ?>"><span class="fa fa-pencil fa-lg" aria-hidden="true"/></a>
                                    </td>
                                    <td class="text-center">
                                        <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?ctl=director&act=eliminar&id=<?php echo $r->id_director; ?>"><span class="fa fa-trash fa-lg" aria-hidden="true"/></a>
                                    </td>
                                <?php } ?>
                            </tr>
                        <?php endforeach; ?>
                    </table> 
                </div>
                <?php if (checkSession()) { ?>
                    <button onclick="window.location.href = '?ctl=director&act=afegir'" name="submit" class="btn btn-lg btn-block btn-default"><?php echo $button; ?></button>
                <?php } ?>    
                </form>
            </div>
        </div> 
    </div>
</div>
