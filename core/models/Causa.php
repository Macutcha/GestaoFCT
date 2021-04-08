<?php

namespace core\models;

use core\class\Database;

class Causa
{
    public static function listar_causa()
    {
        $db = new Database;
        $resultado = $db -> select("SELECT * FROM avaria");
        return $resultado;
    }
}
