<?php

namespace core\controller;

use core\class\Database;
use core\class\Gestao;
use core\models\Funcionario;
use core\models\Material;
use core\models\Pts;

class Main
{
    public function index()
    {

        Gestao::Layouts([
            'layouts/html_header',
            'layouts/header',
            'inicio',
            'layouts/footer',
            'layouts/html_footer'
        ]);
    }
    // ============================================================
    public function criar_funcionario()
    {
        Gestao::Layouts([
            'layouts/html_header',
            'layouts/header',
            'adicionar_funcionario',
            'layouts/footer',
            'layouts/html_footer'
        ]);
    }

    public function adicionar_funcionario()
    {

        if ($_SERVER["REQUEST_METHOD"] != 'POST') {
            Gestao::redicionamento("criar_funcionario");
        }

        if (!isset($_POST["nomeFuncionario"])) {
            $_SESSION['erro'] = "Um dos Campos nao Existe";
            Gestao::redicionamento("criar_funcionario");
            return;
        }

        if (empty($_POST["nomeFuncionario"]) || empty($_POST["funcao"]) || empty($_POST["cargo"])) {
            $_SESSION['erro'] = "Um dos Campos esta vazio";
            Gestao::redicionamento("criar_funcionario");
            return;
        }

        Funcionario::addFuncionarioBD($_POST["nomeFuncionario"], $_POST["cargo"]);
    }

    // ============================================================
    public function criar_equipamento()
    {

        Gestao::Layouts([
            'layouts/html_header',
            'layouts/header',
            'adicionar_material',
            'layouts/footer',
            'layouts/html_footer'
        ]);
       
    }

    // ============================================================
    // Funcaoq que faz a validacao do formulara de add equipamento
    public function validar_equipamento()
    {
        // Verifica se foi feito um POST
        if ($_SERVER["REQUEST_METHOD"] != 'POST') {
            Gestao::redicionamento("criar_material");
        }

        // Verifica se os campos Existem
        if (
            !isset($_POST["Tipo_Material"]) || !isset($_POST["Marca"])
            || !isset($_POST["Referencia"])
        ) {
            $_SESSION['erro'] = "Um dos Campos nao Existe";
            Gestao::redicionamento("criar_material");
            return;
        }

        // Verifica se os campos existem
        if (empty($_POST["Tipo_Material"]) || empty($_POST["Marca"]) || empty($_POST["Referencia"])) {
            $_SESSION['erro'] = "Um dos Campos esta vazio";
            Gestao::redicionamento("criar_equipamento");
            return;
        }

        // Funcao que addiciona os valores na BD
        Material::AddMaterialBd($_POST["Tipo_Material"], $_POST["Marca"], $_POST["Referencia"]);
    }

    // ============================================================
    public function requisitar_equipamento()
    {
        Gestao::Layouts([
            'layouts/html_header',
            'layouts/header',
            'requisitar_material',
            'layouts/footer',
            'layouts/html_footer'
        ]);
        $a = Material::validar_requisicao(2,1);
    }

    public static function sub_requisicao()
    {
        $id_equipamento = $_POST["Equipamento"];
        $Quant_Equipamento = $_POST["Quant_Equipamento"];
        Material::validar_requisicao($Quant_Equipamento, $id_equipamento);
        Gestao::redicionamento("requisitar_equipamento");
        return;
    }
}
