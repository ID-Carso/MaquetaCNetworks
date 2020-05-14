<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claro Network</title>
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
    <div id="carga-exitosa">
    <div class="float-right mr-5 mb-5">
                    
                    <div>
                        <img src="./images/mobile.svg" class="a-prev-image ml-3 mr-3" alt="mobile" id="prev-mobile">
                        <img src="./images/tablet.svg" class="a-prev-image" alt="tablet" id="prev-tablet">
                        <img src="./images/pc.svg" class="a-prev-image ml-3" alt="pc" id="prev-desktop">
                    </div>
                    <p class="a-text-black-semibold a-prev-title prev">PREVISUALIZAR</p>
    </div>
    <div class="clearfix"></div>
    <div class="centro mt-3">
    <p class="a-text-black-regular h3 mb-5">Toda la información del Canal Claro fue guardada y pueden ser enviada a aprobación </p>
    </div>
   
   <div class="mx-auto  mt-3 shadow mb-5 content-table">
<div class="contenedor-fila">
<div class="contenedor-columna  mt-5 centro cl titletable"><span class="a-text-white-bold a-text-title-table ">CANALES CON CAMBIOS GUARDADOS</span></div>
</div>
<div class="contenedor-fila">
    <div class="contenedor-columna">
        <div class=" d-flex centro m-5 justify-content-around">
           <div  class="d-flex align-items-center col-4"> 
               <img src="./images/good.svg" alt="">
               <span class="a-text-green-apro ml-2 ">Canal Claro</span>
            </div>
            <div class="d-flex align-items-center col-4">
            <img src="./images/good.svg" alt="">
             <span class="a-text-green-apro ml-2">Programación</span>
             </div>
        </div>
        <div class=" d-flex centro m-5 justify-content-around">
            <div class="d-flex align-items-center col-4"> 
            <img src="./images/good.svg" alt="">
            <span class="a-text-green-apro ml-2">Sinópsis</span>
            </div>
            <div class="d-flex align-items-center col-4">
            <img src="./images/good.svg" alt="">
            <span class="a-text-green-apro ml-2 ">Home</span>
            </div>
        </div>  
        <div class="centro mb-5">
             <label class="a-btn-general pt-2 mr-5 a-btn-teal text-sucess" value="">Mandar a aprobación</label>
             <label  class="a-btn-general  pt-2 a-btn-grey a-text-grey" value="">Revisar nuevamente</label>
        </div>          

    </div>
</div>
   </div>

    </div>
</main>
</body>
</html>