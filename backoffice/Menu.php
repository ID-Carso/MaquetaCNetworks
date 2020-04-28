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
        <span class="text-titulo">PROGRAMACIÓN GENERAL <br> DEL </span>
        <span class="text-titulo-rojo">1ERO DE OCTUBRE-1ERO DE NOVIEMBRE</span>
        </div>
        <div class=" mr-5 float-right position-zona">
        <label class="btn-zona zona">Zona horaria  <img src="./images/paises/chile.svg" class="Icon_paises1" /></label> 
        </div>
        <nav class="navbar-expand-sm  mt-2 position-nav">
        <ul class="navbar-nav">
      <li class="nav-item ">
        <button class="btn-menu-select menu">Canal Claro</button>  
        </li>
        <li class="nav-item sp">
        <button class="btn-menu-all text-menu-selec">Concert Channel</button>  
        </li>
      <li class="nav-item sp">
          <button class="btn-menu-all text-menu-selec">Claro Cinema</button>
          </li>
      <li class="nav-item sp">
          <button class="btn-menu-inac text-menu-selec">Nuesta Visión</button>
          </li>
      <li class="nav-item sp ">
          <button class="btn-menu-inac text-menu-selec">Claro Sport</button>
          </li>
      <li class="nav-item sp">
          <button class="btn-menu-all text-menu-selec"> Home</button>
         </li>
    </ul>
</nav>
      <div class="mt-3 ml-5"> <span class="zona">Última edición :</span>
      <label class=" text-menu-selec separacion"> septiembre 17 2019 </label>
      <label class="text-menu-selec">18:33:25</label>
    </div>
    <div class="float-right mr-5 ali">
        <span class="zona">Por :</span><label class="text-menu-selec separacion">Antonio López Pérez </label> <label class="text-menu-selec">Usuario editor</label>
    </div>
    <div class=" float-right mt-2 ml-btn  mr-5 ">
    <label class="btn-grilla  pt-2 text-grilla mr-3">Grilla</label> 
        <label class="btn-landing  pt-2 text-landing ">Landing</label>
    </div>
    </main>
</body>
</html>