<?php

session_start();

if($_SESSION["country"] != 1){
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './views/partials/head.php' ?>
  <?php include './views/partials/session.php' ?>
</head>

<body class="fondo">
  <header class="avatar-header">
    <?php include('./views/partials/hamburguer-menu.php') ?>
    <?php
    include './views/partials/menu-mobile-white.php';
    ?>

    <?php
    include './views/partials/menu-tablet-white.php';
    ?>

    <?php
    include './views/partials/menu-desktop-white.php';
    ?>
  </header>

  <div style="padding-top: 3%">
    <div
      class="col-sm-12 no-gutters col-md-8 mx-auto no-gutters col-lg-4 col-xl-3 shadow1 fondolog position-relative card-white avatar-container">
      <img src="./images/config/arrow-back-icon.svg" alt="flecha-para-regresar" class="arrow-back"/>
      <img src="images/registro/group-10.svg" class="ubicacion5" alt="vector-rosa"/>

      <div class="row ma-no centro">
        <div class="col-sm-12 no-gap">
          <div class="centro">
            <p class="titulos-configuraciones">Avatar</p>
          </div>
        </div>
      </div>
      <div class="row ma-no centro">
        <div class="col-sm-12 no-gap">
          <div class="tamaño2 centro">
            <p class="texto-sub-avatar">Elige un avatar para tu cuenta</p>
          </div>
        </div>
      </div>

      <div class="row ma-no centro">
        <div class="col-sm-12 no-gap">
          <div class="tamaño2 centro">
            <ul class="lista-avatar  ">
              <div class="col-md text-center no-gap">
                <li rel="claro-canal" class="active-navAvatar avatar-item cursor-pointer">
                  <img _id="1" src="./images/avatar/avatar-blue1.svg" alt="avatar-azul-claro" title="avatar-azul-claro" />
                </li>
                <br />
                <li rel="claro-canal" class="avatar-item cursor-pointer">
                  <img _id="2" src="./images/avatar/avatar-gray.svg" alt="avatar-gris" title="avatar-gris"/>
                </li>
                <br />
                <li rel="claro-canal" class="avatar-item cursor-pointer">
                  <img _id="3" src="./images/avatar/avatar-blue3.svg" alt="avatar-azul" title="avatar-azul" />
                </li>
              </div>
              <div class="col-md text-center no-gap">
                <li class="avatar-item cursor-pointer">
                  <img _id="4" src="./images/avatar/avatar-yellow.svg" alt="avatar-amarillo" title="avatar-amarillo"/>
                </li>
                <br />
                <li class="avatar-item cursor-pointer">
                  <img _id="5" src="./images/avatar/avatar-blue2.svg"alt="avatar-azul-marino" title="avatar-azul-marino" />
                </li>
                <br />
                <li class="avatar-item cursor-pointer">
                  <img _id="6" src="./images/avatar/avatar-gray2.svg" alt="avatar-gris-tenue" title="avatar-gris-tenue"/>
                </li>
              </div>
              <div class=" col-md text-center no-gap">
                <li class="avatar-item cursor-pointer">
                  <img _id="7" src="./images/avatar/avatar-purple.svg" alt="avatar-morado" title="avatar-morado"/>
                </li>
                <br />
                <li class="avatar-item cursor-pointer">
                  <img _id="8" src="./images/avatar/avatar-red.svg" alt="avatar-rojo" title="avatar-rojo"/>
                </li>
                <br />
                <li class="avatar-item cursor-pointer">
                  <img _id="9" src="./images/avatar/avatar-black.svg" alt="avatar-negro" title="avatar-negro" />
                </li>
              </div>
            </ul>
          </div>
        </div>
      </div>
      <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
      <div class="row ma-no centro">
        <div class="col-sm-12 no-gap">
          <div class="tamaño2 centro ">
            <button type="button" class="acept-button" id="avatar-button">
              GUARDAR
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade " id="mensaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-estilo">


        <div class="modal-body txtcontenido">
          <img src="./images/datos-adicionales/success.svg" alt="cambio-exitoso" />
          <span class="mensaje">Nuevo avatar guardado exitosamente</span>
        </div>
        <div class="modal-footer" style="border-top:none !important; justify-content: center;">

          <button type="button" class="form-button-primary" id="modal-button" data-dismiss="modal">ENTENDIDO</button>


        </div>

      </div>
    </div>
  </div>
</body>

</html>