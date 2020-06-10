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
<div class="modal show modal-delete-user" id="savesino" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content align-item-center centro  modal-save">
      <div class="modal-body ">
      <img src="./images/bien.svg" alt="aprovado" class="m-3">
      <h3 class="h3 a-text-medium-brownish mt-3 mb-3">Fueron guardados los cambios en la sinópsis de:</h3>    
      <div class="d-flex justify-content-center mb-5">    
             <label for=""class="h3 a-text-bold-brownish">Mad Men</label>             
      </div>   
      <div class="d-flex justify-content-center mb-5">
      <button type="button" class="a-btn-border-teal  a-btn-general-modal text-no  mr-5 btn-focus" id="back-list"  data-dismiss="modal">VOLVER AL LISTADO</button>

        <button type="button" class="a-btn-teal  a-btn-general-modal text-si  btn-focus" id="modal-button"  data-dismiss="modal">SIGUIENTE SINÓPSIS</button>

      </div>
    </div>
  </div>
</div>
</body>
</html>