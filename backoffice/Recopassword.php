<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'styles.php';
    include 'scripts.php'; ?>
  <script src="./js/admin.js">  </script>
 
</head>

<body class="fondo-BO">
<span class="d-flex align-items-center justify-content-between  py-xl-2 texto">
            <span class="  ml-5 "></span>
            <span class="text-light  mr-5">Administrador de contenido</span>     
           
    </span>
    <hr class="bg-light mt-0 pt-0 ml-3 mr-3 "/> 

  <div class="login-container-reco">
    <div class="login-form no-gutters">
      <div class="col-sm-12 no-gutters col-md-6 no-gutters col-lg-4  col-xl-3 shadow1 fondolog-reco">
        <img src="../images/registro/group-10.svg" class="ubicacion5" />
        <img src="../images/registro/group-12.svg" class="ubicacion3" />

        <div class="row ma-no no-gutters">
          <div class="col-sm-12 col-md-12 col-lg-12 no-gutters ">
            <img src="../images/registro/group-3.svg" class="form-image-blue" />
            <a href="login.php">
              <img src="../images/registro/group-24.svg" class="ubicacion1" /></a>
            <img src="../images/registro/group-37.svg" class="ubicacion" />
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12 mx-auto ">
            <h1 class="re-password-title pt-1">Recupera tu contraseña</h1></div>
        <div class="col-xl-10 mx-auto">
          <div>
            
            <p class="re-password-text pt-3">
              Ingresa tu correo electrónico
            </p>
          </div>
          <form method="POST">
            <div class="row ma-no centro pt-2">
              <div class="col-sm-12 no-gap">
                <div class="tamaño2">
                  <input class="input-email insert-data" type="email" placeholder="Correo electrónico" id="re-password-email" />
                  <p class="correo-valido" id="error_email">
                    Correo válido
                    <img src="../images/registro/alerta.svg" class="error" />
                  </p>
                </div>
              </div>
            </div>

            <div class="row ma-no centro ">
              <div class="col-sm-12 signup-button-container">
                <button type="button" class="form-button-outline-reco re-password-button-reco "  id="btn-correo" onClick="abrirModal()"> 
                  RECUPERAR
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
</body>
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


</html>