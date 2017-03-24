
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
                                <th >Foto</th>              
                                <th style="width:60px;"></th>
                                <th style="width:60px;"></th>
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
                                <td><img src="<?php echo 'view/images/actors/'.$r->__GET('photoURL').'.png'; ?>" class="imgListaCrud img-responsive img-rounded " alt="Cinque Terre"/> </td>
                                <td>
                                    <a href="?ctl=actor&act=veure&id=<?php echo $r->__GET('id_actor'); ?>">Veure</a>
                                    <a href="?ctl=actor&act=modificar&id=<?php echo $r->__GET('id_actor'); ?>">Editar</a>
                                </td>
                                <td>
                                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?ctl=actor&act=eliminar&id=<?php echo $r->id_actor; ?>">Eliminar</a>
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