<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="HTML, Meta Tags, Metadata" />
        <meta name="description" content="Index de la página." />
        <meta name="author" content="Cristina Roige, Rocio Alor, Daniel Fernandez, Cristian Sosa" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title><?php $headerTitle ?></title>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!--jquery del boostrap sempre abans del Javascript-->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!--
        <script src="js/bootstrap.min.js"></script> --><!--està a la carpeta js ara està comentat-->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
        
        <script type="text/javascript" src= "view/js/code.js"></script>

    </head>
    <body>
<div class="container-fluid ">
        <!--==============================header=================================-->
        <div class="container-fluid">
            <div class="encabezado">
            </div>
            <?php
            require_once 'menu.php';
            ?>
        </div>
