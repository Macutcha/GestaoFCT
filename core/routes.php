<?php

// Dedinicao das rotas
$routes = [
    "inicio"                            =>                  "main@index",
    "criar_funcionario"                     =>                  "main@criar_funcionario",
    "adicionar_funcionario"             =>                  "main@adicionar_funcionario",

    "criar_equipamento"                    =>                  "main@criar_equipamento",
    "validar_add_equipamento"              =>                  "main@validar_add_equipamento",
    "requisitar_equipamento"               =>                  "main@requisitar_equipamento",
    "sub_requisicao"                        =>                  "main@sub_requisicao",
];

$action ="inicio";

if (isset($_GET['a'])) {
    if (key_exists($_GET['a'], $routes)) {
        $action = $_GET['a'];
    } else {
        $action = 'inicio';
    }
}

$parts = explode("@", $routes[$action]);

$controller = 'core\\controller\\'. ucfirst($parts[0]);
$method = $parts[1];

$ctr = new $controller();
$ctr -> $method();
