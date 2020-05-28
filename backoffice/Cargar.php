


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
      
   <div id="carga">
    <div  id="tb1"class="contenedor-tabla  ml-5 pr-5">
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
        <span class="text-public">Schedule Item Long Time< (GMT)</span>
        </div>
        <div class="contenedor-columna centro title-table">
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
        <div class="contenedor-columna centro">
        <img src="./images/bin.svg"  class="mx-auto"alt="">
        </div>
        <div class="contenedor-columna centro">
        <img src="./images/pendientes.svg" class="mx-auto" alt=""><br>
        <span class="program-original"> Pendiente de revisión </span>
        </div>
        <div class="contenedor-columna centro"></div>
        <div class="contenedor-columna centro">
            <label class="mg6 checkradio">
            <input type="checkbox">
            <span class="checkmark"></span>
            </label>
        </div>
        <div class="contenedor-columna centro">
            <label class="program-original">Terminator</label>
            <img src="./images/pencil.svg" alt="" class=""class="pencil">
        </div>
        <div class="contenedor-columna centro">
        <div class="yes-no">
                    <input type="radio" name="yes-no" id="si" checked />
                    <label for="si" id="siestado" class="si-estilo">
                      Sí</label>
                    <input type="radio" name="yes-no" id="no" />
                    <label for="no" id="noestado" class="no-estilo">
                      No</label>
                  </div>
                  <img src="./images/pencil.svg" alt=""class="pencil1">

                  <div class=" d-flex fechas ">
                     <label class="date" type=date>7/1/2019</label> <label class="date" type="time">11:00:00</label>
                  </div>
                 
        </div>
        <div class="contenedor-columna centro">
        <div class="periodicidad">
                    <input type="radio" name="si-no" id="yes" checked />
                    <label for="yes" id="siestado" class="si-estilo1">
                      Sí</label>
                    <input type="radio" name="si-no" id="nop" />
                    <label for="nop" id="noestado" class="no-estilo1">
                      No</label>
                  </div> 
        </div>
        <div class="contenedor-columna centro">
        <label class="mg6 checkradio  mb-5">
            <input type="checkbox">
            <span class="checkmark"></span>
            </label>
            <div class="vigencia mt-5">          
                <label class="text-public">Vigencia en home</label>
                <img src="./images/pencil.svg" alt=""class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class=" d-flex mt-3 ml-4"><span class="text-lan ml-5 mtop-8"> No te pierdas</span>
        <label class="checkradio">
            <input type="checkbox">
            <span class="checkmark"></span>
            </label>
        </div>
            <div class="d-flex ml-4"><span class="text-lan ml-5 mtop-8 mb-4"> Solo por canal claro</span>
            <label class="checkradio">
            <input type="checkbox">
            <span class="checkmark"></span>
            </label>
            </div>
            <div class="vige-lan">
            <label class="text-public">Vigencia en landing</label>
            </div>
        </div>
        <div class="contenedor-columna centro">
            <div class="image-ta">
            <img src="./images/pencil.svg" alt=""class="pencil2">
            </div>
        </div>
        <div class="contenedor-columna centro">
            <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small">7/1/2019 11:00:00</label>
                <img src="./images/pencil.svg" alt=""class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small" >1-Jul-19</label>
                <img src="./images/pencil.svg" alt=""class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small" >11:00:00 AM</label>
                <img src="./images/pencil.svg" alt=""class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small" >12:07:19 AM</label>
                <img src="./images/pencil.svg" alt=""class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small" >1982</label>
                <img src="./images/pencil.svg" alt=""class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small">Animación, Cultura, Series</label>
                <img src="./images/pencil.svg" alt="" class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small">Cantinflas y sus amigos: James Watt</label>
                <img src="./images/pencil.svg" alt="" class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small" >3</label>
                <img src="./images/pencil.svg" alt="" class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small">28</label>
                <img src="./images/pencil.svg" alt="" class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro ">
        <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br>eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br>eiusmod tempor incididunt ut labore et dolore magna aliqua.  </label>
                <img src="./images/pencil.svg" alt="" class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small" >PG-13</label>
                <img src="./images/pencil.svg" alt="" class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small" >0</label>
                <img src="./images/pencil.svg" alt="" class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small" >0</label>
                <img src="./images/pencil.svg" alt="" class="pencil">
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label class="a-text-regular-brownishtwo text-small" >0</label>
                <img src="./images/pencil.svg" alt="" class="pencil">
            </div>
        </div>
    </div>
</div>
<div class="contenedor mb-5 ml-5 pr-5">
<div class="contenedor-columna centro">
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