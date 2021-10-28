<?php

// define('TEMPLATE_URL', __DIR__ . '/Clases');

function mi_autoload($clase){
    require __DIR__ . "/../Clases/" . $clase . ".php";    
}

spl_autoload_register('mi_autoload');

$obj  = new Dispositivos('Television', 400, 'No');
var_dump($obj);
?>