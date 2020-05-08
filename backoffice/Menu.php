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
        <div class=" mr-5 d-flex float-right position-zona">
        <label class="btn-zona zona">Zona horaria  <img src="./images/paises/chile.svg" class="Icon_paises1" /></label> 
        </div>
        <nav class="d-flex col-xl-12 navbar-expand-sm justify-content-center position-nav">
        <ul class="d-flex justify-content-center navbar-nav">
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
      <div class=" ml-5"> <span class="zona">Última edición :</span>
      <label class=" text-menu-selec separacion"> septiembre 17 2019 </label>
      <label class="text-menu-selec">18:33:25</label>
    </div>
    <div class="float-right mb-2 mr-5 ali">
        <span class="zona">Por :</span><label class="text-menu-selec separacion"><span> Antonio López Pérez</span> </label> <label class="text-menu-selec">Usuario editor</label>
    </div>
    <div class="d-flex float-right mt-2 ml-btn  mr-5 ">
    <label class="btn-grilla  text-grilla mr-3"><span>Grilla</span></label> 
        <label class="btn-landing  text-landing "><span>Landing</span></label>
    </div>
    </main>
</body>
</html>