


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
    <div  id="tb1"class="contenedor-tabla  ml-5">
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
        <div class="contenedor-columna centro"></div>
        <div class="contenedor-columna centro"></div>
        <div class="contenedor-columna centro"></div>
        <div class="contenedor-columna centro">
            <input type="radio" name="select" id="selecciona" style="display: inline-block;">
        </div>
        <div class="contenedor-columna centro">
            <label class="program-original">Terminator</label>
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

                  <div class=" d-flex fechas mt-2">
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
            <div>
            <input type="radio" name="establecer"  style=" display:inline-block;">

            </div>
            <div class="vigencia">          
                <label class="text-public">Vigencia en home</label>
            </div>
        </div>
        <div class="contenedor-columna centro">
            <div>
            <input type="radio" name="establecer"  style=" display:block;" class="posilan"checked>
            <label class="text-lan">No te pierdas</label>
            </div>
            <div>
            <input type="radio" name="establecer"style="display:block;" class="posi1" checked>
            <label class="text-lan">Sólo por canal claro</label>
            </div>
            <div class="vige-lan">
            <label class="text-public">Vigencia en landing</label>
            </div>
        </div>
        <div class="contenedor-columna centro">
            <div class="image-ta"></div>
        </div>
        <div class="contenedor-columna centro">
            <div class="schedule-date">
                <label >7/1/2019 11:00:00</label>
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label >1-Jul-19</label>
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label >11:00:00 AM</label>
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label >12:07:19 AM</label>
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label >1982</label>
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label >Animación, Cultura, Series</label>
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label >Cantinflas y sus amigos: James Watt</label>
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label >3</label>
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label >28</label>
            </div>
        </div>
        <div class="contenedor-columna centro ">
        <div class="schedule-date">
                <label >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </label>
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label >PG-13</label>
            </div>
        </div>
        <div class="contenedor-columnac centro">
        <div class="schedule-date">
                <label >0</label>
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label >0</label>
            </div>
        </div>
        <div class="contenedor-columna centro">
        <div class="schedule-date">
                <label >0</label>
            </div>
        </div>
    </div>
</div>
<div class="contenedor ml-5">
<div class="contenedor-columna centro">
        <div id="agregar" class="btn-crear centro mt-2 ml-2"><span class="signo"><p class="text-crea pd-10">Crear nueva entrada</p></span></div>
    </div>
</div>
</div>
    </main>
</body>
</html>