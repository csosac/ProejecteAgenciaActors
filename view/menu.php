<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="sr-only">Desplegar navegació</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?ctl=index">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <!--<a class="navbar-brand" href="?ctl=index">Inicio</a>-->

                <li class="dropdown 
                <?php
                if ($ctl == 'actor' | $ctl == 'papel') {
                    echo 'active';
                }
                ?>">
                    <a href="?ctl=actor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actors<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?ctl=actor&act=llistar">Actors</a></li>
                        <li><a href="?ctl=paper">Papers</a></li>
                        <?php if (checkSession()) { ?>
                            <li><a href="?ctl=actor&act=afegir">Afegir Actor</a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li 
                <?php
                if ($ctl == 'obra') {
                    echo'class="active"';
                }
                ?>>
                    <a href="?ctl=obra" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Obres<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?ctl=obra&act=llistar">Obres</a></li>
                        <?php if (checkSession()) { ?>
                            <li><a href="?ctl=obra&act=afegir">Afegir Obra</a></li>
                        <?php } ?>
                    </ul>
                </li>

                <li class="dropdown  <?php
                if ($ctl == 'director') {
                    echo 'active';
                }
                ?>">
                    <a href="?ctl=director" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Director<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?ctl=director&act=llistar">Directors</a></li>
                        <?php if (checkSession()) { ?>
                            <li><a href="?ctl=director&act=afegir">Afegir Director</a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="dropdown 
                <?php
                if ($ctl == 'paper') {
                    echo 'active';
                }
                ?>">
                    <a href="?ctl=paper" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paper<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?ctl=paper&act=llistar">Papers</a>
                        </li>
                        <?php if (checkSession()) { ?>
                            <li>
                                <a href="?ctl=paper&act=afegir">Afegir Paper</a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                
                <li class="dropdown 
                <?php 
                if ($ctl == 'contacto') {
                    echo 'class="active';
                }
                ?>">
                    <a href="?ctl=contacto">Contacte</a>
                </li>
            </ul>
            <?php if (checkSession()) { ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?ctl=usuari&act=logout" value ="Tancar Sessio"><span class="glyphicon glyphicon-log-in" /> Tancar Sessió</a></li>

                </ul><?php } else { ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?ctl=usuari&act=login"><span class="glyphicon glyphicon-log-in"/> Iniciar Sessió</a></li>
                </ul>
            <?php } ?>
        </div>
    </div>
</nav>

