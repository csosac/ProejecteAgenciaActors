<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Desplegar navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?ctl=index">Home</a>
        </div>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <!--<a class="navbar-brand" href="?ctl=index">Inicio</a>-->
            <?php if ($ctl == 'actor' | $ctl == 'papel') { ?>
                <li class="dropdown active">
                    <a href="?ctl=actor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actors<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?ctl=papers">Papers</a></li>
                        <?php if (checkSession()) { ?>
                            <li><a href="?ctl=actor&act=afegir">Afegir Actor</a></li>
                            <li><a href="?ctl=actor&act=modificar">Modificar Actor</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } else { ?>
                <li class="dropdown">
                    <a href="?ctl=actor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actors<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?ctl=papers">Papers</a></li>
                        <?php if (checkSession()) { ?>
                            <li><a href="?ctl=actor&act=afegir">Afegir Actor</a></li>
                            <li><a href="?ctl=actor&act=modificar">Modificar Actor</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
            <?php if ($ctl == 'obras') { ?>
                <li class="active"><a href="?ctl=obras">Obras</a></li>
            <?php } else { ?>
                <li><a href="?ctl=obras">Obras</a></li>
            <?php } ?>
            <?php if ($ctl == 'director') { ?>
                <li class="active"><a href="?ctl=director">Director</a></li>
            <?php } else { ?>
                <li><a href="?ctl=director">Director</a></li>
            <?php } ?>
            <?php if ($ctl == 'contacto') { ?>
                <li class="active"><a href="?ctl=contacto">Contacto</a></li>
            <?php } else { ?>
                <li><a href="?ctl=contacto">Contacto</a></li>
            <?php } ?>

        </ul>

        <?php if (checkSession()) { ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="?ctl=usuari&act=logout">Tancar Sessio</a></li>

            </ul><?php } else { ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="?ctl=usuari&act=login"><span class="glyphicon glyphicon-log-in"></span>   Iniciar Sessio</a></li>
            </ul>
        <?php } ?>
    </div>
</nav>

