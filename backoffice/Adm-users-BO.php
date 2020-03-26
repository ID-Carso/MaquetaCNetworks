<!DOCTYPE html>
<html lang="en">
<head>
<script src="./js/admin.js" defer></script>
</head>
<body>
<div id="segunda">
  <div id="Adm-users-BO">
    <div class="col-xl-10 position-btn-alta">
        <button class="btn-alta mb-4" id="btnAlta" onClick="muestraAlta()">+ Agregar nuevo usuario</button>  
    </div>
        <div class="sombras2">
           <div class="grid-users text-progra ">
            <header>
               <div class="text-title ">Usuario</div>
             </header>
             <section>
               <div class="text-title " >Rol</div>
              </section>
             <aside>
               <div class="text-title " >Acciones</div>
              </aside>
        <div>Fernando Montes de Oca</div>
        <div>Usuario</div>
        <div >
          
            <input type="image" src="./images/ver-acti.svg" alt="" class="ml-3 btn-focus  images" id="visual" onClick="verusuarios()" ></input>
            <input type="image" src="./images/edit-ac.svg" alt="" class="ml-3 btn-focus images" onClick="editarusuarios()"></input>
            <input type="image" src="./images/eliminar-acti.svg" alt="" class="ml-3 btn-focus images" onClick="abrirBorrar()" ></input>
        </div>
        <div>Fernando Montes de Oca</div>
        <div>Administrador</div>
        <div>
            <input type="image" src="./images/ver-acti.svg" alt="" class="ml-3 btn-focus images" id="visual" onClick="verusuarios()"  ></input>
            <input type="image" src="./images/edit-ac.svg" alt="" class="ml-3 btn-focus images" onClick="editarusuarios()"></input>
            <input type="image" src="./images/eliminar-acti.svg" alt="" class="ml-3 btn-focus images" onClick="abrirBorrar()" ></input>  
        </div>
        <div>Fernando Montes de Oca</div>
        <div>Usuario</div>
        <div >
            <input type="image" src="./images/ver-acti.svg" alt="" class="ml-3 btn-focus images" id="visual" onClick="verusuarios()"  ></input>
            <input type="image" src="./images/edit-ac.svg" alt="" class="ml-3 btn-focus images"  onClick="editarusuarios()" ></input>
            <input type="image" src="./images/eliminar-acti.svg" alt="" class="ml-3 btn-focus images" onClick="abrirBorrar()" onClick="editarusuarios()" ></input>          
        </div>
        <div>Fernando Montes de Oca</div>
        <div>Usuario</div>
        <div>
            <input type="image" src="./images/ver-acti.svg" alt="" class="ml-3 btn-focus images" id="visual" onClick="verusuarios()"  ></input>
            <input type="image" src="./images/edit-ac.svg" alt="" class="ml-3 btn-focus images" onClick="editarusuarios()"></input>
            <input type="image" src="./images/eliminar-acti.svg" alt="" class="ml-3 btn-focus images" onClick="abrirBorrar()" ></input>         
        </div>
        <div>Fernando Montes de Oca</div>
        <div>Usuario</div>
        <div>
            <input type="image" src="./images/ver-acti.svg" alt="" class="ml-3 btn-focus images" id="visual" onClick="verusuarios()" ></input>
            <input type="image" src="./images/edit-ac.svg" alt="" class="ml-3 btn-focus images"  onClick="editarusuarios()"></input>
            <input type="image" src="./images/eliminar-acti.svg" alt="" class="ml-3 btn-focus images" onClick="abrirBorrar()" ></input>
               
        </div>
        <div>Fernando Montes de Oca</div>
        <div>Usuario</div>
        <div> 
            <input type="image" src="./images/ver-acti.svg" alt="" class="ml-3 btn-focus images" id="visual" onClick="verusuarios()"  ></input>         
            <input type="image" src="./images/edit-ac.svg" alt="" class="ml-3 btn-focus images"  onClick="editarusuarios()"></input>      
            <input type="image" src="./images/eliminar-acti.svg" alt="" class="ml-3 btn-focus images" onClick="abrirBorrar()" ></input> 
        </div>
        <div>Fernando Montes de Oca</div>
        <div>Usuario</div>
        <div>
            <input type="image" src="./images/ver-acti.svg" alt="" class="ml-3 btn-focus images" id="visual" onClick="verusuarios()"  ></input>
            <input type="image" src="./images/edit-ac.svg" alt="" class="ml-3 btn-focus images"  onClick="editarusuarios()" ></input>
            <input type="image" src="./images/eliminar-acti.svg" alt="" class="ml-3 btn-focus images" onClick="abrirBorrar()" ></input>
           
           </div>
           
    </div>
  
</div>

   <!--Para funcionalidad-->     
   <div class="col-xl-1">
              <div class="row descri4">
            <input type="image"  src="./images/ver-muestra.svg" class="btn-focus ver tam "></input>
            <input type="image" src="./images/edita-muestra.svg"  class="btn-focus edi tam"></input>
            <input type="image" src="./images/borrar-muestra.svg"  class="btn-focus borrar tam"></input>                      
          </div>
          <div class="descri2">
          <div class="veri"><img src="./images/recuadro1-hover.svg"><span class="text-veri">Visualizar</span></div> 
           <div class="edita"><img src="./images/recuadro1-hover.svg"><span class="text-edita">Editar</span></div> 
           <div class="borra"><img src="./images/recuadro1-hover.svg"><span class="text-borra">Borrar</span></div> 
          </div>

            </div>
</div>
</div> 
</body>

<!--modal borrar-->
<div class="modal " id="abrirBorrar" role="dialog" >
    <div class="modal-dialog modal-defi">  
      <div class="modal-content align-item-center centro texto">
        <div class="modal-body ">
          <img src= "./images/advertencia.svg"alt="" class=""><br>
          <span class="texto">¿Desea eliminar este usuario?</span>
          <p class="texto1">Fernando Montes de Oca</p>
        </div>
        <div class="col-xl-12 align-item-center centro">
        <button type="button" class=" btn-borrar-selec" id="modal-button" data-dismiss="modal">Si</button>
        <button type="button" class="btn-borrar" id="modal-button" data-dismiss="modal">No</button>
  
      </div>
    </div> 
  </div>
 </div>
 </html>