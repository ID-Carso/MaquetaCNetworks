<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="./js/main.js" type="module" defer></script>
  <title>Claro Networks</title>
</head>

<body>
  <div id="register-userbo-view">
    <!--Div para cambio-->
    <div class="register-user-content">
      <div class="col-xl-6 trans10 mx-auto title-altauser tamaño-alta1 ">
        <!--Inicio para tarjeta-->
        <img src="./images/equis.svg" alt="" class="equis shadow closeViewBO" />
        <div class="pr-4 pl-4 pt-2 pb-2"><strong> DATOS DEL USUARIO</strong></div>
      </div>
      <div class="col-xl-6 trans10 shadow mx-auto tamaño-alta">
        <div class="col-xl-12 mx-auto p-3 ">
          <form>
            <input class="insert-data input-username texto-general pt-2 mb-2" id="name-user-bo" type="text" placeholder=" Nombre del usuario"></input>
            <input class="insert-data input-email texto-general pt-2 " type="text" id="email-user-bo" placeholder=" Correo "></input>
            <div class="d-flex align-items-center mt-2">
              <p class="correo-valido mt-0 mb-0" id="error_email">
                Correo válido
              </p>
              <img src="http://www.claronetworks.openofficedospuntocero.info/images/registro/alerta.svg" class="error ml-2" />
            </div>


            <!--<div class="pt-0 mt-0">
              <input class="insert-data input-password texto-general pt-2 mt-0 " type="password" id="password-user-bo" name="login-password" placeholder=" Contraseña" autocomplete="off" />
              <p class="caracteres-min mt-1 ml-2">
                8 caractéres mínimo
                <img src="./images/registro/listo.svg" class="listo" />
              </p>
            </div>-->
            <div class=" justify-content-center mx-auto ">
              <!--Sección de roles-->
              <p class="p-4 mb-4 mt-4  border-rol texto-general ">Rol
                <!--recuadro rol-->
                <div class="alineacion">
                  <button type="button" class="button-rol bt-rol-register btn-rol-all  btn-rol px-xl-0 enviamos ml-5 btn-rol-select" rel='User-Raiz' id_rol="1" id_button="1">Usuario Raíz</button>
                  <button type="button" id_rol="3" class="button-rol bt-rol-register btn-rol-all btn-rol px-xl-1 enviamos" rel='User-Edit' id_button="2">Usuario Editor</button>
                  <button type="button" id_rol="2" class="button-rol bt-rol-register btn-rol-all btn-rol px-xl-0 enviamos" rel='User-Apro' id_button="3">Usuario Aprobador</button>
                  <button type="button" id_rol="4" class="button-rol bt-rol-register btn-rol-all btn-rol px-xl-0 enviamos" rel='User-Visua' id_button="4">Usuario Visualizador</button>
                </div>
              </p>
            </div>
            <div class="mt-5 text-rol" id="User-Raiz">
              <div class="d-flex m-2 justify-content-between">
                <div class="col-xl-4">
                  <img src="./images/ojo-naranja.svg" alt="" class="img-tam"><span> Visualizar cambios </span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/recha-naranja.svg" alt="" class="img-tam"> <span> Rechazar cambios </span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/apro-naranja.svg" alt="" class="img-tam"> <span> Aprobar cambios</span>
                </div>
              </div>
              <div class="d-flex m-2  justify-content-between">
                <div class="col-xl-4">
                  <img src="./images/edit-naranja.svg" alt="" class="img-tam"> <span> Editar</span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/admi-naranja.svg" alt="" class="img-tam"> <span> Administrar usuario</span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/coment-naranja.svg" alt="" class="img-tam"> <span> Hacer comentarios</span>
                </div>
              </div>

            </div>
            <div class=" mt-5 text-rol" id="User-Edit" hidden="true">
              <div class="d-flex m-2  justify-content-between">
                <div class="col-xl-4">
                  <img src="./images/ojo-naranja.svg" alt="" class="img-tam"><span> Visualizar cambios </span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/recha-inac.svg" alt="" class="img-tam "><span class="text-rol-inac"> Rechazar cambios </span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/apro-inac.svg" alt="" class="img-tam"><span class="text-rol-inac"> Aprobar cambios</span>
                </div>
              </div>
              <div class="d-flex m-2  justify-content-between">
                <div class="col-xl-4">
                  <img src="./images/edit-naranja.svg" alt="" class="img-tam"> <span> Editar</span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/gris-admi.svg" alt="" class="img-tam"><span class="text-rol-inac"> Administrar usuario</span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/coment-naranja.svg" alt="" class="img-tam"> <span> Hacer comentarios</span>
                </div>
              </div>

            </div>
            <div class="mt-5 text-rol" id="User-Apro" hidden="true">
              <div class="d-flex m-2 justify-content-between">
                <div class="col-xl-4">
                  <img src="./images/ojo-naranja.svg" alt="" class="img-tam"><span> Visualizar cambios </span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/recha-naranja.svg" alt="" class="img-tam"> <span> Rechazar cambios </span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/apro-naranja.svg" alt="" class="img-tam"> <span> Aprobar cambios</span>
                </div>
              </div>
              <div class="d-flex m-2  justify-content-between">
                <div class="col-xl-4">
                  <img src="./images/edit-naranja.svg" alt="" class="img-tam"> <span> Editar</span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/gris-admi.svg" alt="" class="img-tam"><span class="text-rol-inac"> Administrar usuario</span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/coment-naranja.svg" alt="" class="img-tam"> <span> Hacer comentarios</span>
                </div>
              </div>

            </div>
            <div class=" mt-5 text-rol" id="User-Visua" hidden="true">
              <div class="d-flex m-2   justify-content-between">
                <div class="col-xl-4">
                  <img src="./images/ojo-naranja.svg" alt="" class="img-tam"><span> Visualizar cambios </span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/recha-inac.svg" alt="" class="img-tam"><span class="text-rol-inac"> Rechazar cambios </span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/apro-inac.svg" alt="" class="img-tam"><span class="text-rol-inac"> Aprobar cambios</span>
                </div>
              </div>
              <div class="d-flex m-2 justify-content-between">
                <div class="col-xl-4">
                  <img src="./images/lapiz-inac.svg" alt="" class="img-tam"> <span class="text-rol-inac"> Editar</span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/gris-admi.svg" alt="" class="img-tam"><span class="text-rol-inac"> Administrar usuario</span>
                </div>
                <div class="col-xl-4">
                  <img src="./images/coment-naranja.svg" alt="" class="img-tam"> <span> Hacer comentarios</span>
                </div>
              </div>

            </div>

          </form>

        </div>
      </div>
      <div class="col-xl-8 position-btn-regis  mx-auto ">
        <button type="button" class="btn-regis text-public register-user-button">REGISTRAR</button>
      </div>
    </div>
    <!--modal regis-->
    <div class=" modal show modal-newuser-bo" id=" abrirListo" role="dialog">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modal-regis-listo ">
          <div class="modal-body ">
            <span class="modal-regis-text modal-register-username"></span>
            <p class="modal-regis-text1 mb-4 pt-4">Se ha registrado con los siguientes privilegios:</p>
          </div>
          <div class="mb-4 align-item-center text-rol modal-privileges-container">

          </div>
          <div class=" mb-4 text-center">
            <button type="button" class="btn-guardar" id="modal-button" data-dismiss="modal">ACEPTAR</button>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>

</html>