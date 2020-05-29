<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'scripts.php';
    include  'styles.php';
    ?>
</head>

<body>
    <main>

        <div id="menu">
            <div class="float-right mr-5 margin-top-por">

                <div>
                    <img src="./images/mobile.svg" class="a-prev-image ml-3 mr-3" alt="mobile" id="prev-mobile">
                    <img src="./images/tablet.svg" class="a-prev-image" alt="tablet" id="prev-tablet">
                    <img src="./images/pc.svg" class="a-prev-image ml-3" alt="pc" id="prev-desktop">
                </div>
                <p class="a-text-black-semibold a-prev-title prev">PREVISUALIZAR</p>
            </div>
            <div class="clearfix"></div>
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

                    <div class="navbar-progra-item navbar-progra-item-border navbar-sinopsis" navbar-index="2" rel="navbar-prev-sinopsis">
                        <div class="navbar-progra-item-container ml-3 mr-3">
                            <p class="a-text-regular-blacktwo py-2 px-3 mb-0">SINÓPSIS</p>
                        </div>

                    </div>


                    <div class="navbar-progra-item navbar-progra-item-border navbar-programacion navbar-prev-programacion" navbar-index="3" rel="navbar-prev-programacion">
                        <div class="navbar-progra-item-container ml-3 mr-3">
                            <p class="a-text-regular-blacktwo py-2 px-3 mb-0">PROGRAMACIÓN</p>
                        </div>

                    </div>


                    <div class="navbar-progra-item navbar-prev-home navbar-home" navbar-index="4" rel="navbar-prev-home">
                        <div class="navbar-progra-item-container ml-3 mr-3">
                            <p class="a-text-regular-blacktwo py-2 px-3 mb-0">HOME</p>
                        </div>

                    </div>

                    <img src="./images/arrow-gray.svg" alt="flecha" class="arrow-progra arrow-progra-right">
                    <!--<span class="p-3 arrow arrow-right">><span>-->
                </div>

            </nav>
            <div class="centro">
                <div class="navbar-progra-content navbar-prev-canal-claro mb-5" id="navbar-prev-canal-claro">
                    <p>Canal Claro</p>
                    <script type="text/javascript" src="../js/lib/easyXDM.min.js"></script>
                    <script>
                        new easyXDM.Socket({
                            remote: "./prev/claro-canal.php",
                            container: "navbar-prev-canal-claro",
                            onMessage: function(message, origin) {
                                console.log(message);
                                this.container.getElementsByTagName("iframe")[0].style.height = message + "px";
                                this.container.getElementsByTagName("iframe")[0].setAttribute("scrolling", "no");
                                this.container.getElementsByTagName("iframe")[0].style.boxShadow = "rgba(0, 0, 0, 0.5) -1px -1px 17px 9px";

                            }
                        });
                    </script>
                </div>
            </div>
            <div class="navbar-progra-content" id="navbar-prev-sinopsis">
                <div id="prev-sinopsis">
                    <div class="float-left ml-5">
                        <div><input type="radio" id="1" value="" disabled /> <label for="1" class="a-btn-check"></label><span class=" ml-2 a-text-grey">Guardar cambios</span>
                            <input type="radio" id="2" value="" disabled /> <label for="2" class="ml-5 a-btn-check"></label><span class=" ml-2 a-text-grey">No guardar cambios</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mx-auto shadow mt-5  mb-5 content-table">
                        <div class="contenedor-fila">
                            <div class="contenedor-columna centro program titletable">
                                <span class="a-text-white-regular a-text-prev">Programa</span>
                            </div>
                            <div class="contenedor-columna centro channel titletable">
                                <span class="a-text-white-regular a-text-prev">Canal</span>
                            </div>
                            <div class="contenedor-columna centro channel titletable">
                                <span class="a-text-white-regular a-text-prev">Acciones</span>
                            </div>
                            <div class="contenedor-columna centro channel  titletable">
                                <span class="a-text-white-regular a-text-prev">Revisión</span>
                            </div>
                        </div>
                        <div class="contenedor-fila">
                            <div class="contenedor-columna">
                                <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                            </div>
                            <div class="contenedor-columna centro">
                                <span class="a-text-medium-black text-normal ">Canal Claro</span>
                            </div>
                            <div class="contenedor-columna centro">
                                <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi "></input>
                            </div>
                            <div class="contenedor-columna centro ">
                                <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
                                    <input type="checkbox">
                                    <span class="checkmark1"></span>
                                </label>
                            </div>
                        </div>
                        <div class="contenedor-fila">
                            <div class="contenedor-columna">
                                <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                            </div>
                            <div class="contenedor-columna centro">
                                <span class="a-text-medium-black  text-normal ">Canal Claro</span>
                            </div>
                            <div class="contenedor-columna centro">
                                <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi "></input>
                            </div>
                            <div class="contenedor-columna centro ">
                                <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
                                    <input type="checkbox">
                                    <span class="checkmark1"></span>
                                </label>
                            </div>
                        </div>
                        <div class="contenedor-fila">
                            <div class="contenedor-columna">
                                <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                            </div>
                            <div class="contenedor-columna centro ">
                                <span class="a-text-medium-black text-normal ">Canal Claro</span>
                            </div>
                            <div class="contenedor-columna centro ">
                                <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi"></input>
                            </div>
                            <div class="contenedor-columna centro">
                                <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
                                    <input type="checkbox">
                                    <span class="checkmark1"></span>
                                </label>
                            </div>
                        </div>
                        <div class="contenedor-fila">
                            <div class="contenedor-columna">
                                <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                            </div>
                            <div class="contenedor-columna centro ">
                                <span class="a-text-medium-black text-normal ">Canal Claro</span>
                            </div>
                            <div class="contenedor-columna centro">
                                <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi"></input>
                            </div>
                            <div class="contenedor-columna centro">
                                <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
                                    <input type="checkbox">
                                    <span class="checkmark1"></span>
                                </label>
                            </div>
                        </div>
                        <div class="contenedor-fila">
                            <div class="contenedor-columna">
                                <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                            </div>
                            <div class="contenedor-columna centro ">
                                <span class="a-text-medium-black text-normal ">Canal Claro</span>
                            </div>
                            <div class="contenedor-columna centro">
                                <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi"></input>
                            </div>
                            <div class="contenedor-columna centro">
                                <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
                                    <input type="checkbox">
                                    <span class="checkmark1"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="centro ">
                <div class="navbar-progra-content mb-5" id="navbar-prev-programacion">
                    <p>Programación</p>

                </div>
            </div>
            <div class="centro ">
                <div class="navbar-progra-content mb-5" id="navbar-prev-home">

                    <p>Home</p>
                </div>


            </div>
        </div>

    </main>

</body>

</html>