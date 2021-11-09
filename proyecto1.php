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
    $a=1;
    
    echo 1 === $a;
    echo "<br>";
    echo $a === 1;
    echo $a++ == 2;
    echo --$a == false;
    echo "<br>";

?>
    <br>
<?php

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['DOCUMENT_ROOT'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['SERVER_ADDR'];
    echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD'];
    echo "<br>";
    
    
?>

    <br>
<?php

    if(isset($_GET['nombre']) && isset($_GET['apellido'])){
        echo $_GET['nombre']." ".$_GET['apellido'];
    } else
        echo "no se";
    
    echo "<br>";
   

?>


 </body>
 </html>