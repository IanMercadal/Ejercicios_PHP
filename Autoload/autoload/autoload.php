<?php

// define('TEMPLATE_URL', __DIR__ . '/Clases');

// function mi_autoload($clase){
//     require __DIR__ . "/../Clases/" . $clase . ".php";    
// }

// spl_autoload_register('mi_autoload');

// $obj  = new Dispositivos('Television', 400, 'No');
// var_dump($obj);


// Para no tener que cambiar el nombre del archivo o de la clase

$clases = [
    "Dispositivo"=> "../Clases/Dispositivos.php"
];

function mi_autoload($nombre){
    global $clases;
    require "$clases[$nombre]";    
}
spl_autoload_register('mi_autoload');

$obj = new Dispositivo("Dispositivo",12,"Miau");
echo "<pre>";
var_dump($obj);
echo "</pre>";

$obj  = new Dispositivo('Television', 400, 'No');
echo "<pre>";
var_dump($obj);
echo "</pre>";

$obj = new Dispositivo('Tablet', 120, "Sí");
echo "<pre>";
var_dump($obj);
echo "</pre>";

$obj = new Dispositivo('Tablet',500,"Sí","Deluxe");
$obj->edicion="Deluxe";

echo "<pre>";
var_dump($obj);
echo "</pre>";
?>