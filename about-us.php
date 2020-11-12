<?php

session_start();

if($_SESSION["country"] != 1){
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<?php
include './views/partials/head.php';
?>

<body>
    <main>
        <?php
        include './views/partials/hamburguer-menu.php';
        ?>
        <div class="aboutus-container">
            <?php
            include './views/partials/menu-mobile-white.php';
            ?>
            <div class="menu-tablet-container">
                <?php
                include './views/partials/menu-tablet-black.php';
                ?>
            </div>
            <?php
            include './views/partials/menu-desktop-black.php';
            ?>
            <div class="aboutus-content no-gutters">
                <div class="col-11 col-xl-12 mx-auto">
                    <div class="text-center mb-3 mt-3 mt-xl-4 mb-xl-4">
                        <h3 class="h3 a-text-bold-greyish aboutus-title">QUIENES <span
                                class="a-text-medium-greyish">SOMOS</span></h3>
                    </div>
                    <div class="d-md-flex flex-wrap">
                        <div class="aboutus-card p-3 mb-5">
                            <div class="aboutus-card-header mb-3">
                                <h4 class="text-normal a-text-bold-tealblue pb-3">Claro Networks</h4>
                            </div>
                            <div class="aboutus-card-body mb-4 pb-5">
                                <p class="a-text-medium-greyish ">
                                    Claro Networks es la unidad de negocio de América Móvil, (la empresa de
                                    telecomunicaciones más grande del mundo), que produce, opera y transmite canales de
                                    televisión de paga para América Latina y TV abierta para el mercado hispano de los
                                    Estados Unidos de América. Se compone de cinco canales especializados y segmentados
                                    para llevar contenidos relevantes y entretenidos para toda la familia.
                                </p>
                            </div>
                            <div class="aboutus-card-footer pb-4 text-center">
                                <img src="./images/home/claro-logo.svg" alt="logo-claro-networks"
                                    class="aboutus-card-claro-networks-image"/>
                            </div>
                        </div>
                        <div class="aboutus-card p-3 mb-5">
                            <div class="aboutus-card-header mb-3">
                                <h4 class="text-normal a-text-bold-tealblue pb-3">Canal Claro</h4>
                            </div>
                            <div class="aboutus-card-body mb-4 pb-5">
                                <p class="a-text-medium-greyish ">
                                    Entretenimiento por donde lo veas. En Canal Claro tenemos programación hecha para
                                    que disfruten desde los más pequeños hasta los más grandes. Las series que te hacen
                                    emocionarte, las películas con historias que te atraparán, los ánimes y los héroes
                                    que compartirán sus aventuras contigo. Y producciones propias que te informarán, te
                                    invitarán a ponerte en forma y te mostrarán todo lo que no conocías sobre las
                                    celebridades. Encender tu televisor a cualquier hora es garantía de entretenimiento
                                    con Canal Claro.
                                </p>
                            </div>
                            <div class="aboutus-card-footer pb-4 text-center">
                                <img src="./images/home/tv-1.svg" alt="logo-claro-canal" class="aboutus-card-canal-claro-image"/>
                            </div>
                        </div>
                        <div class="aboutus-card p-3 mb-5">
                            <div class="aboutus-card-header mb-3">
                                <h4 class="text-normal a-text-bold-tealblue pb-3">Claro Cinema</h4>
                            </div>
                            <div class="aboutus-card-body mb-4 pb-5">
                                <p class="a-text-medium-greyish ">
                                    México es un país fantástico, encantador, lleno de historias, leyendas, ocurrencias,
                                    y sucesos peculiares. Obviamente, su cine tenía que reflejar todo esto y más. En
                                    Claro Cinema te encontrarás con íconos que marcaron época: la trilogía de Ismael
                                    Rodríguez, el inigualable lenguaje de René Cardona; las inolvidables actuaciones de
                                    Pedro Infante, María Félix, Miroslava, entre otros; la peculiar galantería de
                                    Mauricio Garcés o la, todavía mayor, de Alfonso Zayas. Con una mirada única a las
                                    películas que hicieron época, descubrirás que el cine mexicano está más vivo que
                                    nunca.
                                </p>
                            </div>
                            <div class="aboutus-card-footer pb-4 text-center">
                                <img src="./images/home/tv-3.svg" alt="logo-claro-cinema" class="aboutus-card-claro-cinema-image"/>
                            </div>
                        </div>
                        <div class="aboutus-card p-3 mb-5">
                            <div class="aboutus-card-header mb-3">
                                <h4 class="text-normal a-text-bold-tealblue pb-3">Concert Channel</h4>
                            </div>
                            <div class="aboutus-card-body mb-4 pb-5">
                                <p class="a-text-medium-greyish ">
                                    La música es el idioma universal, los conciertos se convierten en una hermandad de
                                    fanáticos, y Concert Channel te lleva a la primera fila de los mejores. En este
                                    canal podrás encontrar ejecuciones virtuosas, eventos emblemáticos, festivales que
                                    no te puedes perder e incluso, podrás descubrir a tus nuevos ídolos. Queen, Black
                                    Sabbath, Beyoncé, Billie Eilish, entre muchos otros. Súbele el volumen a la música
                                    para disfrutar los eventos como si estuvieras en vivo.
                                </p>
                            </div>
                            <div class="aboutus-card-footer pb-4 text-center">
                                <img src="./images/home/tv-2.svg" alt="logo-concert-channel" class="aboutus-card-concert-channel-image"/>
                            </div>
                        </div>
                        <div class="aboutus-card p-3 mb-5">
                            <div class="aboutus-card-header mb-3">
                                <h4 class="text-normal a-text-bold-tealblue pb-3">Nuestra Visión</h4>
                            </div>
                            <div class="aboutus-card-body mb-4 pb-5">
                                <p class="a-text-medium-greyish ">
                                    Nuestra Visión es el canal hecho para los mexicanos que están del otro lado de la
                                    frontera. Con una cobertura que día con día llega a más telehogares, Nuestra Visión
                                    ofrece una programación que va desde el cine de oro con ídolos como Pedro Infante,
                                    María Félix, Mauricio Garcés, y muchos más, hasta las noticias de actualidad,
                                    pasando por programas infantiles, deportes, entrevistas y un gran repertorio de
                                    entretenimiento. Eso sí, con el toque que caracteriza a los mexicanos. Por ello,
                                    Nuestra Visión es el canal que te acerca a México aunque estés muy lejos.
                                </p>
                            </div>
                            <div class="aboutus-card-footer pb-4 text-center">
                                <img src="./images/home/tv-4.svg" alt="logo-nuestra-vision" class="aboutus-card-nuestra-vision-image"/>
                            </div>
                        </div>
                        <div class="aboutus-card p-3 mb-5">
                            <div class="aboutus-card-header mb-3">
                                <h4 class="text-normal a-text-bold-tealblue pb-3">Claro Sports</h4>
                            </div>
                            <div class="aboutus-card-body mb-4 pb-5">
                                <p class="a-text-medium-greyish ">
                                    Ser un fanático de los deportes es un trabajo de veinticuatro horas. En Claro Sports
                                    lo entendemos a la perfección. Con gran profesionalismo en el análisis, las
                                    narraciones y capacidad de transmisión llevamos a tu televisión los eventos más
                                    importantes de un sinnúmero de disciplinas deportivas. Somos el broadcaster oficial
                                    de los Juegos Olímpicos desde Río 2016, en donde creamos una experiencia única para
                                    el telespectador con transmisiones multipantallas y en cualquier dispositivo.
                                    Experiencia que se repetirá en las justas olímpicas de Tokio, París y Los Ángeles.
                                </p>
                            </div>
                            <div class="aboutus-card-footer pb-4 text-center">
                                <img src="./images/home/tv-5.svg" alt="logo-claro-sports" class="aboutus-card-claro-sports-image"/>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </main>

</body>

</html>