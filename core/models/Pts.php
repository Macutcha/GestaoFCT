<?php

namespace core\models;

use core\class\Database;

class Pts
{

    public function listar_pts() {
        $db = new Database;

        $pts = $db -> select("SELECT * FROM pts");

        return $pts;
    }


    // Funcao que verifica se o pt esta repetido
    public static function verificar_pt_exixte_bd() {
        $parametro = [
            ":pt" => $_POST['num_pt'],
        ];

        // var_dump($parametro);
        // die();
        $bd = new Database;
        $resulado = $bd -> select("SELECT * FROM pts WHERE num_pt = :pt  ", $parametro);
        
        // 
        if (count($resulado) !=0) {
            return true;
        } else {
            return false;
        }
    }

    public static function adicionat_pt_bd() {
        $parametro = [
            ":pt"           =>      $_POST['num_pt'],
            ":bairro"        =>      $_POST['bairro'],
            // ":delegacao"     =>      $_POST['delegacao'],
            // ":proximidade"  =>      $_POST['proximidade']
        ];

        var_dump($parametro);
        echo"certo";
        $bd = new Database;
        $bd -> insert("INSERT INTO pts(id_pt, num_pt, bairro) VALUES(0,  :pt, :bairro )", $parametro);
    }

    
}