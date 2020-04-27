<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Claro Networks</title>
  <script src="./js/main.js" type="module" defer></script>
  <script src="./js/admin.js" defer></script>
</head>

<body>
  <div id="Admin-users-Front">
    <!--Div para cambio-->
    <div class="sombras1 ">
      <div class="grid mb-4 texto-general users-front-table">

      </div>
    </div>
    <!--Para funcionalidad-->
    <!--<div class="col-xl-1 user-front-table">
      <div class="row descri1">
        <input type="image" src="./images/ver-muestra.svg" class="btn-focus ver tam"></input>
        <input type="image" src="./images/edita-muestra.svg" class="btn-focus edi tam"></input>
        <input type="image" src="./images/borrar-muestra.svg" class="btn-focus borrar tam"></input>
      </div>
      <div class="descri3">
        <div class="veri1"><img src="./images/recuadro1-hover.svg"><span class="text-veri">Visualizar</span></div>
        <div class="edita1"><img src="./images/recuadro1-hover.svg"><span class="text-edita">Editar</span></div>
        <div class="borra1"><img src="./images/recuadro1-hover.svg"><span class="text-borra">Borrar</span></div>
      </div>
    </div>-->
  </div>

</body>

<!--modal borrar-->
<div class="modal modal-delete-user-front show " id="abrirBorrar" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content centro modal-defi2">
      <div class="modal-body  ">
        <img src="./images/advertencia.svg" alt="" class="mb-3">
        <p class="modal-text">¿Desea eliminar este usuario?</p>
        <p class="text-modal-text1 modal-delete-username-front"></p>
      </div>
      <div class="pb-4 align-item-center centro">
        <button type="button" class=" btn-no text-no" id="modal-button" data-dismiss="modal">No</button>
        <button type="button" class="btn-si text-si modal-delete-front-confirm" id="modal-button">Si</button>

      </div>
    </div>
  </div>
</div>

</html>