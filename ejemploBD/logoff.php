 <?php
require_once("Includes/sesion.php");
require_once("Clases/usuario.php");

sesion::iniciar();

if(sesion::existe('usuario')==false){
    header("location: loginform.php");
} else {
    sesion::eliminar('usuario');
    sesion::destruir();
    header("Location: loginform.php");
}



?>

