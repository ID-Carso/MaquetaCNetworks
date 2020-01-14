<?php

function showHeader($nameButton, $nameSection, $variation)

{

    switch ($variation) {
        case 1:
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
            break;
        case 2:
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
                                <button class='a-button-white a-text-black-light mr-4'>" . $nameButton . "</button>
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
                            <div>
                                <div class='name-circle'></div>
                
                                <p class='a-text-black-regular a-header-section-name d-flex align-items-center ml-xl-3'><span class='ml-xl-4'>" . $nameSection . "</span></p>
                
                            </div>
                
                            <div>    
                                <span class='a-text-lightgray-light ml-3'>Administrador de Contenidos</span>
                            </div>
                
                        </div>
                    </div>
                </div>";
    }
}
