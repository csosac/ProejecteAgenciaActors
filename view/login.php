<?php
//en cas de que hi hagi una cookie amb un usuari la recuperarem
$guardarUsuari = "";
if (isset($_COOKIE['usuari'])) {
    $guardarUsuari = $_COOKIE['usuari'];
}
?>       
<!--cos principal del formulari-->
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-sm-offset-4 ">
                <form action='?ctl=usuari&act=login' method="POST">
                    <h3> <?php echo $headerTitle; ?></h3>
                    <div class="form-group">
                        <label>Usuari:</label>
                        <!-- El value d'el input és el valor de la cookie-->
                        <input class="form-control" type="text" name="username" value="<?php echo $guardarUsuari ?>"><!-- mostrem la cookie en cas de que existeixi-->
                    </div>
                    <div class="form-group">
                        <label>Contrasenya</label>
                        <input class="form-control" type="password" name="pass">
                    </div>
                    <p>Recordar Usuari <input type="checkbox" name="recordarUsuari"></p>
                    <button name="Submit" class="btn btn-lg btn-block btn-default">LOGIN</button>
                </form>
            </div>
        </div> 
    </div>
</div>