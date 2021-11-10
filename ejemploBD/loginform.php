<?php
require_once("Includes/sesion.php");
require_once("Includes/BD.php");
Sesion::iniciar();
$error = "";

if(isset($_POST["enviar"])){
    BD::conecta();
    $usuario = $_POST['nombre'];
    $password = $_POST['password'];

    if(empty($usuario) || empty($password)){
        echo "Debes tener un usuario con contraseña";
    } else {
        if(Sesion::existe('usuario')){
            $u = Sesion::leer('usuario');
        } else {
            $u = BD::obtieneUsuario($usuario);
            Sesion::escribir('usuario', $u);

        }
        header("Location: verDatos.php");
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action='loginform.php' method='post'>

        <div>
            <label for='usuario' >Usuario:</label><br/>
            <input type='text' name='nombre' id='nombre' maxlength="50" /><br/>
        </div>
        <div>
            <label for='password' >Contraseña:</label><br/>
            <input type='password' name='password' id='password' maxlength="50" /><br/>
        </div>

        <div>
            <input type='submit' name='enviar' value='Enviar' />
        </div>


    </form>

</body>
</html>
