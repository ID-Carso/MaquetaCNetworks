<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

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
                    <div class="col-6 mx-auto mt-xl-5 mb-xl-5">
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Programación General</p>
                            <img src="./images/arrow-grey.svg" alt="" class="ml-3">
                        </div>
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Programación</p>
                            <div>
                                <img src="./images/preview-icon.svg" alt="" class="ml-3">
                                <img src="./images/pencil.svg" alt="" class="ml-3">
                                <img src="./images/record.svg" alt="" class="ml-3">
                                <img src="./images/arrow-grey.svg" alt="" class="ml-3">
                            </div>
                        </div>
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Home</p>
                            <div>
                                <img src="./images/preview-icon.svg" alt="" class="ml-3">
                                <img src="./images/pencil.svg" alt="" class="ml-3">
                                <img src="./images/record.svg" alt="" class="ml-3">
                                <img src="./images/arrow-grey.svg" alt="" class="ml-3">
                            </div>
                        </div>
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Canal Claro</p>
                            <div>
                                <img src="./images/preview-icon.svg" alt="" class="ml-3">
                                <img src="./images/pencil.svg" alt="" class="ml-3">
                                <img src="./images/record.svg" alt="" class="ml-3">
                                <img src="./images/arrow-grey.svg" alt="" class="ml-3">
                            </div>

                        </div>
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Concert Channel</p>
                            <div>
                                <img src="./images/preview-icon.svg" alt="" class="ml-3">
                                <img src="./images/pencil.svg" alt="" class="ml-3">
                                <img src="./images/record.svg" alt="" class="ml-3">
                                <img src="./images/arrow-grey.svg" alt="" class="ml-3">
                            </div>
                        </div>
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Claro Cinema</p>
                            <div>
                                <img src="./images/preview-icon.svg" alt="" class="ml-3">
                                <img src="./images/pencil.svg" alt="" class="ml-3">
                                <img src="./images/record.svg" alt="" class="ml-3">
                                <img src="./images/arrow-grey.svg" alt="" class="ml-3">
                            </div>
                        </div>
                        <div class="border-b-lightgray d-flex justify-content-between pb-xl-3 pr-xl-3 pl-xl-5 pt-xl-3">
                            <p class="a-text-black-regular mb-0 text-uppercase">Footer</p>
                            <div>
                                <img src="./images/preview-icon.svg" alt="" class="ml-3">
                                <img src="./images/pencil.svg" alt="" class="ml-3">
                                <img src="./images/record.svg" alt="" class="ml-3">
                                <img src="./images/arrow-grey.svg" alt="" class="ml-3">
                            </div>
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

=======
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Claro Networks</title>
  <script src="./js/admin.js" defer></script>
</head>
<body>

