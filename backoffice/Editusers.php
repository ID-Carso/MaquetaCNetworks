<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Claro Networks</title>
  <script src="./js/main.js" type="module" defer></script>
</head>

<body>
  <div id="general">
    <!--Div para cambio-->
    <div class="col-xl-6 trans10 shadow mx-auto texto-general tamaño edit-userbo-content">
      <img src="./images/equis.svg" alt="" class="equis1 shadow closeViewBO">
      <form>
        <div class="col-xl-11 pt-5 pl-5">
          <div class=" title-edit "><strong class="title-veruser"> DATOS DEL USUARIO</strong></div>
        </div>
        <div class="col-xl-11 mx-auto  ">
          <input id="edit-input-username" class="insert-data texto-general pt-2" type="text " value="" placeholder="Nombre del usuario">

          </input>
          <input id="edit-input-email" class="insert-data input-email texto-general pt-2 " type="text " value="" placeholder=" Correo "></input>
          <div class="d-flex align-items-center mt-2">
            <p class="correo-valido mt-0 mb-0">
              Correo válido
            </p>
            <img src="http://www.claronetworks.openofficedospuntocero.info/images/registro/alerta.svg" class="error ml-2" />
          </div>

          <div class="pt-0 mt-1">
            <input id="edit-input-password " class="insert-data texto-general input-password pt-2 " type="password" id="login-password" name="login-password" placeholder=" Asignar nueva contraseña" autocomplete="off" />
            <div class="d-flex align-items-center">
              <p class="caracteres-min mt-1 mb-0">
                8 caractéres mínimo
              </p>

              <img src="http://www.claronetworks.openofficedospuntocero.info/images/registro/listo.svg" class="listo ml-2 mt-1" />
            </div>
            <!---  <img src="../images/registro/eye-none.svg" class="icon-eye" />-->
            <input id="edit-input-repassword" class="insert-data texto-general pt-2 " type="password" id="login-password" name="login-password" placeholder=" Confirmar nueva contraseña" autocomplete="off" />
            <!--<img src="../images/registro/eye-none.svg" class="icon-eye3" />-->
          </div>
          <div class=" justify-content-center mx-auto">
            <p class="pt-4 pb-4 pl-2 pr-2  mb-4 mt-4  border-rol texto-general">Rol
              <div class="alineacion buttons-rol-container">
                <button id="button-root" type="button" class="btn-rol-all-edit btn-rol-all button-rol btn-rol-edit enviamos ml-5" id_button="1" id_rol="1" rel='User-Raiz'>Usuario Raíz </button>
                <button id="button-editor" type="button" class="btn-rol-all-edit btn-rol-all button-rol btn-rol-edit py-xl-2 ml-1 enviamos" rel='User-Edit' id_button="2" id_rol="3">Usuario Editor</button>
                <button id="button-aprobador" type="button" class="btn-rol-all-edit btn-rol-all button-rol btn-rol-edit py-xl-2 ml-1 enviamos" rel='User-Apro' id_button="3" id_rol="2">Usuario Aprobador</button>
                <button id="button-visualizador" type="button" class="btn-rol-all-edit btn-rol-all button-rol btn-rol-edit py-xl-2  ml-1 mr-2 enviamos" rel='User-Visua' id_button="4" id_rol="4">Usuario Visualizador</button>
              </div>
            </p>
          </div>
          <div class="mt-5 text-rol" id="User-Raiz">
            <div class="d-flex m-2 justify-content-between">
              <div class="col-xl-6">
                <img src="./images/ojo-naranja.svg" alt="" class="img-tam"><span> Visualizar cambios </span>
              </div>
              <div class="col-xl-6 ml-12">
                <img src="./images/recha-naranja.svg" alt="" class="img-tam"> <span> Rechazar cambios </span>
              </div>
            </div>
            <div class="d-flex m-2  justify-content-between">
              <div class="col-xl-6">
                <img src="./images/edit-naranja.svg" alt="" class="img-tam"> <span> Editar</span>
              </div>
              <div class="col-xl-6 ml-12">
                <img src="./images/admi-naranja.svg" alt="" class="img-tam"> <span> Administrar usuario</span>
              </div>
            </div>
            <div class="d-flex m-2 justify-content-between ">
              <div class="col-xl-6">
                <img src="./images/apro-naranja.svg" alt="" class="img-tam"> <span> Aprobar cambios</span>
              </div>
              <div class="col-xl-6 ml-12">
                <img src="./images/coment-naranja.svg" alt="" class="img-tam"> <span> Hacer comentarios</span>
              </div>
            </div>
          </div>
          <div class=" mt-5 text-rol" id="User-Edit" hidden="true">
            <div class="d-flex m-2  justify-content-between">
              <div class="col-xl-6">
                <img src="./images/ojo-naranja.svg" alt="" class="img-tam"><span> Visualizar cambios </span>
              </div>
              <div class="col-xl-6 ml-12">
                <img src="./images/recha-inac.svg" alt="" class="img-tam"><span class="text-rol-inac"> Rechazar cambios </span>
              </div>
            </div>
            <div class="d-flex m-2  justify-content-between">
              <div class="col-xl-6">
                <img src="./images/edit-naranja.svg" alt="" class="img-tam"> <span> Editar</span>
              </div>
              <div class="col-xl-6 ml-12">
                <img src="./images/gris-admi.svg" alt="" class="img-tam"><span class="text-rol-inac"> Administrar usuario</span>
              </div>
            </div>
            <div class="d-flex m-2  justify-content-between ">
              <div class="col-xl-6">
                <img src="./images/apro-inac.svg" alt="" class="img-tam"><span class="text-rol-inac"> Aprobar cambios</span>
              </div>
              <div class="col-xl-6 ml-12">
                <img src="./images/coment-naranja.svg" alt="" class="img-tam"> <span> Hacer comentarios</span>
              </div>
            </div>
          </div>
          <div class="mt-5 text-rol" id="User-Apro" hidden="true">
            <div class="d-flex m-2 justify-content-between">
              <div class="col-xl-6">
                <img src="./images/ojo-naranja.svg" alt="" class="img-tam"><span> Visualizar cambios </span>
              </div>
              <div class="col-xl-6 ml-12">
                <img src="./images/recha-naranja.svg" alt="" class="img-tam"> <span> Rechazar cambios </span>
              </div>
            </div>
            <div class="d-flex m-2  justify-content-between">
              <div class="col-xl-6">
                <img src="./images/edit-naranja.svg" alt="" class="img-tam"> <span> Editar</span>
              </div>
              <div class="col-xl-6 ml-12">
                <img src="./images/gris-admi.svg" alt="" class="img-tam"><span class="text-rol-inac"> Administrar usuario</span>
              </div>
            </div>
            <div class="d-flex m-2  justify-content-between ">
              <div class="col-xl-6">
                <img src="./images/apro-naranja.svg" alt="" class="img-tam"> <span> Aprobar cambios</span>
              </div>
              <div class="col-xl-6 ml-12">
                <img src="./images/coment-naranja.svg" alt="" class="img-tam"> <span> Hacer comentarios</span>
              </div>
            </div>
          </div>
          <div class=" mt-5 text-rol" id="User-Visua" hidden="true">
            <div class="d-flex m-2   justify-content-between">
              <div class="col-xl-6">
                <img src="./images/ojo-naranja.svg" alt="" class="img-tam"><span> Visualizar cambios </span>
              </div>
              <div class="col-xl-6 ml-12">
                <img src="./images/recha-inac.svg" alt="" class="img-tam"><span class="text-rol-inac"> Rechazar cambios </span>
              </div>
            </div>
            <div class="d-flex m-2 justify-content-between">
              <div class="col-xl-6">
                <img src="./images/lapiz-inac.svg" alt="" class="img-tam"> <span class="text-rol-inac"> Editar</span>
              </div>
              <div class="col-xl-6 ml-12">
                <img src="./images/gris-admi.svg" alt="" class="img-tam"><span class="text-rol-inac"> Administrar usuario</span>
              </div>
            </div>
            <div class="d-flex m-2  justify-content-between ">
              <div class="col-xl-6">
                <img src="./images/apro-inac.svg" alt="" class="img-tam"><span class="text-rol-inac"> Aprobar cambios</span>
              </div>
              <div class="col-xl-6 ml-12">
                <img src="./images/coment-naranja.svg" alt="" class="img-tam"> <span> Hacer comentarios</span>
              </div>
            </div>
          </div>

          <div class="col-xl-12 align-item-center pb-5 centro space">
            <button type="button" class=" btn-cancelar mt-3  mr-4"> Cancelar </button>
            <button type="button" class="btn-guardar save-button-edit mt-3">Guardar</button>

          </div>
      </form>


    </div>

  </div>
  <!--modal regis-->
  <div class="modal show modal-edit-user" id="abrirsave" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content modal-regis-listo ">
        <div class="modal-body ">
          <span class="a-text-medium  modal-regis-text modal-edit-username"></span>
          <p class="modal-regis-text1 pt-4">Se ha registrado con los siguientes privilegios:</p>
        </div>
        <div class=" pb-4 align-item-center centro text-rol modal-edit-privileges-container">



        </div>
        <div class="text-center">
          <button type="button" class="btn-aceptar text-semi-white mt-4" id="modal-button" data-dismiss="modal">ACEPTAR</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>