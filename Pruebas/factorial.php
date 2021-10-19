<?php

// Este pequeño programa se ejecuta por consola.

$n = (int)readline('Introduce un integer: '); // Pedimos por pantalla al user que número quiere

function factorial($n){ // Pasamos por parametro el número introducido por el usuario
    if($n==1){
        return 1; // Esta es la condición de parada
    }
    return $n *factorial ($n-1);
}
echo "El factorial de $n es: " . factorial($n);
?>