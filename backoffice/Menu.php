<?php
session_start();
if (!isset($_SESSION["session"])) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claro Networks</title>
    <?php
    include 'scripts.php';
    include 'styles.php';
    ?>
    <script src="./js/admin.js" defer></script>
</head>

<body>
    <main>
        <?php
        $nameButton = "Regresar a Administrar sitio";
        // $nameSection = "Home";
        include 'header-bo.php';
        showHeader($nameButton, 1, $_SESSION["name_user"], $_SESSION["rol_id"]);
        ?>
        <div class="justify-content-center centro mx-auto position-title">
            <span class="text-titulo">PROGRAMACIÓN GENERAL <br> DEL </span>
            <span class="text-titulo-rojo">1ERO DE OCTUBRE - 1ERO DE NOVIEMBRE</span>
        </div>
        <div class=" mr-5 d-flex float-right position-zona">
            <button class="btn-zona zona">Zona horaria <img src="./images/paises/chile.svg" class="Icon_paises1" /></button>
        </div>
        <nav class="d-flex col-xl-12 navbar-expand-sm justify-content-center position-nav">
            <ul class="d-flex justify-content-center navbar-nav">
                <li class="nav-item br-r ">
                    <button class=" btn-menu-select  menu bn-nav">Canal Claro</button>
                    <img src="./images/paises/chile.svg" alt="" class="subimage">
                </li>
                <li class="nav-item br-r">
                    <button class="btn-menu-all  text-menu-selec bn-nav ">Concert Channel</button>
                </li>
                <li class="nav-item br-r">
                    <button class="btn-menu-all   text-menu-selec bn-nav">Claro Cinema</button>
                </li>
                <li class="nav-item br-r">
                    <button class="btn-menu-inac  text-menu-selec">Nuesta Visión*</button>
                </li>
                <li class="nav-item br-r ">
                    <button class="btn-menu-inac text-menu-selec">Claro Sport*</button>
                </li>
                <li class="nav-item ">
                    <button class="btn-menu-all  text-menu-selec bn-nav"> Home</button>
                </li>
            </ul>
        </nav>
        <div class=" ml-5"> <span class="zona">Última edición : </span>
            <label class=" text-menu-selec separacion"> Septiembre 17 2019 </label>
            <label class="text-menu-selec">18:33:25</label>
        </div>
        <div class="float-right mb-2 mr-5 ali">
            <span class="zona">Por : </span><label class="text-menu-selec separacion"><span> Antonio López Pérez</span> </label> <label class="text-menu-selec">Usuario editor</label>
        </div>
        <div class="d-flex float-right mt-2 ml-btn mb-5  mr-5 ">
            <button class="btn-grilla  text-grilla mr-3 " id="btn-grilla" onClick="grilla()"><span>Grilla</span></button>
            <button class="btn-landing  text-landing" id="btn-landing"><span>Landing</span></button>
        </div>
        <div id="bodymenu">
            <?php
            include 'Progra_general.php';
            ?>
        </div>
    </main>

</body>

</html>