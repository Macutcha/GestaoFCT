<?php

use core\models\Material;

$equipamentos = Material::listar_equipamento();
?>
<main class="Main">
    <section class="main" id="AdicionarEquipamento">
        <div id="cont_ADD_Equipa">
            <header>
                <h1>Adicionar Material</h1>
            </header>

            <form id="ADD_Equipa" action="?a=validar_add_equipamento" method="post">
                <div>
                    <?php if (isset($_SESSION['erro'])) : ?>
                        <?= $_SESSION['erro'] ?>
                        <?php unset($_SESSION['erro']); ?>
                    <?php endif; ?>

                </div>
                <label for="">Equipamento</label>
                <input type="text" name="Tipo_Material">

                <!-- Marca do Equipamento -->
                <label for="">Marca</label>
                <select name="Marca" id="" name="Marca">
                    <?php foreach ($equipamentos as $equipamento) : ?>
                        <option value="fff"><?= $equipamento->marca ?></option>
                    <?php endforeach; ?>
                </select>

                <!-- Referencia do Equipamento -->
                <label for="">Referencia</label>
                <input type="text" name="Referencia">

                

                <!--  -->
                <label for=""></label>
                <button>Add Equipamento</button>


            </form>

        </div>

    </section>

</main>