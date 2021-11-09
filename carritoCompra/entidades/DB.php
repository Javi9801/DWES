<?php
require_once("producto.php");
class DB{
    private static $productos = array();


    public static function obtieneProductos(){
        return self::$productos;
    }


    public static function obtieneProducto($cod){

        // if(isset(self::$productos[$cod])){
        //     return self::$productos[$cod];
        // }
         $pro=null;
        if(self::existeProducto($cod)){
            $pro = self::$productos[$cod];
        }
        return $pro;
    }


    public static function existeProducto($cod){
    $hayProducto = false;
    $productos = self::$productos;
        foreach($productos as $i){
            if($i->codigo == $cod){
                $hayProducto = true;
            }
        }
        return $hayProducto;
    }


    public static function altaProducto(Producto $p){

        if(!isset(self::$productos[$p->codigo])){
            self::$productos[$p->codigo] = $p;
        }


        // $hayProducto;
        // foreach($productos as $i){
        //     if($i->codigo != $p->codigo){
        //         $productos[$p=>codigo] = $p;
        //         $hayProducto = true;
        //     } else{
        //         $hayProducto = false;
        //     }
        // }
        // return $hayProducto;
    }

    public static function rellenaPrincipio(){

        self::$productos[0] = new Producto(0,"jamon",45);
        self::$productos[1] = new Producto(1,"queso",50);
        self::$productos[2] = new Producto(2,"coche",5555);
        self::$productos[3] = new Producto(3,"moto",800);
    }
}