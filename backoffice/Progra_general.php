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
      <?
      include 'Menu.php';
      ?>
    <div class=" float-left ml-5 ali" >
        <label class="btn-cargar mr-4"id="file" onClick="Verarchi()"> Cargar archivos</label>  
    </div>
    <div class="ml-2 ">
    <div class=" slidershow ali1">
        <ul class="slider">
        <li class="caption">
      <p class="separacion"> OCTUBRE</p>
    </li>
    <li class="caption">
      <p>NOVIEMBRE</p>
    </li>
        </ul>
        <div class="left">
          <!--  <span><img src="./images/chevron-left-solid.svg" alt="" style="widht:1%"></span>-->
        </div>
        <div class="right">
          <!--  <span><img src="./images/chevron-left-solid.svg" alt="" style="widht:1%"></span> -->
        </div>
        
    </div>
    <div class=" slidershow ali1 m-slider">
        <ul class="slider">
        <li class="caption1 " style="display:block">
      <p class="separacion">MARTES 5</p>
    </li>
    <li class="caption">
      <p>NOVIEMBRE</p>
    </li>
        </ul>
        <div class="left">
          <!--  <span><img src="./images/chevron-left-solid.svg" alt="" style="widht:1%"></span>-->
        </div>
        <div class="right">
          <!--  <span><img src="./images/chevron-left-solid.svg" alt="" style="widht:1%"></span> -->
        </div>
        
    </div>
    </div>
  
   <div id="rempla">
    <div  id="tb1"class="contenedor-tabla  ml-5">
    <div class="contenedor-fila">
        <div class="contenedor-columna title-table">
            <span> Entrada</span>
         </div>
        <div class="contenedor-columna title-table">
             <span>Estado</span>
        </div>
        <div class="contenedor-columna title-table">
            <span>Alerta</span>
        </div>
        <div class="contenedor-columna title-table">
            <span> Seleccionar</span>
         </div>
        <div class="contenedor-columna title-table">
             <span>Program Title Original</span>
        </div>
        <div class="contenedor-columna title-table">
            <span>Programar publicación</span>
        </div>
        <div class="contenedor-columna title-table">
            <span>Periodicidad</span>
         </div>
        <div class="contenedor-columna title-table">
             <span>Establecer en Home</span>
        </div>
        <div class="contenedor-columna title-table">
            <span>Establecer en landing</span>
        </div>
        <div class="contenedor-columna title-table">
            <span> Imagenes</span>
         </div>
         <div class="contenedor-columna title-table">
             <span>Schedule Item Date Time</span>
        </div>
        <div class="contenedor-columna title-table">
             <span>Schedule Item Long Date</span>
        </div>
        <div class="contenedor-columna title-table">
        <span>Schedule Item Long Time< (GMT)</span>
        </div>
        <div class="contenedor-columna title-table">
             <span>Estimated Schedule Item Duration</span>
        </div>
        <div class="contenedor-columna title-table">
            <span>Program Year Produced</span>
        </div>
        <div class="contenedor-columna title-table">
            <span>Program Genre List</span>
         </div>
        <div class="contenedor-columna title-table">
             <span>Program Title Alternate </span>
        </div>
        <div class="contenedor-columna title-table">
        <span>Program Episode Season</span>
        </div>
        <div class="contenedor-columna title-table">
        <span>Program Episode Number</span>
        </div>
        <div class="contenedor-columna title-table">
             <span>Synopsis</span>
        </div>
        <div class="contenedor-columna title-table">
            <span>Schedule Item Rating Code</span>
        </div>
        <div class="contenedor-columna title-table">
            <span>Scheduled Version SUBBED (1=Yes/0=No)</span>
         </div>
        <div class="contenedor-columna title-table">
             <span>Scheduled Version DUBBED (1=Yes/0=No)</span>
        </div>
        <div class="contenedor-columna title-table">
        <span>Audio 5.1 available
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
<div class="contenedor ml-5">
    <div class="contenedor-columna">
        <div id="agregar" class="btn-crear mt-2 ml-2"><span class="signo"><p class="text-crea">Crear nueva entrada</p></span></div>
    </div>
</div>
</div>
    </main>
</body>
</html>
