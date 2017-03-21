<!--cos principal del formulari-->
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-sm-offset-4 ">
                    <h3> <?php echo $headerTitle; ?></h3>
                    <div class="form-group">
                        <label>NIF:</label>
                        <input class="form-control" type="text" name="nif" >
                    </div>
                    <div class="form-group">
                        <label>Nom:</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label>Cognom</label>
                        <input class="form-control" type="text" name="lastname">
                    </div>                   
                    <button name="submit" class="btn btn-lg btn-block btn-default">CREAR</button>
                </form>
            </div>
        </div> 
    </div>
</div>