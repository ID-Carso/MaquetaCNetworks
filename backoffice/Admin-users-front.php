<head>     
<script src="./js/admin.js" defer></script>
</head>
<div id="Admin-users-Front">
    <div class= "sombras1 ">   
     <div class="grid text-progra ">
                <header>
                    <div class="text-title">Usuario</div>
                </header>
                <section>
                  <div class="text-title">Acciones</div>
                </section>
                  <div>Karina Henandez Ramírez</div>
                       <div>
                           <input type="image" src="./images/ojito-acti.svg" alt="" class="ml-3 btn-focus " onClick="verfront()"></input>
                           <input type="image" src="./images/edit-ac.svg" alt="" class="ml-3 btn-focus " onClick="editfront()"></input>
                           <input type="image" src="./images/eliminar-acti.svg" alt="" class="ml-3 btn-focus "onClick="abrirBorrar()" ></input>
                       </div>
                  <div>Juan González Gómez</div>
                         <div>
                            <input type="image" src="./images/ojito-acti.svg" alt="" class="ml-3 btn-focus "onClick="verfront()" ></input>
                            <input type="image" src="./images/edit-ac.svg" alt="" class="ml-3 btn-focus " onClick="editfront()"></input>
                            <input type="image" src="./images/eliminar-acti.svg" alt="" class="ml-3 btn-focus " onClick="abrirBorrar()"></input>      
                          </div>
                    <div>Andrea Camacho Juárez</div>
                          <div>
                            <input type="image" src="./images/ojito-acti.svg" alt="" class="ml-3 btn-focus " onClick="verfront()"></input>
                            <input type="image" src="./images/edit-ac.svg" alt="" class="ml-3 btn-focus " onClick="editfront()" ></input>
                            <input type="image" src="./images/eliminar-acti.svg" alt="" class="ml-3 btn-focus " onClick="abrirBorrar()"></input>    
                           </div>
       </div>                
     </div>
 <!--Para funcionalidad-->
   <div class="col-xl-1">
       <div class="row descri1">
            <input type="image"  src="./images/ver-muestra.svg" class="btn-focus ver tam"></input>
            <input type="image" src="./images/edita-muestra.svg"  class="btn-focus edi tam"></input>
            <input type="image" src="./images/borrar-muestra.svg"  class="btn-focus borrar tam"></input>                      
       </div>
          <div class="descri3">
              <div class="veri"><img src="./images/recuadro1-hover.svg"><span class="text-veri">Visualizar</span></div> 
             <div class="edita"><img src="./images/recuadro1-hover.svg"><span class="text-edita">Editar</span></div> 
             <div class="borra"><img src="./images/recuadro1-hover.svg"><span class="text-borra">Borrar</span></div> 
          </div>
     </div>
</div>
<!--modal borrar-->
<div class="modal " id="abrirBorrar" role="dialog" >
    <div class="modal-dialog modal-defi">  
      <div class="modal-content align-item-center centro texto">
        <div class="modal-body ">
          <img src= "./images/advertencia.svg"alt="" class=""><br>
          <span class="texto">¿Desea eliminar este usuario?</span>
          <p class="texto1">Karina Henandez Ramírez</p>
        </div>
        <div class="col-xl-12 align-item-center centro">
        <button type="button" class=" btn-borrar-selec" id="modal-button" data-dismiss="modal">Si</button>
        <button type="button" class="btn-borrar" id="modal-button" data-dismiss="modal">No</button>
  
      </div>
    </div> 
  </div>
 </div>