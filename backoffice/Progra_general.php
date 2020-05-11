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
        include 'Menu.php';
        ?>
        <div class=" float-left ml-5  mb-5 mt-4 ">
            <button class="btn-cargar centro mr-4" id="file" onClick="Verarchi()"><span class="text-crea"><img src="./images/clip.svg" alt="" class="ml-1 mr-1">Cargar archivos</span></button>
        </div>
        <div class=" d-flex ml-5 pl-2 p1 ">
            <div id="meses" class="carousel slide ali1" >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p class=" separacion1 flex-caption ml-5 progra-month"></p>   
                     </div>
                   
                </div>
                <a class="carousel-control-prev" href="#meses">
                <img src="./images/arrow-light.svg" alt="" class="mr-4 arrow-r180 arrow-left">
                </a>
                <a class="carousel-control-next" href="#meses">
                <img src="./images/arrow-dark.svg" alt="" class="pr-5 arrow-right">
                </a>

            </div>
            <!--begin-->
            <div id="dias" class="carousel slide ali1 m-slider">

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p class="separacion1 flex-caption ml-4 day" ></p>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#dias">
                <img src="./images/arrow-light.svg" alt="" class=" mr-5 pl-3 arrow-r180 arrow-left">
                </a>
                <a class="carousel-control-next" href="#dias">
                <img src="./images/arrow-dark.svg" alt="" class="mr-5 arrow-right">
                </a>
            </div>
        </div>
        <div class=" d-flex calendario ">
            <img src="./images/calendario.svg" class="" alt="">
        </div>
        <!--end-->

        <div id="rempla">
            <div id="tb1" class="contenedor-tabla  ml-5 pr-5">
                <div class="contenedor-fila">
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public"> Entrada</span>
                    </div>
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public">Estado</span>
                    </div>
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public">Alerta</span>
                    </div>
                    <div class="contenedor-columna  centro title-table">
                        <span class="text-public"> Seleccionar</span>
                    </div>
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public">Program Title Original</span>
                    </div>
                    <div class="contenedor-columna  centro title-table">
                        <span class="text-public">Programar publicación</span>
                    </div>
                    <div class="contenedor-columna  centro title-table">
                        <span class="text-public">Periodicidad</span>
                    </div>
                    <div class="contenedor-columna  centro title-table">
                        <span class="text-public">Establecer en Home</span>
                    </div>
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public">Establecer en landing</span>
                    </div>
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public"> Imagenes</span>
                    </div>
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public">Schedule Item Date Time</span>
                    </div>
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public">Schedule Item Long Date</span>
                    </div>
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public">Schedule Item Long Time< (GMT)</span> </div> <div class="contenedor-columna centro title-table">
                                <span class="text-public">Estimated Schedule Item Duration</span>
                    </div>
                    <div class="contenedor-columna  centro title-table">
                        <span class="text-public">Program Year Produced</span>
                    </div>
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public">Program Genre List</span>
                    </div>
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public">Program Title Alternate </span>
                    </div>
                    <div class="contenedor-columna  centro title-table">
                        <span class="text-public">Program Episode Season</span>
                    </div>
                    <div class="contenedor-columna  centro title-table">
                        <span class="text-public">Program Episode Number</span>
                    </div>
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public">Synopsis</span>
                    </div>
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public">Schedule Item Rating Code</span>
                    </div>
                    <div class="contenedor-columna  centro title-table">
                        <span class="text-public">Scheduled Version SUBBED (1=Yes/0=No)</span>
                    </div>
                    <div class="contenedor-columna centro title-table">
                        <span class="text-public">Scheduled Version DUBBED (1=Yes/0=No)</span>
                    </div>
                    <div class="contenedor-columna  centro title-table">
                        <span class="text-public">Audio 5.1 available
                            (1=Yes/0=No)</span>
                    </div>
                </div>
                <div class="contenedor-fila">
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                    <div class="contenedor-columna"></div>
                </div>
            </div>
            <div class="contenedor mb-5 ml-5 pr-5">
                <div class="contenedor-columna">
                    <div id="agregar" class="btn-crear centro  ml-2"><span class="signo">
                            <p class="text-crea pd-10">Crear nueva entrada</p>
                        </span></div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>