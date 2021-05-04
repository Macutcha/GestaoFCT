<?php

namespace core\models;

use core\class\Database; 

class Usuario {
    public static function verificar_usuario_BD($email = null, $senha = null) {

        $params = [
            
        ];

        $db = new Database;
        $cont = $db -> select("SELECT * FROM usuario where Senha = $senha");
        
        if ($cont !=1) {
            die($cont);
            return true;
        } else {
            die($cont);
            return false;
        }
    }
}