<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claro Networks</title>
    <?php
    include 'scripts.php';
   include 'styles.php';
   ?>
  <script src="./js/admin.js" defer></script>
</head>
<body>
    <main>
    <?php
    include 'Menu.php';
    include 'submenu.php';   
    ?>
    <div id="prev-sinopsis">
        <div class="float-left ml-5">
            <div><input type="radio"  id="1" value="" disabled/> <label for="1" class="a-btn-check" ></label><span class=" ml-2 a-text-grey">Guardar cambios</span>
                 <input type="radio" id="2" value="" disabled/> <label for="2" class="ml-5 a-btn-check" ></label><span class=" ml-2 a-text-grey">No guardar cambios</span>
            </div>
        </div>
        <div class="clearfix"></div>
        
    
        <div class="mx-auto shadow mt-5  mb-5 content-table"> 
            <div class="contenedor-fila">
                  <div class="contenedor-columna centro program titletable">
                     <span class="a-text-white-regular a-text-prev">Programa</span>
                 </div>
                 <div class="contenedor-columna centro channel titletable">
                     <span class="a-text-white-regular a-text-prev">Canal</span>
                 </div>
                 <div class="contenedor-columna centro channel titletable">
                     <span class="a-text-white-regular a-text-prev">Acciones</span>
                 </div>
                 <div class="contenedor-columna centro channel  titletable">
                     <span class="a-text-white-regular a-text-prev">Revisión</span>
                 </div>
            </div>
            <div class="contenedor-fila">
                <div class="contenedor-columna">
                    <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                </div>
                <div class="contenedor-columna centro">
                    <span class="a-text-medium-black text-normal ">Canal Claro</span>
                </div>
                <div class="contenedor-columna centro">
                <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi " ></input>
                </div>
                <div class="contenedor-columna centro ">
                <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
            <input type="checkbox">
            <span class="checkmark1"></span>
            </label>
                </div>
            </div>
            <div class="contenedor-fila">
                <div class="contenedor-columna">
                    <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                </div>
                <div class="contenedor-columna centro">
                    <span class="a-text-medium-black  text-normal ">Canal Claro</span>
                </div>
                <div class="contenedor-columna centro">
                <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi " ></input>
                </div>
                <div class="contenedor-columna centro ">
                <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
            <input type="checkbox">
            <span class="checkmark1"></span>
            </label>
                </div>
            </div>
            <div class="contenedor-fila">
                <div class="contenedor-columna">
                    <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                </div>
                <div class="contenedor-columna centro ">
                    <span class="a-text-medium-black text-normal ">Canal Claro</span>
                </div>
                <div class="contenedor-columna centro ">
                <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi" ></input>
                </div>
                <div class="contenedor-columna centro">
                <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
            <input type="checkbox">
            <span class="checkmark1"></span>
            </label>
                </div>
            </div>
            <div class="contenedor-fila">
                <div class="contenedor-columna">
                    <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                </div>
                <div class="contenedor-columna centro ">
                    <span class="a-text-medium-black text-normal ">Canal Claro</span>
                </div>
                <div class="contenedor-columna centro">
                <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi" ></input>
                </div>
                <div class="contenedor-columna centro">
                <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
            <input type="checkbox">
            <span class="checkmark1"></span>
            </label>
                </div>
            </div>
            <div class="contenedor-fila">
                <div class="contenedor-columna">
                    <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                </div>
                <div class="contenedor-columna centro ">
                    <span class="a-text-medium-black text-normal ">Canal Claro</span>
                </div>
                <div class="contenedor-columna centro">
                <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi" ></input>
                </div>
                <div class="contenedor-columna centro">
                <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
            <input type="checkbox">
            <span class="checkmark1"></span>
            </label>
                </div>
            </div>
        </div>
        
    </div>
    </main>
</body>
</html>