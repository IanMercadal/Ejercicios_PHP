<?php

function findIt(array $seq){
    $seqLenght = count($seq);

    // Contador de números repetidos
    $contador = [];
    $contadorRepetidos = [];
    $contadorPrueba = [];

    foreach($seq as $numero){
        if(in_array($numero,$contador)){
            $contadorRepetidos[] = $numero;
        }
        else{
            $contador[] = $numero;
        }
    }
    $counts = array_count_values($contadorRepetidos);

    echo "<pre>";
    var_dump($contadorRepetidos);
    echo "</pre>";
    // return numeroRepetidoImpar;
}

findIt([20, 1, -1, 2, -2, 3, 3, 5, 5, 1, 2, 4, 20, 4, -1, -2, 5]);
// findIt([1,1,2,-2,5,2,4,4,-1,-2,5]);
// findIt([20,1,1,2,2,3,3,5,5,4,20,4,5]);
// findIt([10]);
// findIt([1,1,1,1,1,1,10,1,1,1,1]);