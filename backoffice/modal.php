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
<div class="modal show modal-delete-user" id="savechangecinema" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content align-item-center centro  modaltam">
      <div class="modal-body ">
      <h3 class="h3 a-text-semibold-warm-grey-three mt-3 mb-3">Cambios guardados exitosamente para aprobación</h3>
      <div class="d-flex justify-content-center pb-4 bb-r mb-3">
        <button class="btn-apro-sin "><span class="text-small a-text-medium-dark2">Aprobar sin vigencia</span></button>
        <div class="br-r"></div>
        <button class="btn-apro-sin active-apro "><span class="text-small a-text-semibold-white">Aprobar con vigencia</span></button>
      </div>
      <div class="d-flex justify-content-center"> 
             <label for=""class="text-small a-text-medium-dark2">Fecha Inicial</label>
            <label for="" class="text-small a-text-medium-dark2">Fecha Final</label>
      </div>
      <h4 class="h3 text-lan">HAZ UN COMENTARIO</h4>
      <div class="d-flex justify-content-center">z          
           <label for="textoptional"class="text-small a-text-regular-black">*Opcional</label>
           <textarea name="" id="textoptional" cols="30" rows="10"></textarea>
      </div>
      </div>
      <div class="d-flex justify-content-center">
        <button type="button" class="btn-si text-si modal-delete-button-confirm" id="modal-button">Continuar</button>

      </div>
    </div>
  </div>
</div>
</body>
</html>