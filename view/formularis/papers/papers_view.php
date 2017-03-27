
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div  class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 ">
                <h3> <?php echo $headerTitle; ?></h3>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class='text-center'>Paper</th>
                                <th class='text-center'>Obra</th>
                                <th class='text-center'>Actors</th>  
                                <th class="text-center">Veure</th>
                                <th class="text-center">Modificar</th>
                                <th class="text-center">Eliminar</th>
                            </tr>
                        </thead>    
                        <?php
                        foreach ($arrayDePapers as $r):
                            ?><tr>
                                <td class='text-center'><?php echo $r->__GET('paper'); ?></td>
                                <td class='text-center'><?php echo $r->__GET('id_obra'); ?></td>
                                <td class='text-center'><?php echo $r->__GET('id_actor'); ?></td>
                                                              <td class="text-center">
                                    <a href="?ctl=paper&act=veure&id=<?php echo $r->__GET('id_paper'); ?>"><span class="fa fa-eye text-center fa-lg" aria-hidden="true"/></a>                                
                                </td>
                                <td class="text-center">            
                                    <a href="?ctl=paper&act=modificar&id=<?php echo $r->__GET('id_paper'); ?>"><span class="fa fa-pencil fa-lg" aria-hidden="true"/></a>
                                </td>
                                <td class="text-center">
                                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?ctl=paper&act=eliminar&id=<?php echo $r->id_paper; ?>"><span class="fa fa-trash fa-lg" aria-hidden="true"/></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table> 
                </div>
                <button onclick="window.location.href='?ctl=paper&act=afegir'" name="submit" class="btn btn-lg btn-block btn-default"><?php echo $button;?></button>
                </form>
            </div>
        </div> 
    </div>
</div>
