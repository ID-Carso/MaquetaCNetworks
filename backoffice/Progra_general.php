<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claro Networks</title>
    <script src="./js/admin.js" defer></script>
</head>
<style>
#inp_programing{
  display: none;
}

</style>
<body>
    <main>
       
        <div id="grilla">
        <div class="  ml-5  mb-5  ">
            <input id="inp_programing" type="file" >
            <label for="inp_programing" class="btn-cargar" style="display: flex; align-items:center;position: absolute;padding-left:.2rem"><span class="  text-crea"><img src="./images/clip.svg" alt="" class=" mr-2">Cargar archivos</span></label>
            <!--
            <button class="btn-cargar " id="file" ><span class=" d-flex align-items-center text-crea"><img src="./images/clip.svg" alt="" class=" mr-2">Cargar archivos</span></button>
             -->
        </div>
        <div class=" d-flex ml-5 pl-2 ">
            <div id="meses" class="d-flex align-items-center mb-3 br-r " >
                <img src="./images/arrow-light.svg" alt="" class=" mr-4 arrow-r180 arrow-left">          
                        <p class=" flex-caption mb-0 progra-month"></p>   
                <img src="./images/arrow-dark.svg" alt="" class=" ml-4 arrow-right">

            </div>
            <div id="dias" class="d-flex align-items-center mb-3 br-r " >
                <img src="./images/arrow-light.svg" alt="" class=" mr-4 arrow-r180 arrow-left">          
                        <p class=" flex-caption mb-0 day"></p>   
                <img src="./images/arrow-dark.svg" alt="" class=" ml-4 arrow-right">

            </div>            
            <img src="./images/calendario.svg" class="ml-2 mb-3" alt="">
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
                <div class="contenedor-fila" id="programacion">
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
                    <div id="agregar" class="d-flex align-items-center btn-crear signo justify-content-center  ml-2">
                            <span class="text-crea">Crear nueva entrada</span>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </main>
</body>

</html>