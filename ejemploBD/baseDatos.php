<?php
    require_once("Clases/Usuario.php");
    require_once("BD/BD.php");
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


<form action="baseDatos.php" method="POST" >
   <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="">
    </p>
    <p>
        <label for="correo">Correo</label>
        <input type="text" name="correo" id="correo" value="">
    </p>
    <p>
        <label for="password">Password</label>
        <input type="text" name="password" id="password" value="">
    </p>
    <p>
        <label for="rol">Rol</label>
        <input type="text" name="rol" id="rol" value="">
    </p>

    <p>
        <input type="submit" name="insertar" id="insertar" value="INSERTAR">
        <input type="submit" name="eliminar" id="eliminar" value="ELIMINAR">
    </p>


</form>
</body>
</html>

<?php
BD::conecta();

if(isset($_POST["insertar"])){

    
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    $u = BD::obtieneUsuario($correo);
    if($u!=null){
        BD::bajaUsuario($u);
        $u = new usuario($nombre, $correo, $password, $rol);
        BD::altaUsuario($u);
        
    } else {
        $u = new usuario($nombre, $correo, $password, $rol);
        BD::altaUsuario($u);
    }

}


if(isset($_POST["eliminar"])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    $u = new usuario($nombre, $correo, $password, $rol);
    BD::bajaUsuario($u)
}

    $lista = BD::obtieneUsuarios();
    foreach($lista as $i){
        echo "Nombre: ".$i->getNombre()."; Correo: ".$i->getCorreo()."; Password: ".$i->getPassword()."; Rol:  ".$i->getRol()."<br> ";
    }

?>