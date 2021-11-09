<?php
require_once("producto.php");
class Cesta{

    private $cesta = array();
    private $productos = array();
    // Introduce un nuevo artículo en la cesta de la compra
    public function nuevo_articulo($codigo) {
        $producto = DB::obtieneProducto($codigo);
        $this->cesta[] = $producto;
    }
    // Obtiene los artículos en la cesta
    public function get_cesta() { 
        return $this->cesta; 
    }
    
    
    // Obtiene el coste total de los artículos en la cesta
    public function get_coste() {
        $coste = 0;
        foreach($this->cesta as $p) $coste += $p->getPVP();
        return $coste;
    }

    // Devuelve true si la cesta está vacía
    public function vacia() {
        if(count($this->cesta) == 0){
             return true;
        }
        return false;
    }
    
// Guarda la cesta de la compra en la sesión del usuario
    // Guarda la cesta de la compra en la sesión del usuario
    public function guardaCesta() { 
        $_SESSION['cesta'] = $this; 
    }

    // Recupera la cesta de la compra almacenada en la sesión del usuario
    public static function cargaCesta() {
        if (!isset($_SESSION['cesta'])) 
            return new Cesta();
        else 
            return $_SESSION['cesta'];
    }

    

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

}

