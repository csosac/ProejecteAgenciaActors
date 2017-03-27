
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div  class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 ">
                <h3> <?php echo $headerTitle; ?></h3>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class='text-center'>Nif</th>
                                <th class='text-center'>Nom</th>
                                <th class='text-center'>Cognoms</th>                     
                                <th class='text-center'>Genere</th>
                                <th class='text-center'>Foto</th>     
                                <th class="text-center">Veure</th>
                                <th class="text-center">Modificar</th>
                                <th class="text-center">Eliminar</th>
                            </tr>
                        </thead>    
                        <?php
                        foreach ($arrayDeActors as $r):
                            ?>
                            <tr>
                                <td class='text-center'><?php echo $r->__GET('nif'); ?></td>
                                <td class='text-center'><?php echo $r->__GET('name'); ?></td>
                                <td class='text-center'><?php echo $r->__GET('lastname'); ?></td>
                                <td class='text-center'><?php if ($r->__GET('genre')== 'female'){echo 'Dona';}
                                          else{echo 'Home';}?></td>
                                <td><img src="<?php echo $r->__GET('photoURL'); ?>" class="imgListaCrud img-responsive img-rounded " alt="Cinque Terre"/> </td>
                                <td class="text-center">
                                    <a href="?ctl=actor&act=veure&id=<?php echo $r->__GET('id_actor'); ?>"><span class="fa fa-eye text-center fa-lg" aria-hidden="true"/></a>                                
                                </td>
                                <td class="text-center">
                                    <a href="?ctl=actor&act=modificar&id=<?php echo $r->__GET('id_actor'); ?>"><span class="fa fa-pencil fa-lg" aria-hidden="true"/></a>
                                </td>
                                <td class="text-center">
                                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?ctl=actor&act=eliminar&id=<?php echo $r->id_actor; ?>"><span class="fa fa-trash fa-lg" aria-hidden="true"/></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table> 
                </div>
                <button onclick="window.location.href='?ctl=actor&act=afegir'" name="submit" class="btn btn-lg btn-block btn-default"><?php echo $button;?></button>
                </form>
            </div>
        </div> 
    </div>
</div>
