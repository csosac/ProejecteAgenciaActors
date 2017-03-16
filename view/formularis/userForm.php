<?php
?>

 <!--cos principal del formulari-->
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-sm-offset-4 ">
                        <form action='?ctl=usuari&act=login' method="POST">
                            <h3> REGISTRE NOU USUARI</h3>
                            <div class="form-group">
                                <label>Usuari:</label>
                                <!-- El value d'el input és el valor de la cookie-->
                                <input type="text" name="colaborador" value="<?php echo $guardarUsuari?>"><!-- mostrem la cookie en cas de que existeixi-->
                            </div>
                            <div class="form-group">
                                <label>Contrasenya</label>
                                <input type="password" name="pas">
                            </div>
                            <div class="form-group">
                                <label>Rep</label>
                                <input type="password" name="pas">
                            </div>
                            <p>Recordar Usuari <input type="checkbox" name="recordarUsuari"></p>
                            <button name="Submit" class="btn btn-lg btn-block btn-default">REGISTRAR-SE</button>
                        </form>
                    </div>
                </div> 

