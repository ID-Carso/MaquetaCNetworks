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
    margin-bottom: 0;
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
        .form-button-primary {
        width: 100%;
        max-width: 288px;
        height: 44px;
        border-radius: 21.5px;
        background-color: #069cb0;
        font-family: "arial";
        color: #ffffff;
        font-size: 14px;
        border: none;
        outline: none !important;
        font-weight: 500;
        font-style: normal;
        font-stretch: normal;
        line-height: normal;
        letter-spacing: normal;
    
        }
    .correo-container {
        width: 100%;
        max-width: 700px;
        margin: auto;
        position: relative;
        -webkit-box-shadow: 10px 10px 18px 0px rgba(0,0,0,0.18);
        -moz-box-shadow: 10px 10px 18px 0px rgba(0,0,0,0.18);
        box-shadow: 10px 10px 18px 0px rgba(0,0,0,0.18);
    }
    .ubicacion5 {
        top: 95%;
        position: absolute;
        left: 0;
    }

    .logo-mail {
    
    }

    .logo-container{
        text-align: center;
        
    }

    .pb-4{
        padding-bottom: 24px;
    }
    .p-5{
        padding: 48px;
    }

    .text-center{
        text-align: center;
    }

    .a-text-black {
    font-family: "arial";
    color: #000000;
    font-weight: bold;
    }
    .m-btn{
        padding-left: 20%;
    }

    .mx-auto{
        margin:  0px auto;
    }

    .text-blue{
        color: #0097a9;
    }
    </style>
   
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
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
            <p class="a-correo-title  text-blue"><span class="a-text-black">¡Hola, </span> {{$info['name']}}!</p>
                <p class="a-correo-title a-text-black">Claro Networks te da la bienvenida</p>
            </div>

            <p>En esta plataforma podrás ver la programación de tus canales favoritos en el
                lugar y en el momento
                que tú elijas
            </p>
            <p class="a-text-black-regular"> Tus datos de registro son los siguientes:</p>
            <p>Correo electrónico: <span class="a-text-black-regular">{{$info['email']}}</span></p>
            <p>Nombre de usuario: <span class="a-text-black-regular">{{$info['name']}}</span></p>

            <p class="a-text-black-regular">Por favor, confirma tu cuenta de Claro Networks dando click en el siguiente
                botón:</p>
            <div class="m-btn">
                <a href="http://www.claronetworks.openofficedospuntocero.info/cuenta-confirmada.html?{{$info['token']}}"><button class="form-button-primary a-text-white-bold">¡COMENZAR!</button></a>
            </div>

            <p class="a-text-black-regular">Un saludo,</p>
            <p class="a-text-black-regular">El equipo de Claro Networks.</p>

           
        </div>


    </div>
</body>

</html>