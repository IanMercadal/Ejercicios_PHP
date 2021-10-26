<?php
    function ordenar(){
        $array = [];
        echo "<h2>Introduce 5 números</h2> \n";

        $primero = (int)readline('Introduce el primer integer: ');
        $segundo = (int)readline('Introduce el segundo integer: ');
        $tercero = (int)readline('Introduce el tercero integer: ');
        $cuarto = (int)readline('Introduce el cuarto integer: ');
        $quinto = (int)readline('Introduce el quinto integer: ');

        array_push($array,$primero,$segundo, $tercero,$cuarto,$quinto); // Insertamos los valores en el array

        $longitud = count($array); // Medimos la longitud del array
            
        for($i = 0; $i< $longitud; $i++){ // Creamos la variable i y debe de ser menor que el array
            for($j = 0; $j < $longitud -1; $j++){ // Cramos la variable j 
                if($array[$j] > $array[$j+1]){  // Si j número es mayor a j +1(número de la derecha)
                    $k = $array[$j]; // Creamos k, como número a comparar por cada iteración(este va variando), que vamos a comparar con el número de la derecha
                    $array[$j] = $array[$j+1]; // Realizamos un intercambio de valores si es mayor
                    $array[$j +1] = $k;
                }
            }  
        }
        print_r($array);
    }
ordenar();
