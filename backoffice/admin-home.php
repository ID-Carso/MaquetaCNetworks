<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claro Networks</title>
    <?php
    include 'styles.php';
    include 'scripts.php';
    ?>
</head>

<body>
    <main>
        <?php
        $nameSection = "Home";
        include 'header-office.php';
        showHeader($nameButton, $nameSection, 1);
        ?>
        <div class="no-gutters mt-xl-5">
            <div class="col-11 mx-auto">
                <nav class="m-admin-nav">
                    <div rel="admin-site" class="admin-item-nav active-admin-nav py-xl-3 px-xl-4">
                        Administrar Sitio
                    </div>
                    <div rel="admin-users" class="admin-item-nav py-xl-3 px-xl-4">
                        Administrar Usuarios
                    </div>
                    <div rel="admin-hist" class="admin-item-nav py-xl-3 px-xl-4">
                        Historia General
                    </div>
                    <div rel="admin-rev" class="admin-item-nav py-xl-3 px-xl-4">
                        Revisiones
                        <div class="d-inline-block ml-xl-2">
                            <span class="a-nav-notificacion-text a-text-white-bold">6</span>
                        </div>

                    </div>
                </nav>
                <div id="admin-site" class="admin-content">
                    <div class="col-5 mx-auto mt-xl-5 mb-xl-5">
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Programación General</p>
                            <img src="./images/arrow-grey.svg" alt="">
                        </div>
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Programación</p>
                            <img src="./images/arrow-grey.svg" alt="">
                        </div>
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Home</p>
                            <img src="./images/arrow-grey.svg" alt="">
                        </div>
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Canal Claro</p>
                            <img src="./images/arrow-grey.svg" alt="">
                        </div>
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Concert Channel</p>
                            <img src="./images/arrow-grey.svg" alt="">
                        </div>
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Claro Cinema</p>
                            <img src="./images/arrow-grey.svg" alt="">
                        </div>
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Footer</p>
                            <img src="./images/arrow-grey.svg" alt="">
                        </div>
                    </div>
                </div>
                <div id="admin-users" class="admin-content">
                    <div class="mt-xl-5 mb-xl-5">
                        <div class="d-flex justify-content-between">
                            <a href="#"><button class="a-button-white a-text-black-regular py-xl-3 px-xl-5">Alta de usuarios</button></a>
                            <span class="a-text-black-regular">Usuarios totales: 7</span>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-4">
                                <span>Usuarios</span>
                            </div>
                            <div class="col-4">
                                <span>Rol</span>
                            </div>
                            <div class="col-4">
                                <span>Acciones</span>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>




    </main>
</body>

</html>