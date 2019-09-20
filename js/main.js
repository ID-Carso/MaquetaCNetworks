$(document).ready(function() {
  $(".ubicacion4").click(function() {
    var tipo = document.getElementById("password");
    if (tipo.type == "password") {
      tipo.type = "text";
    } else {
      tipo.type = "password";
    }
  });

  $(".singup-button").click(function() {
    var usuario, correo, password, expresion, mensaje, error;

    usuario = document.getElementById("usuario").value;
    correo = document.getElementById("correo").value;
    password = document.getElementById("password").value;
    const tituloModal = $(".hola");
    expresion = /\w+@\w+\.+[a-z]/;
    const modalBody = $(".modal-body");
    const modal = $("#mensaje");
    if (usuario === "" && correo === "" && password === "") {
      tituloModal.text("Error");
      mensaje = `<p>Todos los campos están vacios</p>`;
      modalBody.html(mensaje);
      modal.modal("show");
    } else if (!expresion.test(correo)) {
      mensaje = `<p>El correo no es válido</p>`;
      modalBody.html(mensaje);
      modal.modal("show");
    } else if (password.length < 8) {
      mensaje = `<p>La contraseña debe tener al menos 8 caractéres</p>`;
      modalBody.html(mensaje);
      modal.modal("show");
    }
  });

  const inputPassword = $("#password");
  const caracteresMin = $(".caracteres-min");
  inputPassword.keyup(function() {
    if (inputPassword.val().length < 8 && inputPassword.val().length >= 1) {
      caracteresMin.css("color", "red");
    } else if (inputPassword.val().length == 0) {
      caracteresMin.css("color", "#666262");
    } else {
      caracteresMin.css("color", "green");
    }
  });

  var bandera = 0;

  if (window.matchMedia("(max-width: 767px)").matches) {
    /* FUNCION DEGRADADO - SOLIDO SCROLLBAR*/
    $(document).on("scroll ontouchmove ontouchstart ontouchend", function() {
      var posicionScroll = $(document).scrollTop();
      if (posicionScroll <= 0) {
        navbar.style.background =
          "linear-gradient(to bottom, #000000, rgba(0, 0, 0, 0))";
        navbar.style.position = "absolute";
      } else if (posicionScroll > 0 && posicionScroll <= 100) {
        navbar.style.background =
          "linear-gradient(to bottom, #000000, rgba(0, 0, 0, 0))";
        navbar.style.position = "fixed";
      } else if (posicionScroll >= 101) {
        navbar.style.background = "black";
        navbar.style.position = "fixed";
      }
    });

    /*Organismos */
  } else if (
    window.matchMedia("(min-width: 768px) and (max-width: 991px)").matches
  ) {
    //location.reload();
    /*Atoms*/
    const logo = document.querySelector(".logo");
    const menu_responsive = document.querySelector(".menu-responsive");

    logo.setAttribute("src", "./images/home/claro-networks-black.svg");

    menu_responsive.setAttribute(
      "src",
      "./images/home/menu-responsive-black.svg"
    );

    /*End Atoms */

    /* Molecules */

    /*Organismos*/

    var concertResponsiveHome = `
    <div class="d-flex justify-content-between align-items-center margin-bottom-75">
      <div class="m-home-titles">
        <h1 class="a-concert-channel-title">CONCERT CHANNEL</h1>
      </div>
      <div class="m-see-more">
        <button class="btn-pink">VER +</button>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-md-4">
        <p class="a-concert-subtitle concert-first-subtitle">Conciertos</p>
        <p class="a-concert-subtitle concert-second-subtitle">Entrevistas y mucho más</p>
      </div>
      <div class="col-md-8">
        <div class="row poster-pad-b">
          <div class="col poster-pad-r">
              <div class="height-second-poster ">
                <div class="poster-image-small concert-poster-color">
                </div>
                <div class="a-concert-rectangle">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col poster-pad-l">
                <div class="height-second-poster">
                  <div class="poster-image-small concert-poster-color"></div>
                  <div class="a-concert-rectangle">
                      <div class="poster-title-margin">
                          <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                      </div>
                  </div>
                </div>
              </div>
      </div>
      <div class="row poster-pad-t">
        <div class="col poster-pad-r">
            <div class="height-second-poster h-100">
              <div class="poster-image-small concert-poster-color"></div>
              <div class="a-concert-rectangle ">
                <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
              </div>
            </div>
          </div>
          <div class="col poster-pad-l">
              <div class="height-second-poster h-100">
                <div class="poster-image-small concert-poster-color"></div>
                <div class="a-concert-rectangle ">
                  <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                </div>
              </div>
            </div>
        </div>
     </div>
    </div>
    <div class="d-flex align-items-center justify-content-between section-home-footer">
      <div>
        <img class="concert-footer-img" src="./images/home/concert-home-img.svg" alt="">
      </div>
      <div>
        <p class="horario-text text-white">
          Horario sujetos a cambios
        </p>
      </div>
    </div>
    `;
    $(".o-concert-section").html(concertResponsiveHome);

    var cinemaResponsiveHome = `
   
    <div class="d-flex justify-content-between align-items-center margin-bottom-75">
      <div class="m-home-titles">
        <h1 class="a-claro-cinema-title">CLARO <span>CINEMA</span></h1>
        <h2 class="a-subtitle">
          Las mejores <span class="a-subtitle-bold">Películas Mexicanas</span>
        </h2>
      </div>
      <div class="m-see-more">
        <button class="btn-red">VER +</button>
      </div>
    </div>

    <div class="row no-gutters">
      <div class="col-md-4 col-xl-6">
      </div>
      <div class="col-md-8 col-xl-6">
        <div class="row poster-pad-b">
          <div class="col poster-pad-r">
              <div class="height-second-poster ">
                <div class="poster-image-small poster-grey"></div>
                <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col poster-pad-l">
                <div class="height-second-poster">
                  <div class="poster-image-small poster-grey"></div>
                  <div class="a-cinema-rectangle">
                      <div class="poster-title-margin">
                          <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                      </div>
                  </div>
                </div>
              </div>
      </div>
      <div class="row poster-pad-t">
        <div class="col poster-pad-r">
            <div class="height-second-poster">
              <div class="poster-image-small poster-grey"></div>
              <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
            </div>
          </div>
          <div class="col poster-pad-l">
              <div class="height-second-poster">
                <div class="poster-image-small poster-grey"></div>
                <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                    </div>
                </div>
              </div>
            </div>
        </div>
     </div>
    </div>
    <div class="d-flex align-items-center justify-content-between section-home-footer">
    <div>
      <img class="concert-footer-img" src="./images/home/cinema-home-img.svg" alt="">
    </div>
    <div>
      <p class="horario-text text-dark">
        Horario sujetos a cambios
      </p>
    </div>
  </div>`;
    $(".o-cinema-section").html(cinemaResponsiveHome);

    var visionResponsiveHome = `
    
    <div class="d-flex justify-content-between align-items-center margin-bottom-60">
      <div class="m-home-titles">
        <h1 class="a-our-vision-title">NUESTRA VISIÓN</h1>
        <h2 class="a-subtitle">
          SIÉNTETE <span class="a-subtitle-bold">COMO EN CASA</span>
        </h2>
      </div>
        <div class="m-see-more">
        <button class="btn-purple">VER +</button>
      </div>
    </div>

    
      <div class="slick-slider">

        <div class="row no-gutters">
            <div class="col columnGap">
                <div class="height-second-poster">
                    <div class="poster-image pink-color">
                    </div>
                  <div class="a-vision-rectangle">
                      <div class="poster-title-margin">
                          <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        <div class="row no-gutters">
          <div class="col columnGap">
              <div class="height-second-poster">
                <div class="poster-image pink-color"></div>
                <div class="image"></div>
                <div class="a-vision-rectangle">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col columnGap h-100">
                <div class="height-second-poster h-100">
                    <div class="poster-image pink-color">
                      </div>
                  <div class="a-vision-rectangle">
                      <div class="poster-title-margin">
                          <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                      </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="row no-gutters">
              <div class="col columnGap h-100">
                  <div class="height-second-poster h-100">
                    <div class="poster-image pink-color">
                    </div>
                    <div class="a-vision-rectangle">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between section-home-footer">
            <div>
              <img class="concert-footer-img" src="./images/home/vision-home-img.svg" alt="">
            </div>
            <div>
              <p class="horario-text text-dark">
                Horario sujetos a cambios
              </p>
            </div>
          </div>`;

    $(".o-vision-section").html(visionResponsiveHome);

    var claroResponsiveHome = `
    
    <div class="d-flex justify-content-between align-items-center margin-bottom-60">
    <div class="m-home-titles">
      <h1 class="a-claro-channel-title">CANAL CLARO</h1>
      <h2 class="a-subtitle">
        LO MEJOR EN SERIES Y <span class="a-claro-channel-subtitle-bold">PELÍCULAS INTERNACIONALES</span>
      </h2>
    </div>
    <div class="m-see-more">
      <button class="btn-red">VER +</button>
    </div>
   </div>
   <div class="slick-slider">
      <div class="row no-gutters">
          <div class="col columnGap h-100">
              <div class="height-second-poster h-100">
                  <div class="poster-image pink-color">
                    </div>
                <div class="a-vision-rectangle">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                    </div>
                </div>
              </div>
            </div>
        </div>
      <div class="row no-gutters">
        <div class="col columnGap h-100">
            <div class="height-second-poster h-100">
              <div class="poster-image pink-color"></div>
              <div class="image"></div>
              <div class="a-vision-rectangle">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
            </div>
          </div>
      </div>
      <div class="row no-gutters">
          <div class="col columnGap">
              <div class="height-second-poster">
                  <div class="poster-image pink-color">
                    </div>
                <div class="a-vision-rectangle">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row no-gutters">
          <div class="col columnGap">
            <div class="height-second-poster">
              <div class="poster-image pink-color">
              </div>
              <div class="a-vision-rectangle">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-between section-home-footer">
      <div>
        <img class="concert-footer-img" src="./images/home/claro-home-img.svg" alt="">
      </div>
      <div>
        <p class="horario-text text-white">
          Horario sujetos a cambios
        </p>
      </div>
  </div>`;
    $(".o-claro-section").html(claroResponsiveHome);

    var sportsResponsiveHome = `          
    <div class="d-flex justify-content-between align-items-center margin-bottom-50">
    <div class="m-home-titles">
      <h1 class="a-claro-sports-title">claro <span>sports</span></h1>
      <h2 class="a-subtitle">
        Las mejor en deportes <span class="a-subtitle-bold">al instante</span>
      </h2>
    </div>
    <div class="m-see-more">
      <button class="btn-red">VER +</button>
    </div>
  </div>
  <div class="row no-gutters d-flex align-items-center">
      <div class="col-md-4">
        <h1 class="poster-title-sport">
          <span>Vive la </span>intensidad <span>del deporte</span>
        </h1>
      </div>
      <div class="col-md-8">
        <div class="row no-gutters poster-pad-b">
          <div class="col margin-left-11 poster-margin-r">

          <div class=" poster-image poster-grey">
            <div class="transmission-panel">
              <p class="transmission-text text-white">14:50 - 16:50</p>
              <div class="transmission-add">
                <span class="text-white">+</span>
              </div>
            </div>
          </div>
          <div class="a-sports-rectangle">
              <div class="poster-title-margin">
                  <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
              </div>
          </div>          
        </div>
            <div class="col poster-margin-l">
                <div class="height-second-poster">
                  <div class="poster-image poster-grey">
                  <div class="transmission-panel">
                  <p class="transmission-text text-white">14:50 - 16:50</p>
                  <div class="transmission-add">
                    <span class="text-white">+</span>
                  </div>
                </div>
                  </div>

                  <div class="a-sports-rectangle">
                      <div class="poster-title-margin">
                          <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                      </div>
                  </div>
                </div>
              </div>
      </div>
      </div>
    </div>
      <div class="d-flex align-items-center justify-content-between section-home-footer">
        <div>
          <img class="concert-footer-img" src="./images/home/sports-home-img.svg" alt="">
        </div>
        <div>
          <p class="horario-text text-dark">
            Horario sujetos a cambios
          </p>
        </div>
      </div>`;
    $(".o-sports-section").html(sportsResponsiveHome);

    var advertisingSection = `
    
    <div class="col-lg-10 m-auto">
      <div class="row">
        <div class="col-5 m-auto">
          <div class="adv-headline-mb">
            <h1 class="advertising-title">Disfruta</h1>
            <h2 class="advertising-subtitle">La mejor programación</h2>
          </div>
          <div>
            <p class="advertising-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tellus
              tellus, rutrum sit amet purus in, interdum auctor nunc. Nulla
              facilisis mauris vel elit finibus, sit amet ornare massa suscipit.
            </p>
          </div> 
        </div>
        <div class="col-7 no-gutters">
          <img src="./images/home/planes-copy.png" class="advertising-image"/>
        </div>
      </div>
    </div>
    `;

    $(".o-advertising-section").html(advertisingSection);
  } else if (
    window.matchMedia("(min-width: 992px) and (max-width: 2000px)").matches
  ) {
    /*Atoms*/
    const logo = document.querySelector(".logo");
    const menu_responsive = document.querySelector(".menu-responsive");

    logo.setAttribute("src", "./images/home/claro-networks-black.svg");

    menu_responsive.setAttribute(
      "src",
      "./images/home/menu-responsive-black.svg"
    );

    /*End Atoms */

    /* Molecules */

    /*Organismos*/

    var concertResponsiveHome = `
        <div class="d-flex justify-content-between align-items-center margin-bottom-75">
          <div class="m-home-titles">
            <h1 class="a-concert-channel-title">CONCERT CHANNEL</h1>
          </div>
          <div class="m-see-more">
            <button class="btn-pink">VER +</button>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-4 col-xl-6">
            <p class="a-concert-subtitle concert-first-subtitle">Conciertos</p>
            <p class="a-concert-subtitle concert-second-subtitle">Entrevistas y mucho más</p>
          </div>
          <div class="col-md-8 col-xl-6">
            <div class="row poster-pad-b">
              <div class="col poster-pad-r poster-section">
                  <div class="poster">
                    <div class="poster-image-small concert-poster-color">
                    </div>
                    <div class="a-concert-rectangle">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col poster-pad-l">
                    <div class="poster">
                      <div class="poster-image-small concert-poster-color"></div>
                      <div class="a-concert-rectangle">
                          <div class="poster-title-margin">
                              <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                          </div>
                      </div>
                    </div>
                  </div>
          </div>
          <div class="row poster-pad-t">
            <div class="col poster-pad-r">
                <div class="poster">
                  <div class="poster-image-small concert-poster-color"></div>
                  <div class="a-concert-rectangle ">
                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
                </div>
              </div>
              <div class="col poster-pad-l">
                  <div class="poster">
                    <div class="poster-image-small concert-poster-color"></div>
                    <div class="a-concert-rectangle ">
                      <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                    </div>
                  </div>
                </div>
            </div>
         </div>
        </div>
        <div class="d-flex align-items-center justify-content-between section-home-footer">
          <div>
            <img class="concert-footer-img" src="./images/home/concert-home-img.svg" alt="">
          </div>
          <div>
            <p class="horario-text text-white">
              Horario sujetos a cambios
            </p>
          </div>
        </div>
        `;
    $(".o-concert-section").html(concertResponsiveHome);

    var cinemaResponsiveHome = `
       
        <div class="d-flex justify-content-between align-items-center margin-bottom-75">
          <div class="m-home-titles">
            <h1 class="a-claro-cinema-title">CLARO <span>CINEMA</span></h1>
            <h2 class="a-subtitle">
              Las mejores <span class="a-subtitle-bold">Películas Mexicanas</span>
            </h2>
          </div>
          <div class="m-see-more">
            <button class="btn-red">VER +</button>
          </div>
        </div>
    
        <div class="row no-gutters">
          <div class="col-md-4 col-xl-6">
          </div>
          <div class="col-md-8 col-xl-6">
            <div class="row poster-pad-b">
              <div class="col poster-pad-r">
                  <div class="height-second-poster ">
                    <div class="poster-image-small poster-grey"></div>
                    <div class="a-cinema-rectangle">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col poster-pad-l">
                    <div class="height-second-poster">
                      <div class="poster-image-small poster-grey"></div>
                      <div class="a-cinema-rectangle">
                          <div class="poster-title-margin">
                              <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                          </div>
                      </div>
                    </div>
                  </div>
          </div>
          <div class="row poster-pad-t">
            <div class="col poster-pad-r">
                <div class="height-second-poster">
                  <div class="poster-image-small poster-grey"></div>
                  <div class="a-cinema-rectangle">
                      <div class="poster-title-margin">
                          <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col poster-pad-l">
                  <div class="height-second-poster">
                    <div class="poster-image-small poster-grey"></div>
                    <div class="a-cinema-rectangle">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
         </div>
        </div>
        <div class="d-flex align-items-center justify-content-between section-home-footer">
        <div>
          <img class="concert-footer-img" src="./images/home/cinema-home-img.svg" alt="">
        </div>
        <div>
          <p class="horario-text text-dark">
            Horario sujetos a cambios
          </p>
        </div>
      </div>`;
    $(".o-cinema-section").html(cinemaResponsiveHome);

    var visionResponsiveHome = `
        
        <div class="d-flex justify-content-between align-items-center margin-bottom-60">
          <div class="m-home-titles">
            <h1 class="a-our-vision-title">NUESTRA VISIÓN</h1>
            <h2 class="a-subtitle">
              SIÉNTETE <span class="a-subtitle-bold">COMO EN CASA</span>
            </h2>
          </div>
            <div class="m-see-more">
            <button class="btn-purple">VER +</button>
          </div>
        </div>
        <div class="row">
        <div class="m-auto col-xl-10">
          <div class="slick-slider">
              <div class="row no-gutters">
                  <div class="col columnGap">
                      <div class="height-second-poster">
                          <div class="poster-image pink-color">
                          </div>
                        <div class="a-vision-rectangle">
                            <div class="poster-title-margin">
                                <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row no-gutters">
                  <div class="col columnGap">
                      <div class="height-second-poster">
                        <div class="poster-image pink-color"></div>
                        <div class="image"></div>
                        <div class="a-vision-rectangle">
                            <div class="poster-title-margin">
                                <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image pink-color">
                              </div>
                          <div class="a-vision-rectangle">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row no-gutters">
                      <div class="col columnGap h-100">
                          <div class="height-second-poster h-100">
                            <div class="poster-image pink-color">
                            </div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between section-home-footer">
                <div>
                  <img class="concert-footer-img" src="./images/home/vision-home-img.svg" alt="">
                </div>
                <div>
                  <p class="horario-text text-dark">
                    Horario sujetos a cambios
                  </p>
                </div>
              </div>`;

    $(".o-vision-section").html(visionResponsiveHome);

    var claroResponsiveHome = `
        
        <div class="d-flex justify-content-between align-items-center margin-bottom-60">
        <div class="m-home-titles">
          <h1 class="a-claro-channel-title">CANAL CLARO</h1>
          <h2 class="a-subtitle">
            LO MEJOR EN SERIES Y <span class="a-claro-channel-subtitle-bold">PELÍCULAS INTERNACIONALES</span>
          </h2>
        </div>
        <div class="m-see-more">
          <button class="btn-red">VER +</button>
        </div>
       </div>
       <div class="row">
        <div class="m-auto col-xl-10">
          <div class="slick-slider">
              <div class="row no-gutters">
                  <div class="col columnGap h-100">
                      <div class="height-second-poster h-100">
                          <div class="poster-image pink-color">
                            </div>
                        <div class="a-vision-rectangle">
                            <div class="poster-title-margin">
                                <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
              <div class="row no-gutters">
                <div class="col columnGap h-100">
                    <div class="height-second-poster h-100">
                      <div class="poster-image pink-color"></div>
                      <div class="image"></div>
                      <div class="a-vision-rectangle">
                          <div class="poster-title-margin">
                              <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="row no-gutters">
                  <div class="col columnGap">
                      <div class="height-second-poster">
                          <div class="poster-image pink-color">
                            </div>
                        <div class="a-vision-rectangle">
                            <div class="poster-title-margin">
                                <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row no-gutters">
                  <div class="col columnGap">
                    <div class="height-second-poster">
                      <div class="poster-image pink-color">
                      </div>
                      <div class="a-vision-rectangle">
                          <div class="poster-title-margin">
                              <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between section-home-footer">
          <div>
            <img class="concert-footer-img" src="./images/home/claro-home-img.svg" alt="">
          </div>
          <div>
            <p class="horario-text text-white">
              Horario sujetos a cambios
            </p>
          </div>
      </div>`;
    $(".o-claro-section").html(claroResponsiveHome);

    var sportsResponsiveHome = `          
        <div class="d-flex justify-content-between align-items-center margin-bottom-50">
        <div class="m-home-titles">
          <h1 class="a-claro-sports-title">claro <span>sports</span></h1>
          <h2 class="a-subtitle">
            Las mejor en deportes <span class="a-subtitle-bold">al instante</span>
          </h2>
        </div>
        <div class="m-see-more">
          <button class="btn-red">VER +</button>
        </div>
      </div>
      <div class="row no-gutters d-flex align-items-center">
          <div class="col-md-4 col-xl-6">
            <h1 class="poster-title-sport">
              <span>Vive la </span>intensidad <span>del deporte</span>
            </h1>
          </div>
          <div class="col-md-8 col-xl-6">
            <div class="row no-gutters poster-pad-b">
              <div class="col margin-left-11 poster-margin-r">
    
              <div class=" poster-image poster-grey">
                <div class="transmission-panel">
                  <p class="transmission-text text-white">14:50 - 16:50</p>
                  <div class="transmission-add">
                    <span class="text-white">+</span>
                  </div>
                </div>
              </div>
              <div class="a-sports-rectangle">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>          
            </div>
                <div class="col poster-margin-l">
                    <div class="height-second-poster">
                      <div class="poster-image poster-grey">
                      <div class="transmission-panel">
                      <p class="transmission-text text-white">14:50 - 16:50</p>
                      <div class="transmission-add">
                        <span class="text-white">+</span>
                      </div>
                    </div>
                      </div>
    
                      <div class="a-sports-rectangle">
                          <div class="poster-title-margin">
                              <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                          </div>
                      </div>
                    </div>
                  </div>
          </div>
          </div>
        </div>
          <div class="d-flex align-items-center justify-content-between section-home-footer">
            <div>
              <img class="concert-footer-img" src="./images/home/sports-home-img.svg" alt="">
            </div>
            <div>
              <p class="horario-text text-dark">
                Horario sujetos a cambios
              </p>
            </div>
          </div>`;
    $(".o-sports-section").html(sportsResponsiveHome);

    var advertisingSection = `
        
        <div class="col-lg-12">
          <div class="row">
            <div class="col-5 m-auto">
              <div class="adv-headline-mb">
                <h1 class="advertising-title">Disfruta</h1>
                <h2 class="advertising-subtitle">La mejor programación</h2>
              </div>
              <div>
                <p class="advertising-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tellus
                  tellus, rutrum sit amet purus in, interdum auctor nunc. Nulla
                  facilisis mauris vel elit finibus, sit amet ornare massa suscipit.
                </p>
              </div> 
            </div>
            <div class="col-7 no-gutters">
              <img src="./images/home/planes-copy.png" class="advertising-image"/>
            </div>
          </div>
        </div>
        `;

    $(".o-advertising-section").html(advertisingSection);

    var footerCompanies = `
    <div class="d-flex margin-bottom-footer col-lg-12 col-xl-10 m-auto justify-content-between align-items-center">
    <div class="col footer-border-right">
      <img class="d-block m-auto footer-img" src="./images/home/sanborns-icon.svg" alt="">
    </div>
    <div class="col footer-border-right">
        <img class="d-block m-auto footer-img" src="./images/home/claro-musica-icon.svg" alt="">
    </div>
    <div class="col footer-border-right">
        <img class="d-block m-auto footer-img" src="./images/home/claro-video-icon.svg" alt="">
    </div>
    
    <div class="col footer-border-right">
      <img class="d-block m-auto footer-img" src="./images/home/fast-icon.svg" alt="">
    </div>
    <div class="col footer-border-right">
        <img class="d-block m-auto footer-img" src="./images/home/soumaya-icon.svg" alt="">
    </div>
    <div class="col footer-border-right">
        <img class="d-block m-auto footer-img" src="./images/home/claro-shop-icon.svg" alt="">
    </div>
    <div class="col">
        <img class="d-block m-auto footer-img" src="./images/home/fundacion-icon.svg" alt="">
    </div>
  </div>`;
    $(".footer-companies").html(footerCompanies);
  }
  var slick_slider = $(".slick-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    centerMode: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 2000,
          centerMode: true,
          infinite: false,
          arrows: false,
          dots: true
        }
      }
    ]
  });

  var tv_slider = $(".tv-slider").slick({
    /*slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    centerMode: true,
    infinite: false,
    arrows: false,
    dots: true,*/
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 2000,
          centerMode: true,
          infinite: false,
          arrows: false,
          dots: true
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
          centerMode: false,
          arrows: false
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
          centerMode: false,
          arrows: false
        }
      },
      {
        breakpoint: 2000,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
          centerMode: false,
          arrows: false
        }
      }
    ]
  });

  $(".prueba-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    centerMode: false,
    infinite: false,
    arrows: false,
    dots: true
  });

  /*menu responsive*/
  const invisible_button = document.querySelector(".invisible-button");
  const menu = document.querySelector(".menu-responsive");
  const hamburguer = document.querySelector(".hamburguer-menu");
  const body = $("body");
  const html = $("html");
  const sidebar_content = document.querySelector(".sidebar-content");
  menu.addEventListener("click", function(e) {
    hamburguer.style.transform = "translate(0%)";
    invisible_button.style.width = "2000px";
    invisible_button.style.left = "100%";
    invisible_button.style.background = "black";
    html.css({
      position: "relative",
      overflow: "hidden",
      height: "100%"
    });
    body.css({
      position: "fixed",
      overflow: "hidden",
      height: "100%",
      width: "100%"
    });
    sidebar_content.style.overflow = "auto";
    sidebar_content.style.height = "100%";
  });

  invisible_button.addEventListener("click", function() {
    hamburguer.style.transform = "translate(-100%)";
    invisible_button.style.width = "0px";
    invisible_button.style.left = "0%";
    invisible_button.style.background = "black";
    html.css({
      position: "initial",
      overflow: "auto",
      height: "auto"
    });
    body.css({
      position: "initial",
      overflowX: "hidden",
      overflowY: "auto",
      "-webkit-overflow-scrolling": "auto",
      height: "auto",
      width: "auto"
    });
    sidebar_content.style.overflow = "hidden";
    sidebar_content.style.height = "0%";
  });

  const navbar = document.querySelector(".menu");
  const video_home = document.querySelector(".circle-video");
  console.log(video_home);

  $("body").index(navbar);

  /***  Slider "Ahora en TV"  ****/
  const tvClaroSlider = $("#tv-claro-slider");
  const tvConcertSlider = $("#tv-concert-slider");
  const tvCinemaSlider = $("#tv-cinema-slider");
  const tvVisionSlider = $("#tv-vision-slider");
  const tvSportsSlider = $("#tv-sports-slider");

  $(".tv-content").hide();
  $(".tv-content:first").show();

  $("ul.tv-list li").click(function() {
    $("ul.tv-list li").removeClass("active-navItem");
    $(this).addClass("active-navItem");
    $(".tv-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();

    if (activeNav == "concert-channel") {
      tvConcertSlider.slick("refresh");
    } else if (activeNav == "claro-canal") {
      tvClaroSlider.slick("refresh");
    } else if (activeNav == "claro-cinema") {
      tvCinemaSlider.slick("refresh");
    } else if (activeNav == "nuestra-vision") {
      tvVisionSlider.slick("refresh");
    } else if (activeNav == "claro-sports") {
      tvSportsSlider.slick("refresh");
    }
  });

  /*** Fin Slider "Ahora en TV"  ***/

  /*** Dropdown del menú ***/
  /*const dropdown = document.getElementsByClassName("sidebar-dropdown");
  console.log(dropdown);

  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("dropdown-active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.animation = "hide-dropdown 0.5s";
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
        dropdownContent.style.animation = "active-dropdown 0.5s";
      }
    });
  }*/

  /*** Fin Dropdown del menú ***/

  /*inputs.keyup(function(){
    if(validaUsuario(input-usuario) && validaPassword(input-password) && validaEmail(input-email)){
        flecha.css("display", "block");
    }
  });

  signup-botton.click(function(){

    if(!validaUsuario()){
      modal.html("oihgiohiohoihoih");
    }else if(!validaPassword()){

    }

  });

  function validaUsuario() {
    if (usuario.length > 10) {
      return true;
    } else {
      return false;
    }
  }

  function validaPassword() {
    if (true) {
      return true;
    } else {
      return false;
    }
  }

  function validaEmail() {
    if (true) {
      return true;
    } else {
      return false;
    }
  }*/
});
