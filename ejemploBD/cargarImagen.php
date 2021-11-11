<?php
require_once("Includes/BD.php");
require_once("Clases/Usuario.php");
require_once("Includes/sesion.php");


if(isset($_POST['submit'])){
    BD::conecta();
    Sesion::iniciar();

    var_dump($_SESSION);
    if(Sesion::existe('usuario')){
        $u = Sesion::leer('usuario');
    }

    $revisar = getimagesize($_FILES["image"]["tmp_name"]);

    if($revisar!==false){
        $image = $_FILES["image"]["tmp_name"];
        $img_contenido = file_get_contents($image);
        $img_contenido = base64_encode($img_contenido);

        var_dump($_FILES);


           $res =  BD::insertaImagen($u, $img_contenido);
            if($res){
                echo "OK";
                header("location : verDatos.php");
            } else {
                echo "ERROR";
            }
    }




}

