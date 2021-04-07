<?php

$accao = 'inicio';
$routes = [
    "index"                 =>                      "main@index"
];

if(isset($_GET['pagina']))
{
    // $accao = $_GET('pagina');
} else {
    $accao = 'inicio';
}


$partes = explode("@", $routes[$accao]);

var_dump($partes);
