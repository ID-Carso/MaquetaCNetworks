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
        include 'Menu.php';
    ?>
    <div id="menu">
    <div class="float-right mr-5 margin-top-por">
                    
                    <div>
                        <img src="./images/mobile.svg" class="a-prev-image ml-3 mr-3" alt="mobile" id="prev-mobile">
                        <img src="./images/tablet.svg" class="a-prev-image" alt="tablet" id="prev-tablet">
                        <img src="./images/pc.svg" class="a-prev-image ml-3" alt="pc" id="prev-desktop">
                    </div>
                    <p class="a-text-black-semibold a-prev-title prev">PREVISUALIZAR</p>
    </div>
           <div class="d-flex  col-xl-12 justify-content-center align-item-center carousel " id="option">
           <ul class="d-flex justify-content-center carousel-inner">
          <li class="nav-item ml-3">
          <img src="./images/arrow-light.svg" alt="" class="arrow-180 arrow-left">
          </li> 
      <li class="carousel-item nav-item sp">
         
        <label class="btn-menu-select menu">CANAL CLARO</label>  
        </li>
        <li class="carousel-item  nav-item sp">
        <label class="txtmenu text-menu-selec">SINÓPSIS</label>  
        </li>
      <li class="carousel-item nav-item sp">
          <label class="txtmenu text-menu-selec">PROGRAMACIÓN</label>
          </li>
      
      <li class="carousel-item nav-item sp">
          <label class="txtmenu text-menu-selec"> HOME</label>
         </li>
         <li class="nav-item sp mr-3">
         <img src="./images/arrow-dark.svg" alt="" class="arrow-top arrow-right">
         </li>
    </ul>
    <a class="carousel-control-prev" href="#option">
                    <span class="arrow-right"></span>
                </a>
                <a class="carousel-control-next" href="#option">
                    <span class="arrow-left"></span>
                </a>
          </div>
    </div>

    
    </main>
    
</body>
</html>   