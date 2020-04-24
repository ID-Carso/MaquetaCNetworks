<!DOCTYPE html>
<html lang="en">

<head>
  <?php  include 'scripts.php';
        include 'styles.php';
    ?>
    <title>Claro Networks</title>
  <script  src="./js/admin.js?t=<?php echo time(); ?>" type="text/javascript">  </script>
</head>

<body class="fondo-BO">
<span class="d-flex align-items-center justify-content-between  py-xl-2">
            <span class="  ml-5 "></span>
            <span class="text-light  mr-5 pt-2">Administrador de contenido</span>     
           
    </span>
    <hr class="bg-light  ml-3 mr-3 mt-2 "/> 

  <div class="login-container  ">
    <div class="login-form no-gutters mb-4">
      <div class="col-sm-12 no-gutters col-md-6 no-gutters col-lg-4  col-xl-3 shadow1 fondolog-reco mb-4">
        <img src="./images/registro/group-10.svg" class="ubicacion5" />
        <img src="./images/registro/group-12.svg" class="ubicacion3-1" />

        <div class="row ma-no no-gutters">
          <div class="col-sm-12 col-md-12 col-lg-12 no-gutters ">
            <img src="./images/registro/group-3.svg" class="form-image-blue" />
            <a href="login.php">
              <img src="./images/registro/group-24.svg" class="ubicacion1" /></a>
            
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12 mx-auto ">
            <h1 class="re-password-title pt-1">Recupera tu contraseña</h1></div>
        <div class="col-xl-10 mx-auto">
          <div class="col-xl-10">
            
            <p class="re-password-text pt-3">
              Ingresa tu correo electrónico
            </p>
          </div>
          <form method="POST">
            <div class="row ma-no centro pt-3">
              <div class="col-sm-12 no-gap">
                <div class="tamaño2">
                  <input class="input-email insert-data correo-valido" type="email" placeholder="Correo electrónico" id="re-password-email" />
                  <p class=" correo-valido" id="error_email">
                    Correo válido
                    <img src="../images/registro/alerta.svg" class="error" />
                  </p>
                </div>
              </div>
            </div>

            <div class="row ma-no centro btn-margin">
             
                <button type="button" class="btn-ingresar-reco1  text-public"  id="reset-email" onClick="abrirModal()"> 
                  RECUPERAR
                </button>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
</body>
<!--modal-->
<div class="modal show centrados" id="myModal" role="dialog"style="padding-left: 69px;" >
    <div class= "modal-dialog modal-lg modal-dialog-centered">  
      <div class="modal-content align-item-center centro modal-contenido pt-2">
        <div class="modal-body ">
          <p>Te hemos enviado un correo <br> para reestrablecer tu contraseña.</p>
            <p>Si no ves el correo en tu bandeja de entrada, <br>revisa otros lugares, donde  podría estar,<br> como tus carpetas de correo <br> no deseado, sociales u otras.</p>
        </div>
        <div class="align-item-center centro ">
        <button type="button" class="btn-entendido text-entendido" id="modal-button" data-dismiss="modal">ENTENDIDO</button>
        </div>
    </div> 
  </div>
 </div>


</html>