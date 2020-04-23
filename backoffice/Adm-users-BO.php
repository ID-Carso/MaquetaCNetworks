<!DOCTYPE html>
<html lang="en">
<script src="./js/main.js" type="module"></script>

<head>

</head>

<body>
  <div id="segunda">
    <!--div para el cambio-->
    <div id="Adm-users-BO">
      <div class="col-xl-10 position-btn-alta">
        <button class="btn-alta mb-4" id="btnAlta">Agregar nuevo usuario</button>
      </div>
      <div class="sombras2">
        <!--titulos de la tabla-->
        <div class="grid-users text-progra users-backoffice-table">
          <!-- <header>
            <div class="text-title ">Usuario</div>
          </header>
          <section>
            <div class="text-title ">Rol</div>
          </section>
          <aside>
            <div class="text-title ">Acciones</div>
          </aside>-->
          <!--fin-->
          <!--Contenido de la tabla-->

        </div>

      </div>

      <!--Para funcionalidad-->
      <div class="col-xl-1">
        <div class="row descri4">
          <input type="image" src="./images/ver-muestra.svg" class="btn-focus ver tam "></input>
          <input type="image" src="./images/edita-muestra.svg" class="btn-focus edi tam"></input>
          <input type="image" src="./images/borrar-muestra.svg" class="btn-focus borrar tam"></input>
        </div>
        <div class="descri2">
          <div class="veri"><img src="./images/recuadro1-hover.svg"><span class="text-veri">Visualizar</span></div>
          <div class="edita"><img src="./images/recuadro1-hover.svg"><span class="text-edita">Editar</span></div>
          <div class="borra"><img src="./images/recuadro1-hover.svg"><span class="text-borra">Borrar</span></div>
        </div>

      </div>
    </div>
  </div>
</body>

<!--modal borrar-->
<div class="modal show modal-delete-user" id="abrirBorrar" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content align-item-center centro  modal-defi1 ">
      <div class="modal-body ">
        <img src="./images/advertencia.svg" alt="" class="mb-3">
        <p class="modal-text">¿Desea eliminar este usuario?</p>
        <p class="modal-text1">Fernando Montes de Oca</p>
      </div>
      <div class="pb-4 align-item-center centro">
        <button type="button" class=" btn-no" id="modal-button" data-dismiss="modal">No</button>
        <button type="button" class="btn-si modal-delete-button-confirm" id="modal-button">Si</button>

      </div>
    </div>
  </div>
</div>

</html>