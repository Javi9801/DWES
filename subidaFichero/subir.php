<?php
    $foto=""
    if(isset($_FILES['fichero'])){
        move_uploaded_file($_FILES['fichero']['tmp_name'],"./imagenes.imagen1.jpg");
        //o
        $foto = file_get_contents($_FILES['fichero',['tmp_name']]);
        $foto = base64_encode($foto);
    }
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
    <form action="" method='POST' enctype="multipart/form-data">

        Selecciona fichero:
        <br>
        <input type='file' name='fichero'>
        <br>
        <input type='file' name='fichero2'>
        <br>

        <input type='submit' value='Enviar'>



    </form>

<?php
    echo "<img src=data.nombreImagen;base64,'$foto'; alt='imagen/'>"

?>
</body>
</html>