<!DOCTYPE html>
<html lang="en">

<head>
    <script src="./js/main.js?t=<?php echo time(); ?>" type="module"></script>
    <script src="./js/admin.js" defer></script>
</head>

<body>
    <main>

        <div id="menu">
            <!--  <div class="float-right mr-5 margin-top-por">
                    
                    <div>
                        <img src="./images/mobile.svg" class="a-prev-image ml-3 mr-3" alt="mobile" id="prev-mobile">
                        <img src="./images/tablet.svg" class="a-prev-image" alt="tablet" id="prev-tablet">
                        <img src="./images/pc.svg" class="a-prev-image ml-3" alt="pc" id="prev-desktop">
                    </div>
                    <p class="a-text-black-semibold a-prev-title prev">PREVISUALIZAR</p>
    </div>-->
            <nav class="d-flex col-xl-11 navbar-expand-sm justify-content-center mb-5" id="option">
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

            </nav>
            <div class="navbar-progra-content" id="navbar-prev-canal-claro">
                <p>Canal Claro</p>
            </div>
            <div class="navbar-progra-content" id="navbar-prev-sinopsis">
                <p>Sinopsis</p>
            </div>
            <div class="navbar-progra-content" id="navbar-prev-programacion">
                <p>Programación</p>
            </div>
            <div class="navbar-progra-content" id="navbar-prev-home">
                <p>Home</p>
            </div>

        </div>

    </main>

</body>

</html>