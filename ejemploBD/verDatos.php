<?php
require_once("Includes/sesion.php");
require_once("Clases/Usuario.php");


Sesion::iniciar();

if(Sesion::existe('usuario')){
    $u = Sesion::leer('usuario');
    echo $u->getNombre().", ".$u->getCorreo().", ".$u->getRol()."<br>";

    echo "<p><a href='logoff.php'>LOGOFF</a></p>";
}
