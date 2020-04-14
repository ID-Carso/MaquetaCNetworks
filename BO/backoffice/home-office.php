<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claro Networks - Backoffice</title>
    <link rel="shortcut icon" type="image/png" href="../images/favicon/claro-fav.png" />
    <link rel="stylesheet" href="../styles/bootstrap-4.4.1/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <script src="../js/lib/jquery-3.4.1.min.js"></script>
    <script src="../js/lib/easyXDM.min.js"></script>
    <script src="./js/main.js" type="module"></script>
    <script type="text/javascript">
        new easyXDM.Socket({
            remote: "home.php",
            container: "o-home-office-container",
            onMessage: function(message, origin) {
                console.log(message);
                this.container.getElementsByTagName("iframe")[0].setAttribute("scrolling", "no");
                this.container.getElementsByTagName("iframe")[0].style.height = message + "px";

                //this.container.getElementsByTagName("iframe")[0].style.width = "800px";
            }
        });
    </script>
</head>

<body>
    <main>
        <?php
        $nameButton = "Historial home";
        $nameSection = "home";
        include 'header-office.php';

        showHeader($nameButton, $nameSection, 2);
        ?>
        <div class="col-11 mx-auto mb-5 mt-5">

            <div class="d-flex justify-content-between align-items-end">
                <div>
                    <p class="a-text-black-bold a-edition-title">HOME</p>
                </div>
                <div class="">
                    <p class="a-text-black-light a-prev-title">previsualizar</p>
                    <div>
                        <img src="./images/mobile.svg" class="a-prev-image" alt="mobile" id="prev-mobile">
                        <img src="./images/tablet.svg" class="a-prev-image" alt="tablet" id="prev-tablet">
                        <img src="./images/pc.svg" class="a-prev-image" alt="pc" id="prev-desktop">
                    </div>

                </div>
            </div>

            <div>
                <button class="a-text-white a-button-basic a-button-green a-button-save mr-xl-2">Aprobar cambios</button>
                <button class="a-text-white a-button-basic a-button-red a-button-save mr-xl-2">Rechazar cambios</button>
                <button class="a-text-white a-button-basic a-button-blue a-button-save">Guardar Edición</button>
            </div>

            <div class="o-prev-options-container d-flex justify-content-between">
                <div>
                    <span class="a-text-black-bold">Última Edición: </span>
                    <span class="a-text-black-light ml-4"> septiembre 17 2019 | 18:33:25</span>
                </div>
                <div>
                    <span class="a-text-black-bold">Por: </span>
                    <span class="a-text-black-light ml-4"> Juan Carlos | Usuario Limitado</span>
                </div>
            </div>

            <div class="o-home-office-container"></div>
        </div>

    </main>

</body>

</html>