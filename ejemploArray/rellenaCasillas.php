<?php

function rellenaVector(){

    $numerosAleatorios=[];
    $num;
    for($a=0; $a<=20;$a++){
        $num=rand(1,100);
        while(in_array($num, $numerosAleatorios)==true){
            $num=rand(1,100);
        }
        $numerosAleatorios[]=$num;    
    }
    return $numerosAleatorios;
}

function miVarDum($vector){
     echo $_SERVER["DOCUMENT_ROOT"].$_SERVER["PHP_SELF"]."<br>";

    
    while($valor=current($vector)){
        echo key($vector)."=>".gettype($valor)." ".$valor."<br>"; 
        next($vector);
    }
    

}

function limpiaVector($vector1, $vector2){
    var_dump(array_diff($vector1, $vector2));
}

function cuantasVeces($vector1){
    var_dump(array_count_values($vector1));
}

function mi_array_count_values($vector1){
    $vector = [];
    $vector[$vector1[0]=>1];
    foreach($vector1 as $indice){
        if($indice)
    }


}

?>



<!-- Buscar como se genera un numero aleatorio y llenar un array de 20 con numeros distintos del 1 al 100 -->
