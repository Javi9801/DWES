## **TABLA DE MULTIPLICAR**

##### Ejercicio de repaso de bucle FOR y condicional IF, añadiendo librerias

```php+HTML
<?php

    function creaLinea($a, $numero){
    $linea="";
    if($a<10){
        if($a<10 and $a*$numero<10){
            $linea = $numero." x ".justificaDerecha($a,2)." = 					".justificaDerecha(($a*$numero),2);
        } else {
            $linea = $numero." x ".justificaDerecha($a,2)." = ".$a*$numero;
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
    


    ?>
```



```php+HTML
<?php
include 'libreriaMultiplicar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    
    <?php

    if(isset($_GET['numero'])){
        $numero = ($_GET['numero']);
        
        for($a=0; $a<=10; $a++){
            echo creaLinea($a,$numero);
            echo "<br>";
        }
    } else{
        echo "no existe ningun numero";
    }
    ?>
</body>
</html>
```

##### <u>Importante incluir esto!!!</u>

`include 'libreriaMultiplicar.php';`
`include 'funciones.php';`




