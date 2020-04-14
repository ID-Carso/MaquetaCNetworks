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
        $nameButton = "Cerrar sesión";
       // $nameSection = "Home";
        include 'header-office.php';
       showHeader($nameButton, 1);
        ?>
        <div class="justify-content-center centro mx-auto position-title">
        <span class="titulo">PROGRAMACIÓN GENERAL <br> DEL </span>
        <span class="titulo-rojo">1ERO DE OCTUBRE-1ERO DE NOVIEMBRE</span>
        </div>
        <div class=" mr-5 float-right position-zona">
        <label class="btn-zona"> <img src="../images/paises/chile.svg" class="Icon_paises" />Zona horaria </label> 
        </div>
        <nav class=" navbar navbar-expand-sm mx-auto mt-5 ma-le">
        <ul class="navbar-nav">
      <li class="nav-item ">
        <button class="btn-nav1">Canal Claro</button>  
        </li>
        <li class="nav-item sp">
        <button class="btn-nav1">Concert Channel</button>  
        </li>
      <li class="nav-item sp">
          <button class="btn-nav1">Claro Cinema</button>
          </li>
      <li class="nav-item sp">
          <button class="btn-nav1">Nuesta Visión</button>
          </li>
      <li class="nav-item sp ">
          <button class="btn-nav1">Claro Sport</button>
          </li>
      <li class="nav-item sp">
          <button class="btn-nav1"> Home</button>
         </li>
    </ul>
</nav>
      <div> <span class="titulo">Última edición</span>
      <label class="separacion"> septiembre 17 2019 </label>
      <label>18:33:25</label>
    </div>
    <div class="float-right mr-5 ali">
        <span>Por :</span><label class="separacion">Antonio López Pérez </label> <label>Usuario editor</label>
    </div>
    <div class="mt-5 d-flex ml-btn ali">
    <label class="btn-grilla mr-4">Grilla</label> 
        <label class="btn-zona">Landing</label>
    </div>
    <div class="d-flex ali">
        <label class="btn-cargar mr-4">Cargar archivos</label>
        <label class="btn-public-inac">Publicar</label>
        
    </div>
    </main>
</body>
</html>