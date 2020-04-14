<?php

<<<<<<< HEAD
function showHeader($nameButton, $nameSection, $variation)
=======
function showHeader($nameButton, $variation)
>>>>>>> Backoffice

{

    switch ($variation) {
        case 1:
<<<<<<< HEAD
            echo "<div class='no-gutters'>
                    <div class='o-header-backoffice col-11 mx-auto'>
                        <div class='d-flex align-items-center justify-content-between border-b-lightgray py-xl-4'>
                            <div>
                                <div class='name-circle'></div>
                
                                <p class='a-text-black-regular a-header-section-name d-flex align-items-center ml-xl-3'><span class='ml-xl-4'>" . $nameSection . "</span></p>
                
                            </div>
                
                            <div>
                                <span class='a-text-black-light'>Claro Networks</span>
                
                                <span class='a-text-lightgray-light ml-3'>Administrador de Contenidos</span>
                            </div>
                
                        </div>
                
                        <section id='user_information' class='o-user-info-container d-flex align-items-center justify-content-between pt-xl-4'>
                
                            <div>
                                <span class='a-text-black-bold a-name-user'>Vanesa Pérez</span><br>
                                <span class='a-role-text a-text-black-light'>Administrador</span>
                            </div>

                            <div>
                                <button class='a-button-gray a-text-black-light'>Cerrar Sesión</button>
                            </div>
                        </section>
                    </div>
                </div>";
=======
            
            echo "<div class='col-sm-12 no-gutters col-md-6  no-gutters col-lg-12  col-xl-12'>
            <img src='../images/registro/group-10.svg'class='image-pink-fondo' /></div>
            <div class='col-sm-4 col-md-4 col-lg-4 no-gutters'>
                <img src='./images/blue.svg'class='image-blue'/>
                <img src='../images/registro/group-12.svg' class='image-email'/>
            </div>
        <div class='bg-color'>
            <span class='d-flex align-items-center justify-content-between  py-xl-2'>
                <span class='ml-5'>  <a href='Admin-BO.php'/a> <img src='../images/registro/group-24.svg'> </span>
               
                <span class='text-light1 mr-5'>Administrador de contenido</span>          
        </span>
        </div>
        <div id='user_information' class='o-user-info-container d-flex align-items-center justify-content-between pt-xl-1 '>               
            <div class='ml-5'>
                <span class='a-text-black-bold a-name-user'>Vanesa Pérez</span><br>
                <span class='text-light1 '>Administrador</span>
            </div>
            <div class='mr-5'>
           
           <a href='login.php'> <button class='btn btn-info btn-cerrar a-text-black-light textcerrar'>CERRAR SESIÓN</button></a>
            </div>
        </div>
        ";
>>>>>>> Backoffice
            break;
        case 2:
            echo "<div class='no-gutters'>
                    <div class='o-header-backoffice col-11 mx-auto'>
                        <div class='d-flex align-items-center justify-content-between border-b-lightgray py-xl-4'>
<<<<<<< HEAD
                            <div>
                                <div class='name-circle'></div>
                
                                <p class='a-text-black-regular a-header-section-name d-flex align-items-center ml-xl-3'><span class='ml-xl-4'>" . $nameSection . "</span></p>
                
                            </div>
=======
                           
>>>>>>> Backoffice
                
                            <div>
                                <span class='a-text-black-light'>Claro Networks</span>
                
                                <span class='a-text-lightgray-light ml-3'>Administrador de Contenidos</span>
<<<<<<< HEAD
=======

>>>>>>> Backoffice
                            </div>
                
                        </div>
                
                        <section id='user_information' class='o-user-info-container d-flex align-items-center justify-content-between pt-xl-4'>
                
                            <div>
                                <span class='a-text-black-bold a-name-user'>Vanesa Pérez</span><br>
                                <span class='a-role-text a-text-black-light'>Administrador</span>
                            </div>

                            <div>
<<<<<<< HEAD
                                <button class='a-button-white a-text-black-light mr-4'>" . $nameButton . "</button>
=======
                                <button class='a-button-white a-text-black-light mr-4'>" .$nameButton . "</button>
>>>>>>> Backoffice
                                <button class='a-button-gray a-text-black-light'>Cerrar Sesión</button>
                            </div>
                        </section>
                    </div>
                </div>";
            break;
        default:
            echo "<div class='no-gutters'>
                    <div class='o-header-backoffice col-11 mx-auto'>
                        <div class='d-flex align-items-center justify-content-between border-b-lightgray py-xl-4'>
<<<<<<< HEAD
                            <div>
                                <div class='name-circle'></div>
                
                                <p class='a-text-black-regular a-header-section-name d-flex align-items-center ml-xl-3'><span class='ml-xl-4'>" . $nameSection . "</span></p>
                
                            </div>
=======
                            
>>>>>>> Backoffice
                
                            <div>    
                                <span class='a-text-lightgray-light ml-3'>Administrador de Contenidos</span>
                            </div>
                
                        </div>
                    </div>
                </div>";
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> Backoffice
