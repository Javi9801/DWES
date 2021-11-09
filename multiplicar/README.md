## **TABLA DE MULTIPLICAR**

##### Ejercicio de repaso de bucle FOR y condicional IF

```php+HTML
<?php

    if(isset($_GET['numero'])){

        $numero = ($_GET['numero']);

        for($a=0; $a<=10; $a++){
        
            if($a<10){
                if($a<10 and $a*$numero<10){
                    echo $numero." x &nbsp;&nbsp;".$a." = &nbsp;&nbsp;".$a*$numero;
                    echo "<br>";
                } else {
                    echo $numero." x &nbsp;&nbsp;".$a." = ".$a*$numero;
                    echo "<br>";
                }
            } else {
                echo $numero." x ".$a." = ".$a*$numero;
                echo "<br>";
            }
        }

    } else{
        echo "no existe ningun numero";
    }
    


    ?>
```

> Javier Jiménez Díaz