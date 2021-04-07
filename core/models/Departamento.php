<?php

namespace core\models;

use core\class\Database;

class Departamento
{
    public static function listar_cargo()
    {
        $db = new Database;
        $resultado = $db -> select("SELECT * FROM cargo");
        return $resultado;
    }
}
