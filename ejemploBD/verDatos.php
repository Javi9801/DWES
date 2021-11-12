<?php
require_once("Includes/sesion.php");
require_once("Includes/BD.php");
require_once("Clases/Usuario.php");


Sesion::iniciar();
BD::conecta();

if(Sesion::existe('usuario')){
    $u = Sesion::leer('usuario');
    echo $u->getNombre().", ".$u->getCorreo().", ".$u->getRol()."<br>";

    $imagenes = BD::cargaImagen($u->getCorreo());

    if($imagenes!=null){
        echo "<img src='data:image/jpeg;base64," .$imagenes->getImagen(). " ' alt='Img blob desde MySQL' width='600' />";
    } else {
        echo "no carga";
    }

    echo "<button><a href='logoff.php'>Desconectarse</a></button>";
}
