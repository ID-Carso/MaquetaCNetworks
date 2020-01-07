<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claro Networks - Backoffice</title>
    <link rel="stylesheet" href="../styles/bootstrap-4.4.1/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <script src="../js/lib/easyXDM.min.js"></script>
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
        <div class="col-11 mx-auto">
            <div class="o-prev-options-container">
                <p class="a-text-black-light a-prev-title">previsualizar</p>
                <div>
                    <img src="./images/mobile.png" class="a-prev-image" alt="mobile">
                    <img src="./images/tablet.svg" class="a-prev-image" alt="tablet">
                    <img src="./images/pc.svg" class="a-prev-image" alt="pc">
                </div>
            </div>
            <div>
                <p class="a-text-black-bold">HOME</p>
                <button class="a-text-white a-button-basic a-button-blue">Guardar Edición</button>
            </div>
            <div class="o-home-office-container"></div>
        </div>

    </main>

</body>

</html>