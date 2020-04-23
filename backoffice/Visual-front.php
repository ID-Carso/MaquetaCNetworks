<!DOCTYPE html>
<html lang="en">

<head>
    <script src="./js/main.js" type="module"></script>
    <script src="./js/UI/UI.js" type="module"></script>
</head>

<body class="scroll">
    <div id="visual-front">
        <div class="col-xl-6 mx-auto texto-general  ">
            <div class="container shadow tamaño ">
                <img src="./images/equis.svg" alt="" class="equis1 closeViewFront">
                <div class="bg-white ">
                    <div class=" ml-5 pt-5"><strong class="title-veruser"> DATOS DEL USUARIO</strong></div>
                    <div class=" col-xl-11 mx-auto mt-2 pb-4 ">

                        <div>
                            <p class="insert-data pb-2 pt-2 username-front"></p>
                        </div>
                        <div>
                            <p class="insert-data  input-email email-front"></p>
                        </div></input>
                        <div>
                            <p class="insert-data input-password mt-4 pt-2 pb-2" type="password" id="login-password" name="login-password" autocomplete="off">***********</p>
                        </div>


                        <div class=" navbar navbar-expand-sm  mt-4  ">
                            <div class="col-xl-4 section-sexo">
                                <p>Sexo</p>

                                <input type="radio" name="sexo" class="user-front-gender" checked style="display:none" />


                            </div>

                            <div class="col-xl-4 section-pais">
                                <p>País de recidencia </p>

                            </div>
                            <div class="col-xl-5 margin-fecha1">
                                <p>Fecha de nacimiento</p>
                                <label class="pais pl-5 margin-pais"><span class="padding-fecha user-front-birthday"></span></label> </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>