<div id="Admin-home-BO" > <!--Div de cambio-->
    <div class="sombras1 ">  
      <!--Titulos de la tabla-->              
        <div class="grid text-progra">          
            <header>
          <div class="text-title">Sección</div>
           </header>
           <section>
        <div class="text-title" >Acciones</div>
        </section>
        <!--Fin-->
        <!--Contenido de la tabla-->
        <div >PROGRAMACIÓN GENERAL</div>
        <div>            
            <input type="image" src="./images/lapiz-acti.svg" alt="" class="ml-3 btn-focus"></input>                           
            <input type="image" src="./images/historial-inac.svg" alt="" class="ml-3 btn-focus"></input>                        
            <input type="image" src="./images/noti-inac.svg" alt="" class="ml-3 btn-focus"></input>          
        </div>
        <div>PROGRAMACIÓN</div>
        <div>
            <input type="image" src="./images/lapiz-acti.svg" alt="" class="ml-3 btn-focus " ></input>
            <input type="image" src="./images/historial-inac.svg" alt="" class="ml-3 btn-focus " ></input>
            <input type="image" src="./images/noti-inac.svg" alt="" class="ml-3 btn-focus " ></input>
        </div>      
        <div>HOME</div>
        <div>
            <input type="image" src="./images/lapiz-acti.svg" alt="" class="ml-3 btn-focus " ></input>
            <input type="image" src="./images/historial-inac.svg" alt="" class="ml-3 btn-focus " ></input>
            <input type="image" src="./images/noti-inac.svg" alt="" class="ml-3 btn-focus " ></input>
         </div>       
        <div>CANAL CLARO</div>
          <div>
           <input type="image" src="./images/lapiz-acti.svg" alt="" class="ml-3 btn-focus " ></input>
           <input type="image" src="./images/historial-inac.svg" alt="" class="ml-3 btn-focus " ></input>
           <input type="image" src="./images/noti-inac.svg" alt="" class="ml-3 btn-focus " ></input>
        </div>
        <div>CONCERT CHANNEL</div>
         <div>
            <input type="image" src="./images/lapiz-acti.svg" alt="" class="ml-3 btn-focus " ></input>
            <input type="image" src="./images/historial-inac.svg" alt="" class="ml-3 btn-focus " ></input>
            <input type="image" src="./images/noti-inac.svg" alt="" class="ml-3 btn-focus " ></input>
        </div>
        <div>CLARO CINEMA</div>
        <div>
           <input type="image" src="./images/lapiz-acti.svg" alt="" class="ml-3 btn-focus " ></input>
           <input type="image" src="./images/historial-inac.svg" alt="" class="ml-3 btn-focus " ></input>
           <input type="image" src="./images/noti-inac.svg" alt="" class="ml-3 btn-focus " ></input></form>
        </div>
        <div>CLARO SPORT</div>
        <div>
            <input type="image" src="./images/lapiz-no.svg" alt="" class="ml-3 btn-focus " ></input>
            <input type="image" src="./images/historial-no.svg" alt="" class="ml-3 btn-focus " ></input>
            <input type="image" src="./images/noti-no.svg" alt="" class="ml-3 btn-focus " ></input>
        </div>
        <div>NUESTRA VISIÓN</div>
        <div>
           <input type="image" src="./images/lapiz-no.svg" alt="" class="ml-3 btn-focus " ></input>
           <input type="image" src="./images/historial-no.svg"alt="" class="ml-3 btn-focus " ></input>
           <input type="image" src="./images/noti-no.svg" alt="" class="ml-3 btn-focus " ></input>
        </div>
        <div>FOOTER</div>
        <div>
          <input type="image" src="./images/lapiz-acti.svg" alt="" class="ml-3 btn-focus " ></input>
          <input type="image" src="./images/historial-inac.svg" alt="" class="ml-3 btn-focus " ></input>
          <input type="image" src="./images/noti-inac.svg" alt="" class="ml-3 btn-focus " ></input>
        </div>
        <div>SINÓPSIS</div> 
        <div>
            <input type="image" src="./images/lapiz-acti.svg" alt="" class="ml-3 btn-focus " ></input>
            <input type="image" src="./images/historial-inac.svg" alt="" class="ml-3 btn-focus " ></input>
            <input type="image" src="./images/noti-inac.svg" alt="" class="ml-3 btn-focus " ></input>
        </div>
      
        </div>
             
        </div>  
          <!--Para funcionalidad-->     
   <div class="col-xl-1">
              <div class="row descri">
            <input type="image"  src="./images/historial-muestra.svg" class="btn-focus histo" ></input>
            <input type="image" src="./images/editar-muestra.svg"  class="btn-focus editar "></input>
            <input type="image" src="./images/noti-muestra.svg"  class="btn-focus notify"></input>                      
          </div>
          <div class="descri2">
          <div class="histori"><img src="./images/recuadro1-hover.svg"><span class="text-histo">Historial</span></div> 
           <div class="edit"><img src="./images/recuadro1-hover.svg"><span class="text-edit">Editar</span></div> 
           <div class="noti"><img src="./images/recuadro1-hover.svg"><span class="text-noti">Notificaciones</span></div> 
          </div>
  </div>
  </body>
>>>>>>> Backoffice
</html>