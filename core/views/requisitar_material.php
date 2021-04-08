<?php

use core\models\Causa;
use core\models\Material;


$materias = Material::listar_material();
$causas = Causa::listar_causa();

?>

<main class="Main">
    <section>

        <?php if (isset($_SESSION["equip_pouco"])) : ?>
            <div>
                <?= $_SESSION["equip_pouco"]; ?>
                <?php unset($_SESSION["equip_pouco"]); ?>
            </div>
        <?php endif; ?>
        <table>
            <tr>
                <th>id</th>
                <th>Material</th>
                <th>Referenci</th>
                <th>quantidade</th>
            </tr>
            <?php foreach ($materias as $material) : ?>
                <tr>
                    <td> <?= $material->id_material ?> </td>
                    <td> <?= $material->tipo_material ?> </td>
                    <td> <?= $material->referencia_material ?> </td>
                    <td> <?= $material->quantidade ?> </td>
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
                            <?php foreach ($materias as $material) : ?>
                                <option value="<?= $material->id_material ?>"><?= $material->tipo_material ?></option>
                            <?php endforeach; ?>
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

            <button>Requisitar</button>
        </form>
    </section>

</main>