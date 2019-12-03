<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./slick-master/slick/slick.css" />
    <link rel="stylesheet" href="./slick-master/slick/slick-theme.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="slick-master/slick/slick.js"></script>
    <script src="./js/jquery.browser.js"></script>
    <script src="./js/lib/rellax.js"></script>
    <script src="./js/lib/easyXDM.min.js"></script>
    <script src="./js/main.js" type="module"></script>
    <script type="text/javascript">
        new easyXDM.Socket({
            remote: "https://www.marca.com/claro-mx/",
            container: document.getElementById("container"),
            onMessage: function(message, origin) {
                this.container.getElementsByTagName("iframe")[0].style.height = message + "px";
            }
        });
    </script>
    <title>Document</title>
</head>
<style>
    iframe {
        width: 100%;
        height: 100%;
        border: none;
        top: 0 !important;
    }
</style>

<body>
    <header class="marca-header">
        <div class="hamburguer-menu">
            <div class="text-center">
                <a href="home.php"><img src="./images/menu/claro-networks-sidebar.svg" alt="" class="logo-sidebar"></a>
            </div>
            <a href="home.php" class="sidebar-link">
                <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                    <span class="dropdown-p">Inicio</span>
                </div>
            </a>
            <div class="sidebar-content">
                <a href="claro-canal.php" class="sidebar-link">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Canal Claro</span>
                    </div>
                </a>
                <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
                <a href="concert-channel.php" class="sidebar-link">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p ">Concert
                            Channel</span>
                    </div>
                </a>
                <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
                <a class="sidebar-link" href="claro-cinema.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Claro Cinema</span>
                    </div>
                </a>
                <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
                <a class="sidebar-link" href="nuestra-vision.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Nuestra
                            Visión</span>
                    </div>
                </a>
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p active-sidebar-item">Claro
                        Sports</span>
                </div>
                <a class="sidebar-link" href="programacion.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Programación</span>
                    </div>
                </a>
                <!--prueba sidebar-->
            </div>
            <button class="invisible-button"></button>
        </div>
        <div class="header">
            <nav class="menu">
                <div class="nav-content">
                    <div class="claro-logo">
                        <img class="menu-responsive" src="./images/home/responsive-menu.svg" alt="" />

                        <a href="home.php"><img class="logo" src="./images/home/claro-logo.png" alt="" /></a>
                    </div>

                    <div class="login">
                        <a href="login.html" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
                        <a href="index.html" class="login-item"><img src="" alt="" class="login-country" /></a>
                    </div>
                </div>
            </nav>
            <nav class="menu-tablet">
                <div class="nav-content">
                    <div class="claro-logo">
                        <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

                        <img class="logo" src="./images/home/claro-networks-black.svg" alt="" />
                    </div>

                    <div class="login">
                        <a href="login.html" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
                        <a href="index.html" class="login-item"><img src="" alt="" class="login-country" /></a>
                    </div>
                </div>
            </nav>

        </div>
        <?php
        include 'menu-desktop.php';
        ?>
    </header>
    <div class="marca-container">
        <div id="container"></div>
    </div>



</body>
<script type="text/javascript">
    var socket = new easyXDM.Socket({
        onReady: function() {
            socket.postMessage(document.body.scrollHeight)
        }
    });
</script>

</html>