<?php


namespace core\models;

use core\class\Database;
use core\class\Gestao;

class Material
{
    public static function AddMaterialBd($tipo_material, $marca, $referencia)
    {
        $parametros = [
            ":equipamento"           =>               $tipo_material,
            ":marca"                   =>               $marca,
            ":referencia"              =>               $referencia
        ];
        $db = new Database;
        $db->insert(
            "
        INSERT INTO equipaento VALUES(0, :referencia, :marca, :tipo_material)",
            $parametros
        );

        $_SESSION["certo"] = "Valpor Adicionado na BD";
        Gestao::redicionamento();

        return;
    }

    // ============================================================
    public static function listar_()
    {
        $db = new Database;
        $resultado = $db->select("SELECT * FROM marca_material");

        return $resultado;
    }

    // ============================================================
    public static function listar_equipamento()
    {
        $db = new Database;
        $resultado = $db->select("SELECT * FROM equipamento");

        return $resultado;
    }

    // ============================================================
    public static function validar_requisicao($id, $Quant_Equipamento)
    {
        $id = $id;
        $db = new Database;

        $resultados = $db->select("SELECT * FROM equipamento WHERE id_equipamento=$id");

        foreach ($resultados as $resultado) {
            $quantRequisitada = $resultado->quantidade;
        }

        echo $quantRequisitada;
        $parametros_activo = [
            ":id"               =>          $id
        ];
        $parametros = [
            ":quantidade"       =>        $quantRequisitada,
            ":id"               =>          $id
        ];

        // Verifica se os valor da quantidade de DB e maior que 0 e se a Subtraccao nao e inferior a 0
        // if ($quantRequisitada <= 0) {

        //     $_SESSION["equip_pouco"] = "A Quantidade de Equipamento e Inferior";
        // } else if (($quantRequisitada - $Quant_Equipamento) < 0) {

        //     if (!Material::estado_equipamento($id)) {
        //         $db->update("UPDATE equipamento SET activo = 0 WHERE id_equipamento = :id", $parametros_activo);
        //     }

        //     $_SESSION["equip_pouco"] = "A Quantidade de Equipamento e Inferior";
        // } else {

        //     $db->update("UPDATE equipamento SET quantidade = :quantidade -$Quant_Equipamento WHERE id_equipamento = :id", $parametros);
        //     if (!Material::estado_equipamento($id)) {
        //         $db->update("UPDATE equipamento SET activo = 0 WHERE id_equipamento = :id", $parametros_activo);
        //     }
        // }
    }

    // ============================================================
    public static function estado_equipamento($id, $quatidade_equipamento = null)
    {
        $activo = true;
        $db = new Database;

        $resultados = $db->select("SELECT * FROM equipamento WHERE id_equipamento=$id");

        foreach ($resultados as $resultado) {
            $quantRequisitada = $resultado->quantidade;
        }

        if ($quantRequisitada <= 0) {
            $activo = false;
        } else if ( $quantRequisitada <-1) {
            $activo = false;
        } else {
            $activo = true;
        }

        return $activo;
    }
    // ============================================================


    // ============================================================


}
