
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6 ">
                <h3> <?php echo $headerTitle; ?></h3>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nif</th>
                                <th>Nom</th>
                                <th>Cognoms</th>                     
                                <th class="text-center">Veure</th>
                                <th class="text-center">Modificar</th>
                                <th class="text-center">Eliminar</th>
                            </tr>
                        </thead>    
                        <?php
                        foreach ($arrayDeDirectors as $r):
                            ?>
                            <tr>
                                <td><?php echo $r->__GET('nif'); ?></td>
                                <td><?php echo $r->__GET('name'); ?></td>
                                <td><?php echo $r->__GET('lastname'); ?></td>
                                <td class="text-center">
                                    <a href="?ctl=director&act=veure&id=<?php echo $r->__GET('id_director'); ?>"><span class="fa fa-eye text-center fa-lg" aria-hidden="true"/></a>                                
                                </td>
                                <td class="text-center">            
                                    <a href="?ctl=director&act=modificar&id=<?php echo $r->__GET('id_director'); ?>"><span class="fa fa-pencil fa-lg" aria-hidden="true"/></a>
                                </td>
                                <td class="text-center">
                                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?ctl=director&act=eliminar&id=<?php echo $r->id_director; ?>"><span class="fa fa-trash fa-lg" aria-hidden="true"/></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table> 
                </div>
                <button onclick="window.location.href='?ctl=director&act=afegir'" name="submit" class="btn btn-lg btn-block btn-default"><?php echo $button;?></button>
                </form>
            </div>
        </div> 
    </div>
</div>
<style>
    .fa-lg{
        color:black;
    }
</style>