<?php

require_once('./Clases/usuario.php');

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

    public static function obtieneUsuario($correo):usuario{
        $res = self::$con->query("Select * from Tienda.users where Correo = '$correo'");

        while($registro = $res->fetch()){
            $u = new usuario($registro['Nombre'],$registro['Correo'],$registro['Password'],$registro['Rol']);
        }

        return $u;
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

}