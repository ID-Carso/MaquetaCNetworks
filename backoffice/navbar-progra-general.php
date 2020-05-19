<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'scripts.php';
    include
        'styles.php';
    ?>

</head>

<body>
    <div class="navbar-progra d-flex align-items-center justify-content-center mt-5">
        <img src="./images/arrow-gray.svg" alt="flecha" class="arrow-progra arrow-progra-left">
        <!--<span class="p-3 arrow arrow-left">
            < </span>-->
        <div class="navbar-progra-item navbar-progra-item-border navbar-progra-active navbar-canal-claro" navbar-index="1" rel="navbar-prev-canal-claro">
            <div class="navbar-progra-item-container ml-3 mr-3">
                <p class="py-2 px-3 mb-0 a-text-regular-blacktwo">CANAL CLARO</p>

            </div>

        </div>

        <div class="navbar-progra-item navbar-progra-item-border  navbar-sinopsis" navbar-index="2" rel="navbar-prev-sinopsis">
            <div class="navbar-progra-item-container ml-3 mr-3">
                <p class="a-text-regular-blacktwo py-2 px-3 mb-0">SINÓPSIS</p>
            </div>

        </div>


        <div class="navbar-progra-item navbar-progra-item-border  navbar-programacion" navbar-index="3" rel="navbar-prev-programacion">
            <div class="navbar-progra-item-container ml-3 mr-3">
                <p class="a-text-regular-blacktwo py-2 px-3 mb-0">PROGRAMACIÓN</p>
            </div>

        </div>


        <div class="navbar-progra-item navbar-home" navbar-index="4" rel="navbar-prev-home">
            <div class="navbar-progra-item-container ml-3 mr-3">
                <p class="a-text-regular-blacktwo py-2 px-3 mb-0">HOME</p>
            </div>

        </div>

        <img src="./images/arrow-gray.svg" alt="flecha" class="arrow-progra arrow-progra-right">
        <!--<span class="p-3 arrow arrow-right">><span>-->
    </div>
    <div>

    </div>
    <div id="prev-programacion-general">

    </div>

</body>

</html>