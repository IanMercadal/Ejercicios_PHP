<html>
<head>
 <title>Ejemplo de operadores de Comparacion</title>
</head>
<body>
<h1>Ejemplo de operaciones comparacion en PHP</h1>
<?php

prueba(); // Llamamos a la función, podemos hacerlo desde arriba en este caso

function prueba(){
    $a = 12;
    $b = 13;
    if($a < $b){
        echo $a . " es menor a " . $b;
        return $a . " es menor a" . $b;
    }
    elseif($a > $b){
        echo $a . " es mayor a " . $b;
        return $a . " es mayor a " . $b;
    }
    else{
        echo "Intentalo de nuevo" . "<br>";
        return "Intentalo de nuevo" . "<br>";
    }
}


?>
</body>
</html>