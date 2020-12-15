<?php

require_once 'App/Model/SelectClient.php';
require_once 'App/Model/Session.php';
$session = new Session;
$session->validateSession();

$name = $_SESSION['name'];
?>

<div class="home-page">
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Aluguel de Bicicletas</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><?php echo $name ?></li>
                    <li><a href="?page=Validate&method=logout">Sair</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <!--<h1><?php echo $name ?></h1>-->

            <ul id="slide-out" class="sidenav sidenav-fixed">
                <li><a href="?page=client">Meus Produtos</a></li>
                <li><a href="#!" style="background-color:#696969;">Lista de Produtos para Alugar</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <div class="container center-align">
                <h1>Lista</h1>

                <?php
                    $list = new SelectClientConnect;
                    $list->selectClientDatabase();
                ?>

            </div>

        </section>
    </main>
</div>