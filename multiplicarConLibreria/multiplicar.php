<?php
include 'libreriaMultiplicar.php';
include 'funciones.php'
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
            echo estilosa(creaLinea($a,$numero),2);
            
        }
    } else{
        echo "no existe ningun numero";
    }
    ?>
</body>
</html>