<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .form-image-blue {
            border-radius: 15px;
            left: 0;
            top: 0;
            position: absolute;
        }

        .a-text-black {
            font-family: "arial";
            color: #000000;
        }

        .a-correo-title {
            font-size: 27px;
            text-align: center;
            margin: 0;
        }

        .a-text-black-regular {
            font-family: "arial";
            color: #000000;
        }

        .a-text-white-bold {
            font-family: "http://www.claronetworks.openofficedospuntocero.info/fonts/Montserrat-Bold.ttf";
            color: #ffffff;
        }

        .a-password-link {
            color: #069cb0;
        }



        .correo-container {
            width: 100%;
            max-width: 700px;
            margin: auto;
            position: relative;
            -webkit-box-shadow: 10px 10px 18px 0px rgba(0, 0, 0, 0.18);
            -moz-box-shadow: 10px 10px 18px 0px rgba(0, 0, 0, 0.18);
            box-shadow: 10px 10px 18px 0px rgba(0, 0, 0, 0.18);
        }

        .ubicacion5 {
            top: 95%;
            position: absolute;
            left: 0;
        }



        .logo-container {
            text-align: center;

        }

        .pb-4 {
            padding-bottom: 24px;
        }

        .p-5 {
            padding: 48px;
        }

        .text-center {
            text-align: center;
        }

        .a-text-black {
            font-family: "arial";
            color: #000000;
            font-weight: bold;
        }

        .m-btn {
            padding-left: 20%;
        }

        .mx-auto {
            margin: 0px auto;
        }

        .text-blue {
            color: #0097a9;
        }

        .mt-4 {
            margin-top: 24px;
        }

        .mt-0 {
            margin-top: 0
        }

        .mb-0 {
            margin-bottom: 0 !important
        }
    </style>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/png" href="./images/favicon/claro-fav.png" />


    <title>Document</title>
</head>

<body>
    <div class="correo-container" style="box-shadow: 10px 10px 18px 0px rgba(0,0,0,0.18)">

        <div class="p-5">
            <img src="http://www.claronetworks.openofficedospuntocero.info/API_images/group-3.png" class="form-image-blue">

            <div class="logo-container">
                <img src="http://www.claronetworks.openofficedospuntocero.info/API_images/claro-logo.png" class="logo-mail">
            </div>
            <div class="pb-4">
                <p class="a-correo-title a-text-black mt-4"><span class="text-blue">Hola, </span> {{$info['name']}}</p>
                <p class="a-correo-title a-text-black">¿Olvidaste tu contraseña?</p>
            </div>

            <p class="a-text-black-regular">Puedes restablecer tu contraseña de Claro Networks haciendo click en el siguiente enlace:
            </p>
            <p class="a-text-black-regular"><a href="http://www.claronetworks.openofficedospuntocero.info/v1.2/backoffice/verifyPassword.html">Restablecer contraseña</a></p>

            <p class="a-text-black-regular mb-0">Tu nombre de usuario es: <span class="a-text-black">{{$info['name']}}</span></p>
            <p class="a-text-black-regular mt-0">Si no solicitaste un restablecimiento de contraseña, puedes simplemente omitir este mensaje</p>
            <p class="a-text-black-regular mb-0">Un saludo,</p>
            <p class="a-text-black-regular mt-0">El equipo de Claro Networks.</p>
        </div>


    </div>
</body>

</html>