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
    </main>
</body>
</html>