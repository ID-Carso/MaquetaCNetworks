<?php

function showHeader($nameButton, $variation, $nameUser, $rolId)

{

    switch ($variation) {
        case 1:

            echo "
        <div class='bg-color'>
            <span class='d-flex align-items-center justify-content-between  py-xl-2'>
                <span class='ml-5'>  <a href='Admin-BO.php'/a> <img src='./images/registro/group-24.svg'> </span>
               
                <span class='text-light1 mr-5'>Administrador de contenido</span>          
        </span>
        </div>
        <div id='user_information' class='o-user-info-container d-flex align-items-center justify-content-between pt-xl-1 '>               
            <div class='ml-5'>
                <span class='a-text-black-bold a-name-user'>" . $nameUser . "</span><br>
                <span class='text-light1 '>" . changeNameRol($rolId) . "</span>
            </div>
            <div class='mr-5'>
           
           <a href='login.php'> <button class='mt-4 btn-return-sitio text-return'>Regresar a Administrar sitio</button></a>
            </div>
        </div>
        ";
            break;
    }
}

function changeNameRol($rolId)
{
    switch ($rolId) {
        case '1':
            $rol = "Super Usuario";
            break;
        case '2':
            $rol = "Aprobador";
            break;
        case '3':
            $rol = "Editor";
            break;
        case '4':
            $rol = "Visualizador";
            break;


        default:
            $rol = "Undefined";
            break;
    }

    return $rol;
}
