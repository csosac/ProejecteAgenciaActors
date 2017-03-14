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

        <!-- Bootstrap -->
        <!--<link href="css/bootstrap.css" rel="stylesheet">--!
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="view/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="view/css/posicionament.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>

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
