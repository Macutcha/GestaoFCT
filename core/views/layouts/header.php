<header class="Header" id="struct_header">
    <article id="header">
        <div id="logo">
            <img src="../public/assets/img/logo/logo_uz.jpg" alt="logo_uz.jpg">
        </div>

        <div id="menu">
            <ul>
                <a href="?a=criar_funcionario">
                    <li>Adicionar usuario</li>
                </a>
                <a href="?a=criar_equipamento">
                    <li>Adicionar Equipamento</li>
                </a>
                <a href="?a=requisitar_equipamento">
                    <li>Requisitar Equipamento</li>
                </a>
            </ul>
        </div>
    </article>

</header>



<main id="main_menu">

    <article id="lateral">
        <!-- Titulo -->
        <div>
            <h3><?= NAME ?></h3>
        </div>

        <!-- Liata -->
        <ul>

            <li onclick="mostar_usuario()"> <i class="fas fa-angle-right" ></i> usuario</li>

            <div class="dsp-none" id="gerir_usuario">
                <a href="?a=criar_funcionario">
                    <li> Adicionar usuario</li>
                </a>
            </div>



            <li id="equipamento" onclick="mostar_sub_equipamento()"> <i class="fas fa-angle-right"></i>Equipamento</li>


            <!-- Lista de sub links de Equipamento -->
            <div id="sub_equipamento">
                <a href="?a=criar_equipamento">
                    <li> Adicionar Equipamento</li>
                </a>
                <a href="?a=requisitar_equipamento">
                    <li> Ver Equipamento</li>
                </a><a href="?a=criar_equipamento">
                    <li> </i> Remover Equipamento </li>
                </a>

            </div>

        </ul>
    </article>
</main>