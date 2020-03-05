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
    font-size: 16px;
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
    max-width: 550px;
    margin: auto;
    position: relative;
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

    .text-blue{
        color: #0097a9;
        font-weight: bold;
    }
        </style>
    
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="shortcut icon" type="image/png" href="./images/favicon/claro-fav.png" />
        

    <title>Document</title>
</head>

<body>
    <div class="correo-container">

        <div class="p-5">
            <img src="http://www.claronetworks.openofficedospuntocero.info/API_images/group-3.png" class="form-image-blue">
            
            <div class="logo-container">
                <img src="http://www.claronetworks.openofficedospuntocero.info/API_images/claro-logo.png" class="logo-mail">
            </div>
            <div class="pb-4">
            <p class="a-correo-title text-blue"><span class="a-text-black">¡Hola, </span> {{$info['name']}}!</p>
                <p class="a-correo-title a-text-black">Este es un recordatorio</p>
            </div>

            <p class="a-text-black-regular">Te recordamos que estan por empezar:</p>
            <ul>
                <?php for ($i=0; $i < count($info['programs']); $i++) { ?>
                <li> <strong><?php echo($info['programs'][$i]->title) ?></strong></li>
                <?php }?>
            </ul>
            <p class="a-text-black-regular">¡No te lo pierdas!</p>

            <p class="a-text-black-regular">Un saludo,</p>
            <p class="a-text-black-regular">El equipo de Claro Networks.</p>

           
       

        </div>


    </div>
</body>

</html>