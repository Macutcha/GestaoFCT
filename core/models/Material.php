<?php


namespace core\models;

use core\class\Database;
use core\class\Gestao;

class Material
{
    public static function AddMaterialBd($tipo_material, $marca, $referencia)
    {
        $parametros = [
            ":tipo_material"           =>               $tipo_material,
            ":marca"                   =>               $marca,
            ":referencia"              =>               $referencia
        ];
        $db = new Database;
        $db->insert(
            "
        INSERT INTO material VALUES(0, :referencia, :marca, :tipo_material)",
            $parametros
        );

        $_SESSION["certo"] = "Valpor Adicionado na BD";
        Gestao::redicionamento();

        return;
    }

    // ============================================================
    public static function listar_tipo_material()
    {
        $db = new Database;
        $resultado = $db->select("SELECT * FROM marca_material");

        return $resultado;
    }

    // ============================================================
    public static function listar_material()
    {
        $db = new Database;
        $resultado = $db->select("SELECT * FROM material");

        return $resultado;
    }

    // ============================================================
    public static function validar_requisicao($quant, $id)
    {

        // $db = new Database;
        // $quant_BD = $db->select("SELECT * FROM material WHERE id_material = $id");
        // $resultado = ($quant_BD[0]-> quantidade)- $quant;
        // // // echo($resultado);
        // // // var_dump($quant_BD) ;

        // $parametros = [
        //     ":quantidade"       =>        $resultado ,
        //     ":id"               =>          $id
        // ];

        // echo $parametros[":quantidade"];
        // // $db = new Database;
        // $db->update("UPDATE material SET quantidade = :quantidade
        // WHERE id_material = :id", $parametros);

    }
}
