<?php

function creaLinea($a, $numero){
    $linea="";
    $caracter="";
    if($a<10){
        if($a<10 and $a*$numero<10){
            $caracter=" ".$numero;
            $linea = $numero." x ".justificaDerecha($a,strlen($caracter))." = ".justificaDerecha(($a*$numero),strlen($caracter));
        } else {
            $caracter=" ".$numero;
            $linea = $numero." x ".justificaDerecha($a,strlen($caracter))." = ".$a*$numero;
        }
    } else {
        $linea = $numero." x ".$a." = ".$a*$numero;
    }
    return $linea;
}

function justificaDerecha($numero, $tamaño){
    $cadena ="";
    for($a=0; $a<$tamaño;$a++){
        $cadena = $cadena."&nbsp;";
    }
    return $cadena.$numero;
}