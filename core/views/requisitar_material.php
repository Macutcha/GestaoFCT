<?php

use core\models\Causa;
use core\models\Material;


$materias = Material::listar_material();
$causas = Causa::listar_causa();

?>

<main>
    <table>
        <tr>
            <th>id</th>
            <th>Material</th>
            <th>Referenci</th>
            <th>quantidade</th>
            <th>Selecionar Equipamento</th>
        </tr>
        <?php foreach ($materias as $material) : ?>
            <tr>
                <td> <?= $material->id_material ?> </td>
                <td> <?= $material->tipo_material ?> </td>
                <td> <?= $material->referencia_material ?> </td>
                <td> <?= $material->quantidade ?> </td>
                <td> <input type="checkbox" name="" id=""></td>
            </tr>
        <?php endforeach; ?>


    </table>
    <form action="?a=sub_requisicao" method="post">

        <table>
            <tr>
                <th>Equipamento</th>
                <th>Marca</th>
                <th>Quantidade</th>
                <th>Motivo</th>
            </tr>
            <tr>
                <td>
                    <select name="Equipamento" id="">
                        <option value="<?= $material->id_material ?>"><?= $material->tipo_material ?></option>
                    </select>
                </td>
                <td>
                    <select name="Marca_Equipamento" id="">
                        <option value=""> <?= $material->marca ?> </option>
                    </select>
                </td>
                <td><input type="number" name="Quant_Equipamento" id="" placeholder="Quantidade"></td>
                <td>
                    <select name="Causa_Equipamento" id="id_causa">
                        <?php foreach ($causas as $causa) : ?>
                            <option value=""> <?= $causa->causa ?> </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
        </table>
        <!--  -->

        <label for="id_causa">Motivo</label>

        <button>Requisitar</button>
    </form>


</main>