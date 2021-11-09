<?php
include $_SERVER['DOCUMENT_ROOT'].'/proyectos/funcionEstilosa/lib/funciones.php';
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
        for($a=0; $a<10; $a++){
            echo estilosa("texto de prueba",$a);
        }

    ?>
</body>
</html>