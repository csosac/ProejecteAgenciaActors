<!--cos principal del formulari-->
<div class="container-fluid ">
    <div class="articulo contenido"> 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 ">
                <h3> <?php echo $headerTitle; ?></h3>
                <form method="post" id="formid" action="<?php echo $action; ?>">
                    <div class="form-group">
                        <label>NIF:</label>
                        <input class="form-control required"  name="nif"  value="<?php echo $director->__GET('nif'); ?>" >                  
                    </div>
                    <div class="form-group">
                        <label>Nom:</label>
                        <input class="form-control required"  name ="name" value="<?php echo $director->__GET('name'); ?>">
                    </div>
                    <div class="form-group">
                        <label>Cognom</label>
                        <input class="form-control required"  name="lastname"  value="<?php echo $director->__GET('lastname'); ?>" >

                    </div>                   
                    <button name="submit" class="btn btn-lg btn-block btn-default"><?php echo $button; ?></button>
                </form>
            </div>
        </div> 
    </div>

    <script src="jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {


            $("#formid").validate({
                rules: {
                    name: {required: true, minlength: 2},
                    lastname: {required: true, minlength: 2},
                    nif: {required: true, pattern: /^\d{8}[a-zA-Z]$/},
                },
                messages: {
                    name: {
                        required: "Has d'introduir el nom"
                    },
                    lastname: {
                        required: "Has d'introduir el cognom"
                    },
                    nif: {
                        required: "Has d'introduir un dni",
                        pattern: "Has d'introduir el dni en el format correcte"
                    }
                },
                submitHandler: function (form) {
                    $(form).ajaxSubmit();
                }
            });
        });
    </script>


</div>