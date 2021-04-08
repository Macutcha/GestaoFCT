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
    public static function validar_requisicao($id, $Quant_Equipamento)
    {
        $id = $id;
        $db = new Database;
        $resultados = $db->select("SELECT * FROM material WHERE id_material=$id");
        foreach ($resultados as $resultado) {
            $quantRequisitada = $resultado->quantidade;
        }

        $parametros = [
            ":quantidade"       =>        $quantRequisitada,
            ":id"               =>          $id
        ];

        // Verifica se os valor da quantidade de DB e maior que 0 e se a Subtraccao nao e inferior a 0
        if ($quantRequisitada <= 0) {
            $_SESSION["equip_pouco"] = "A Quantidade de Equipamento e Inferior";
        } else if (($quantRequisitada - $Quant_Equipamento) < 0) {
            $_SESSION["equip_pouco"] = "A Quantidade de Equipamento e Inferior";
        } else {
            $db->update("UPDATE material SET quantidade = :quantidade -$Quant_Equipamento
        WHERE id_material = :id", $parametros);
        }

        
    }
}
