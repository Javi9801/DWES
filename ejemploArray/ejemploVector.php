<?php
include $_SERVER['DOCUMENT_ROOT']."/proyectos/ejemploArray/rellenaCasillas.php";
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

        // $vector = rellenaVector();

        // foreach($vector as $numero){
        //     echo $numero;
        //     echo "<br>";
        // }

        // miVarDum($vector);


        $vector1 = array(1=>"a",2=>"b",3=>"c");
        $vector2 = array(1=>"b",2=>"c");
        $vector= limpiaVector($vector1, $vector2);        
        
        
        $vector3 = array(1=>"pepe",2=>"juan",3=>"pepe",4=>"pepe",5=>"manolo");
        $vector6= cuantasVeces($vector3); 
    ?>


</body>
</html>