<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'styles.php';
    ?>

</head>

<body class="scroll">

    <div id="usuarios">
        <div class=" col-xl-6 mx-auto texto-general " id="visual">
            <div class="container shadow tamaño ">
                <img src="./images/equis.svg" alt="" class="equis1 closeViewBO">
                <div class="w3-card-4 bg-white ">
                    <div class="w3-container ml-3 pt-5 pl-4"><strong class="title-veruser"> DATOS DEL USUARIO</strong></div>
                    <div class=" col-xl-12 mx-auto mt-xl-3 mb-xl-2 pl-5 pr-5 ">
                        <form>
                            <div>
                                <p class="insert-data pb-2 pt-2 ">Fernando Montes de Oca</p>
                            </div>
                            <div>
                                <p class="insert-data  input-email  mt-4 pt-2 pb-2">fer.moca@gmail.com</p>
                            </div></input>
                            <div>
                                <p class="insert-data input-password mt-4 pt-2 pb-2" type="password" id="login-password" name="login-password" autocomplete="off">***********</p>
                            </div>

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