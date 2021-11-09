<?php

function estilosa($texto, $numero=0){
    $textoEstilo = "";

    if($numero>=7 or $numero==0){
        $textoEstilo = "<p>".$texto."</p>";
    } else {
        $textoEstilo = "<h".$numero.">".$texto."</h".$numero.">";
    }
    return $textoEstilo;


}