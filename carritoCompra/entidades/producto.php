<?php
class Producto{
    private $codigo;
    private $nombre;
    private $precio;

    public function __get($atributo){
        if(property_exists($this, $atributo)){
            return $this->$atributo;
        }
    }

    public function __set($atributo, $valor){
        if(property_exists($this, $atributo)){
            $this->$atributo = $valor;
        }
    }

    public function __construct($codigo, $nombre, $precio){
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}
