<?php
class Usuario{
    private $correo;
    private $nombre;
    private $password;
    private $rol;


    public function getNombre(){
        return $this->nombre;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getRol(){
        return $this->rol;
    }


    // public function __get($atributo){
    //     if(property_exists($this, $atributo)){
    //         return $this->$atributo;
    //     }
    // }

    // public function __set($atributo, $valor){
    //     if(property_exists($this, $atributo)){
    //         $this->$atributo = $valor;
    //     }
    // }

    public function __construct($nombre, $correo, $password, $rol){
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->password = $password;
        $this->rol = $rol;
    }
}
