<!--cos principal del formulari-->
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-sm-offset-4 ">
                    <h3> <?php echo $headerTitle; ?></h3>
                   
                        <label>NIF:</label>
                        <label><?php echo $director->__GET('nif'); ?></label>
                      
                  
                        <label>Nom:</label>
                        <label><?php echo $director->__GET('name'); ?></label>
                     
                   
                        <label>Cognom</label>
                        <label><?php echo $director->__GET('lastname'); ?></label>
                       
                                  
                    <button name="submit" class="btn btn-lg btn-block btn-default">Tornar</button>
                </form>
            </div>
        </div> 
    </div>
</div>