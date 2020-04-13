<!DOCTYPE html>
<html lang="en">
<head>
    
<head>
  <?php  include 'scripts.php';
  include 'styles.php';
    ?>
  <script  src="./js/admin.js?t=<?php echo time(); ?>">  </script>
</head>
</head>
<body>
    <!--modal-->
 <div class="modal" id="myModal" role="dialog" >
    <div class= "modal-dialog  modal-defi">  
      <div class="modal-content align-item-center centro text-modal pt-2">
        <div class="modal-body ">
          <p>Te hemos enviado un correo <br> para reestrablecer tu contraseña.</p>
            <p>Si no ves el correo en tu bandeja de entrada, <br>revisa otros lugares, donde  podría estar,<br> como tus carpetas de correo <br> no deseado, sociales u otras.</p>
        </div>
        <div class="align-item-center centro ">
        <button type="button" class="form-button-primary re-modal" id="modal-button" data-dismiss="modal">ENTENDIDO</button>
        </div>
    </div> 
  </div>
 </div>

</body>
</html>