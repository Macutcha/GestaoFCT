<?php

use core\models\Material;

$marca_materiais = Material::listar_tipo_material();
?>
<main class="Main">
    <section>

        <h1>Adicionar Material</h1>
        <form action="?a=validar_equipamento" method="post">
            <div>
                <?php if (isset($_SESSION['erro'])) : ?>
                    <?= $_SESSION['erro'] ?>
                    <?php unset($_SESSION['erro']); ?>
                <?php endif; ?>

            </div>
            <label for="">Tipo de Material</label>
            <input type="text" name="Tipo_Material">

            <!--  -->
            <label for="">Marca</label>
            <select name="Marca" id="" name="Marca">
                <option value="fff">gghggg</option>
            </select>

            <!--  -->
            <label for="">Referencia</label>
            <input type="text" name="Referencia">

            <!--  -->
            <button>Add Material</button>
        </form>
    </section>

</main>