<!DOCTYPE html>
<head>
<script src="./js/admin.js" defer></script>
</head>
<html lang="en">
<div  id="general">
  <div class="col-xl-6 mx-auto title-altauser centrar">
     <div class="pr-4 pl-4 pt-2 pb-2"><strong > DATOS DEL USUARIO</strong></div>
   </div>
        <div class="col-xl-6  shadow mx-auto centrar">  
           <div class="col-xl-12 mx-auto pt-2 ">
                    <form>
                    <input class="insert-data Correo-electrnico pt-2" type="text " value="" placeholder=" Nombre del usuario" ></input>
                    <input class="insert-data  Correo-electrnico pt-2 " type="text " value="" placeholder=" Correo "></input>
                    <p class="correo-valido pb-0 mb-0" id="error_email">
                     Correo válido
                    <img src="../images/registro/alerta.svg" class="error" />
                     </p>
                  <div class="pt-0 mt-1">
                    <input class="insert-data Correo-electrnico pt-2 " type="password" id="login-password" name="login-password" placeholder=" Contraseña" autocomplete="off" />
                    <img src="../images/registro/eye-none.svg" class="icon-eye3" />
                    <p class="caracteres-min">
                    8 caractéres mínimo
                    <img src="../images/registro/listo.svg" class="listo" />                                   
                  </p>
                  </div>
                     <div class=" justify-content-center mx-auto ">
                    <p class="p-3 mb-2 mt-2  border  ">Rol 
                      <div class="alineacion">
                    <button type ="button" class=" btn-rol-all  btn-rol px-xl-0 enviamos ml-5 btn-rol-select " id="btn-rol" rel='User-Raiz' onClick="cambiaracti(1)">Usuario Raíz</button>
                    <button type ="button" class=" btn-rol-all btn-rol px-xl-1 enviamos" rel='User-Edit'  id="btn-rol" onClick="cambiaracti(2)" >Usuario Editor</button>
                    <button type ="button" class=" btn-rol-all btn-rol px-xl-0 enviamos" rel='User-Apro'  id="btn-rol" onClick="cambiaracti(3)">Usuario Aprobador</button>
                    <button type ="button" class=" btn-rol-all  btn-rol px-xl-0 enviamos2" rel='User-Visua' id="btn-rol" onClick="cambiaracti(4)">Usuario Visualizador</button>
                    </div>
                  </p>   
                      </div>  
                      <div class="row mt-2 text-rol" id="User-Raiz">
                    <div class="col-xl-6  mx-auto" style="left:24px">
                        <img src="./images/ojo-naranja.svg" alt="" class="py-xl-1 ml-2 text-right"> Visualizar cambios <br>
                        <img src="./images/edit-naranja.svg" alt="" class="py-xl-2 ml-2 text-right">    Editar <br>         
                        <img src="./images/apro-naranja.svg" alt="" class=" py-xl-2 ml-0 text-right"> Aprobar cambios
                      </div>
                         <div class="col-xl-6 mx-auto" style="rigth:-8px">
                    <img src="./images/recha-naranja.svg" alt="" class="py-xl-1 text-right"> Rechazar cambios <br>           
                    <img src="./images/admi-naranja.svg" alt="" class="py-xl-1 text-right"> Administrar usuarios <br>
                    <img src="./images/coment-naranja.svg" alt=""class="py-xl-1 text-right" > Hacer comentarios 
                         </div>
                 </div>
                 <div class="row  mt-2 text-rol" id="User-Edit" hidden= "true">
                    <div class="col-xl-6 mx-auto"style="left:24px">
                        <img src="./images/ojo-naranja.svg" alt="" class="py-xl-1  ml-2 text-right"> Visualizar cambios <br>
                        <img src="./images/edit-naranja.svg" alt="" class="py-xl-2  ml-2 text-right">    Editar <br>         
                        <div class="text-rol-inac"> 
                          <img src="./images/apro-inac.svg" alt="" class="py-xl-2  ml-0 tamaño-apro text-right "> Aprobar cambios</div>
                      </div>
                     <div class="col-xl-6   mx-auto" style="rigth:-8px">
                         <div class="text-rol-inac">
                    <img src="./images/recha-inac.svg" alt="" class="py-xl-1   tamaño-recha text-right"> Rechazar cambios  <br>        
                    <img src="./images/gris-admi.svg" alt="" class="py-xl-1 tamaño-admi text-right"> Administrar usuarios
                          </div>
                    <img src="./images/coment-naranja.svg" alt="" class="py-xl-1  text-right "> Hacer comentarios 
                          </div>
                     </div>
                 <div class="row   mt-2 text-rol" id="User-Apro" hidden= "true">
                    <div class="col-xl-6 mx-auto" style="left:24px">
                        <img src="./images/ojo-naranja.svg" alt="" class="py-xl-1  ml-2 text-right"> Visualizar cambios <br>
                        <img src="./images/edit-naranja.svg" alt="" class="py-xl-2  ml-2 text-right">    Editar <br>         
                        <img src="./images/apro-naranja.svg" alt="" class="py-xl-2  ml-0 text-right"> Aprobar cambios
                      </div>
                         <div class="col-xl-6  mx-auto" style="rigth:-8px">
                    <img src="./images/recha-naranja.svg" alt="" class="py-xl-1 text-right "> Rechazar cambios  <br>
                    <div class="text-rol-inac">          
                    <img src="./images/admin-inac.svg" alt="" class="py-xl-1 tamaño-admi text-right"> Administrar usuarios </div>
                    <img src="./images/coment-naranja.svg" alt="" class="py-xl-1 text-right "> Hacer comentarios 
                         </div>
                    </div>
                 <div class="row  mt-2 text-rol" id="User-Visua" hidden= "true">
                        <div class="col-xl-6 mx-auto" style="left:24px">
                        <img src="./images/ojo-naranja.svg" alt="" class="py-xl-1 ml-2 text-right"> Visualizar cambios 
                        <div class="text-rol-inac">
                        <img src="./images/lapiz-inac.svg" alt="" class="py-xl-2  ml-2 tamaño-edi text-right">   Editar <br>         
                        <img src="./images/apro-inac.svg" alt="" class="py-xl-2  ml-0 tamaño-apro text-right"> Aprobar cambios
                         </div>
                       </div>
                          <div class="col-xl-6   mx-auto" style="rigth:-8px">
                             <div class="text-rol-inac">
                    <img src="./images/recha-inac.svg" alt="" class="py-xl-1  tamaño-recha text-right"> Rechazar cambios  <br>       
                    <img src="./images/admin-inac.svg" alt="" class="py-xl-1 tamaño-admi text-right"> Administrar usuarios 
                           </div>
                    <img src="./images/coment-naranja.svg" alt="" class="py-xl-1 text-right"> Hacer comentarios 
                             </div>
                 </div>

                        </form>     
               
         </div> 
 </div>
         <div class="col-xl-8 position-btn-regis  mx-auto ">
         <button type ="button" class=" btn-regis " onClick="abrirlisto()">REGISTRAR</button>
         </div>
        
         <!--modal regis-->
<div class="modal fade " id="abrirListo" role="dialog" >
    <div class="modal-dialog modal-regis-listo">  
      <div class="modal-content ">
        <div class="modal-body ">
          <span class="texto-listo pt-2">Felipe López</span>
          <p class="instruction pt-4">Se ha registrado con los siguientes privilegios:</p>
        </div>
        <div class="col-xl-12 pb-4 align-item-center centro  text-rol">
        <img src="./images/ojo-naranja.svg" alt="" class=" pl-3 mr-2">Visualizar cambios 
        <img src="./images/coment-naranja.svg" alt="" class="pl-3 mr-2">Hacer comentarios 
        
        <button type="button" class="btn-alta-acept mt-3 mb-2" id="modal-button" data-dismiss="modal">ACEPTAR</button>
       
      </div>
    </div> 
  </div>
 </div>
 
</div>

        </body>
       
</html>