<!DOCTYPE html>
<html lang="en">

<head>
    <title>Claro Networks</title>
    <script src="./js/main.js" type="module"></script>
    <script src="./js/UI/UI.js" type="module"></script>
</head>

<body class="scroll">
    <div id="visual-front">
        <div class="col-xl-7 trans10 mx-auto texto-general  ">
            <div class="container shadow tamaño ">
                <img src="./images/equis.svg" alt="" class="equis2  shadow closeViewFront">
                <div class="bg-white ">
                    <div class="ml-3 pl-4 pt-5"><strong class="title-veruser"> DATOS DEL USUARIO</strong></div>
                    <div class=" col-xl-11 mx-auto mt-2 pb-4 ">

                        <div>
                            <p class="insert-data texto-general pb-2 pt-2 username-front"></p>
                        </div>
                        <div>
                            <p class="insert-data  input-email texto-general email-front"></p>
                        </div></input>
                        <div>
                            <p class="insert-data input-password  texto-general mt-4 pt-2 pb-2" type="password" id="login-password" name="login-password" autocomplete="off">***********</p>
                        </div>


                        <div class=" navbar navbar-expand-sm  mt-4  ">
                            <div class="col-xl-4 section-sexo texto-general">
                                <p class="texto-general">Sexo</p>

                                <input type="radio" name="sexo" class="user-front-gender" checked style="display:none" />


                            </div>

                            <div class="col-xl-4 section-pais texto-general">
                                <p class="texto-general">País de recidencia </p>

                            </div>
                            <div class="col-xl-5 margin-fecha1 texto-general">
                                <p class="texto-general">Fecha de nacimiento</p>
                                <label class="pais pl-5 margin-pais"><span class="padding-fecha texto-general user-front-birthday"></span></label> </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>