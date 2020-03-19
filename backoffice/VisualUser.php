<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'styles.php';
    include 'scripts.php';
    ?>
<script src="./js/admin.js" defer></script>
</head>
<body class="scroll">

   <div id="usuarios">
        <div class=" col-xl-5 mx-auto texto-general " id="visual">
            <div class="container shadow  ">
            <div class="w3-card-4 bg-white ">
                <div class="w3-container ml-3 pt-3"><strong class="title-veruser"> DATOS DEL USUARIO</strong></div>
                <div class=" col-xl-12 mx-auto mt-xl-3 mb-xl-2 ">
                    <form>
                    <input class="insert-data pb-2 pt-2 " type="text " value="" placeholder=" Fernando Montes de Oca" disabled></input>
                    <input class="insert-data  input-email  mt-4 pt-2 pb-2" type="text " value="" placeholder=" fer.moca@gmail.com"disabled></input>
                    <input class="insert-data input-password mt-4 pt-2 pb-2" type="password" id="login-password" name="login-password" placeholder=" ***************" autocomplete="off">
                    <img src="../images/registro/eye-none.svg" class="icon-eye3" />
                    </input>
                     
                    <p class="mt-4 ml-2">Rol de usuario</p> 
                    <button type="button" class=" btn-succes mb-4" id="login-button">
                 Aprobador
                </button>
                </form>
<br>
                </div>

</div>
</div>
</div>
</div>
</body>
</html>