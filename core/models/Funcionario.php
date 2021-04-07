<?php

namespace core\models;

use core\class\Database;

class Funcionario
{
    public static function addFuncionarioBD($nome, $cargo)
    {
        $parametros = [
            ":nome"         =>        $nome,
            ":cargo"        =>        $cargo
        ];
        
        $db = new Database;
        $db -> insert( "
        INSERT INTO funcionario VALUES(0, :nome, :cargo)", 
        $parametros); 
    }
}
