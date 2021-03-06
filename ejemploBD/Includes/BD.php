<?php
require_once('./Clases/usuario.php');
require_once('./Clases/imagen.php');

class BD{
    private static $con;

    public static function conecta(){
        self::$con = new PDO('mysql:host=localhost;dbname=tienda', 'root', '');
    }


    public static function obtieneUsuarios():array{
        $ret = array();

        $res = self::$con->query("Select * from Tienda.users");
        while($registro = $res->fetch()){
            $u = new usuario($registro['Nombre'],$registro['Correo'],$registro['Password'],$registro['Rol']);
            $ret[] = $u;
        }

        return $ret;

    }

    public static function obtieneUsuario($nombre):usuario{
        $res = self::$con->query("Select * from Tienda.users where Nombre = '$nombre'");

        while($registro = $res->fetch()){
            $u = new usuario($registro['Nombre'],$registro['Correo'],$registro['Password'],$registro['Rol']);
        }

        return $u;
    }

    public static function existeUsuario($nombre){
        $res = self::$con->query("Select * from Tienda.users where Nombre = '$nombre'");

        $cons = $res->fetch();
        if($cons!=0){
            return true;
        }
            return false;
    }

    public static function altaUsuario(usuario $u){

        $res = self::$con->prepare("Insert into Tienda.users values(:nombre, :correo, :password, :rol)");

        $nombre = $u->getNombre();
        $correo = $u->getCorreo();
        $password = $u->getPassword();
        $rol = $u->getRol();

        $res->bindParam(':nombre',$nombre);
        $res->bindParam(':correo',$correo);
        $res->bindParam(':password',$password);
        $res->bindParam(':rol',$rol);

        $res->execute();
    }

    public static function bajaUsuario(usuario $u){
        $correo = $u->getCorreo();

        $res = self::$con->prepare("Delete from Tienda.users where Correo = '$correo'");
        $res->bindParam(':correo',$correo);
        $res->execute();
    }

    public static function insertaImagen(usuario $u, $i){

            $correo = $u->getCorreo();

            $res = self::$con->exec("INSERT INTO Tienda.images(id,imagen, hora) values ('$correo', '$i', now())");


            return $res;

    }

    public static function cargaImagen($correo){

        $ret = array();

        $res = self::$con->query("SELECT * FROM tienda.images WHERE id = '$correo'");

        while($registro = $res->fetch()){
            $u = new imagen($registro['id'],$registro['imagen'],$registro['hora'],);
        }

        return $u;
    }

}