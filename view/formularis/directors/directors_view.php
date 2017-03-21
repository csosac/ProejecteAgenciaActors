
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-sm-offset-4 ">
                <h3> <?php echo $headerTitle; ?></h3>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="width:180px;">Nif</th>
                                <th>Nom</th>
                                <th>Cognoms</th>                     
                                <th style="width:60px;"></th>
                                <th style="width:60px;"></th>
                            </tr>
                        </thead>    
                        <?php
                       
                        foreach ($arrayDeDirectors as $r):
                            ?>
                            <tr>
                                <td><?php echo $r->__GET('name'); ?></td>
                                <td><?php echo $r->__GET('lastname'); ?></td>
                                <td><?php echo $r->__GET('nif'); ?></td>
                                <td>
                                    <a href="?ctl=director&act=veure&id=<?php echo $r->__GET('id_director'); ?>">Veure</a>
                                    <a href="?ctl=director&act=modificar&id=<?php echo $r->__GET('id_director'); ?>">Editar</a>
                                </td>
                                <td>
                                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?ctl=director&act=eliminar&id=<?php echo $r->id_director; ?>">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>


                    </table> 
                </div>
                <button name="submit" class="btn btn-lg btn-block btn-default">CREAR</button>
                </form>
            </div>
        </div> 
    </div>
