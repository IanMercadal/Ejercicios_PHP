<?php



function ordenar($array){
    $longitud = count($array); // Medimos la longitud del array

    for($i = 0; $i< $longitud; $i++){ // Creamos la variable i y ha de ser menor que el array
        for($j = 0; $j < $longitud -1; $j++){ // Cramos la variable j 
            if($array[$j] > $array[$j+1]){
                echo $i;
                echo $j;
                echo $array;
            }
        }  
    }    
}
ordenar($array = [1,4,5,6,2,3]);
?>