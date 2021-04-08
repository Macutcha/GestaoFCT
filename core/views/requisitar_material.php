<?php

use core\models\Causa;
use core\models\Material;


$equipamentos = Material::listar_equipamento();
$avarias = Causa::listar_causa();

?>

<main class="Main">
    <section id="requisitar_equipamento">

        <!-- Avaisos -->
        <?php if (isset($_SESSION["equip_pouco"])) : ?>
            <div>
                <?= $_SESSION["equip_pouco"]; ?>
                <?php unset($_SESSION["equip_pouco"]); ?>
            </div>
        <?php endif; ?>

        <!-- Tabela de mostra os equipamentos -->
        <table>
            <tr>
                <th>id</th>
                <th>Material</th>
                <th>Referenci</th>
                <th>quantidade</th>
            </tr>
            <?php foreach ($equipamentos as $equipamento) : ?>
                <tr>
                    <td> <?= $equipamento->id_equipamento ?> </td>
                    <td> <?= $equipamento->equipamento ?> </td>
                    <td> <?= $equipamento->referencia ?> </td>
                    <td> <?= $equipamento->quantidade ?> </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <!-- Formularios de ocoes para equisitar -->
        <form action="?a=sub_requisicao" method="post">

            <table>
                <tr>
                    <th>Equipamento</th>
                    <th>Marca</th>
                    <th>Quantidade</th>
                    <th>Motivo</th>
                </tr>

                <tr>
                    <!-- Tipos de Equipamentos -->
                    <td>
                        <select name="Equipamento" id="">
                            <?php foreach ($equipamentos as $equipamento) : ?>
                                <option value="<?= $equipamento->id_equipamento ?>"><?= $equipamento->equipamento ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>

                    <!-- Marca de Equipamento -->
                    <td>
                        <select name="Marca_Equipamento" id="">
                            <?php foreach ($equipamentos as $equipamento) : ?>
                                <option value=""> <?= $equipamento->marca ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </td>

                    <!-- Quantidade a Requisitar -->
                    <td>
                        <input type="number" name="Quant_Equipamento" id="" placeholder="Quantidade">
                    </td>

                    <!-- Avaria -->
                    <td>
                        <select name="Causa_Equipamento" id="id_causa">
                            <?php foreach ($avarias as $avaria) : ?>
                                <option value=""> <?= $avaria->avaria ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>

            </table>

            <button>Requisitar</button>
        </form>
    </section>

</main>