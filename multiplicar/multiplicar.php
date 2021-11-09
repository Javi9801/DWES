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
            if($a<10){
                if($a<10 and $a*$numero<10){
                    $linea = $numero." x &nbsp;&nbsp;".$a." = &nbsp;&nbsp;".$a*$numero;
                    echo $linea;
                    echo "<br>";
                } else {
                    $linea = $numero." x &nbsp;&nbsp;".$a." = ".$a*$numero;
                    echo $linea;
                    echo "<br>";
                }
            } else {
                $linea = $numero." x ".$a." = ".$a*$numero;
                echo $linea;
                echo "<br>";
            }
        }
    } else{
        echo "no existe ningun numero";
    }
    ?>
</body>
</html>