<?php
require_once("./Clases/usuario.php");

class Sesion{
    public static function iniciar(){
        if(!isset($_SESSION)){
            session_start();
        }
    }

    public static function leer(string $clave){
        return isset($_SESSION[$clave])?$_SESSION[$clave]:"";
    }

    public static function existe(string $clave){
        return isset($_SESSION[$clave])?true:false;
    }

    public static function escribir($clave, $valor){
        $_SESSION[$clave] = $valor;
    }

    public static function eliminar($clave){
        unset($_SESSION[$clave]);
    }

    public static function destruir(){
        session_destroy();
    }
}
