<?php
require_once("entidades/DB.php");
require_once("entidades/cesta.php");

session_start();

$cesta = cesta::cargaCesta();

if (isset($_POST['vaciar'])) {
    unset($_SESSION['cesta']);
    $cesta = new CestaCompra();
}



function creaFormulario(){
    DB::rellenaPrincipio();
    
    $produc = DB::obtieneProductos();

    foreach ($produc as $i){

        $cod = $i->codigo;
        $nom = $i->nombre;
        $pre = $i->precio;

        echo "<p><form  id='$cod' action='index.php' method='POST'>";

        echo "<input type='hidden' value='$cod' name='cod'/>";
        echo "<input type='hidden' value='$nom' name='nombre'/>";
        echo "<input type='hidden' value='$pre' name='precio'/>";
        echo "<input type='submit' name='enviar' value='Añadir'/>";


        echo " $nom:";
        echo $pre." euros";
        echo "</form>";
        echo "</p>";
       
    }

    $cesta = cesta::cargaCesta();
    $cesta->productos = $produc;
    $cesta->guardaCesta();
}



function pintaCarrito(){
    $cesta = cesta::cargaCesta();

    if(isset($cesta)){
        $prod = $cesta->cesta;
        foreach($prod as $i){
            echo $i->nombre."->".$i->precio."<br><br>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    <div id="contenedor">
        
  

        <div id="contenido">
        <h1>LISTADO PRODUCTOS</h1>
            <?php creaFormulario(); ?>

        </div>

    
<?php

if (isset($_POST['enviar'])) {
    $cesta->nuevo_articulo($_POST['cod']);
    $cesta->guardaCesta();
}

?>

        <div id="cesta">
            <h3>MI CARRITO</h3>
            <?php pintaCarrito(); ?>
        </div>

    </div>
</body>
</html>
