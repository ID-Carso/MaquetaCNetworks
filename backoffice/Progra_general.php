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
       showHeader($nameButton, 1);
        ?>
        <div class="justify-content-center centro mx-auto position-title">
        <span class="titulo">PROGRAMACIÓN GENERAL <br> DEL </span>
        <span class="titulo-rojo">1ERO DE OCTUBRE-1ERO DE NOVIEMBRE</span>
        </div>
        <div class=" mr-5 float-right position-zona">
        <label class="btn-zona">Zona horaria  <img src="../images/paises/chile.svg" class="Icon_paises1" /></label> 
        </div>
        <nav class="navbar-expand-sm  mt-2 position-nav">
        <ul class="navbar-nav">
      <li class="nav-item ">
        <button class="btn-menu-select">Canal Claro</button>  
        </li>
        <li class="nav-item sp">
        <button class="btn-menu-all">Concert Channel</button>  
        </li>
      <li class="nav-item sp">
          <button class="btn-menu-all">Claro Cinema</button>
          </li>
      <li class="nav-item sp">
          <button class="btn-menu-inac">Nuesta Visión</button>
          </li>
      <li class="nav-item sp ">
          <button class="btn-menu-inac">Claro Sport</button>
          </li>
      <li class="nav-item sp">
          <button class="btn-menu-all"> Home</button>
         </li>
    </ul>
</nav>
      <div class="mt-3 ml-5"> <span class="titulo-negrito">Última edición :</span>
      <label class=" titulo-light separacion"> septiembre 17 2019 </label>
      <label class="titulo-light">18:33:25</label>
    </div>
    <div class="float-right mr-5 ali">
        <span class="titulo-negrito">Por :</span><label class=" titulo-light separacion">Antonio López Pérez </label> <label class="titulo-light">Usuario editor</label>
    </div>
    <div class=" float-right mt-2 ml-btn  mr-5 ">
    <label class="btn-grilla mr-3">Grilla</label> 
        <label class="btn-landing ">Landing</label>
    </div>
    <div class=" float-left ml-5 ali" >
        <label class="btn-cargar mr-4"id="file">  Cargar archivos</label>  
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
        <li class="caption " style="display:block">
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
    </div>
</div>
<div class="contenedor ml-5">
    <div class="contenedor-columna">
        <div id="agregar" class="btn-crear mt-2 ml-2"><span class="signo"><p class="text-crea">Crear nueva entrada</p></span></div>
    </div>
</div>

    </main>
</body>
</html>
