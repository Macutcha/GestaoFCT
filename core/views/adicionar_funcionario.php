<?php

use core\models\Departamento;

$cargos = Departamento::listar_cargo();
?>
<main class="Main">
    <section>

        <h1>Adicionar Funcionario</h1>
        <form action="?a=adicionar_funcionario" method="post">
            <div>
                <?php if (isset($_SESSION['erro'])) : ?>
                    <?= $_SESSION['erro'] ?>
                    <?php unset($_SESSION['erro']); ?>
                <?php endif; ?>

            </div>

            <!--  -->
            <label for="nome_funcionario"> Nome do Funcionario</label>
            <input type="text" id="nome_funcionario" name="nomeFuncionario" placeholder="Nome do funcionario">

            <!--  -->
            <label for="">Cargo</label>
            <select name="cargo" id="">
                <option value="Docente">Cargos</option>
                <?php foreach ($cargos as $cargo) : ?>
                    <option value=" <?= $cargo->cargo ?> "> <?= $cargo->cargo ?> </option>
                <?php endforeach; ?>
            </select>

            <!--  -->
            <button> Add Funcionario</button>

        </form>
    </section>

</main>