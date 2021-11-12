<?php
class Imagen{
    private $id;
    private $imagen;
    private $hora;


    public function getId(){
        return $this->id;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function getHora(){
        return $this->hora;
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

    public function __construct($id, $imagen, $hora){
        $this->id = $id ;
        $this->imagen = $imagen;
        $this->hora = $hora;
    }
}
