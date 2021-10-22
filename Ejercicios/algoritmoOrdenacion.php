<?php



function ordenar(&$array){ // Deberíamos pasar por referencia, ya que no modificará el valor, si no que lo va a ordenar
    $longitud = count($array); // Medimos la longitud del array

    for($i = 0; $i< $longitud; $i++){ // Creamos la variable i y ha de ser menor que el array
        for($j = 0; $j < $longitud -1; $j++){ // Cramos la variable j 
            if($array[$j] > $array[$j+1]){  // Si j número es mayor a j +1(número de la derecha)
                $k = $array[$j]; // Creamos k, como número temporal, que vamos a comparar con el número de la derecha
                $array[$j] = $array[$j+1]; // Realizamos un intercambio de valores si es mayor
                $array[$j +1] = $k;
            }
        }  
    }
}
$array = [1,4,5,6,2,9];
ordenar($array);

echo "<pre>";
print_r($array);
echo "</pre>"
?>