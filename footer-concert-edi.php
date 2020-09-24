<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
    <input type="hidden" id="actual_landing" value="claro_cinema">

</head>

<body class="concert-container">

    <div class=" border-t border-l border-r border-b position-relative m-5 ml-5 mr-5">
        <img src="./images/General/pencil.svg" alt="" class="pencil pencil-carrusel-main" type="footer-concert-channel">

        <?php
        include 'advertising-section.php'
        ?>
        <div class="">
            <div class="row no-gutters">
                <div class="col-10 mx-auto">
                    <h1 class="footer-title">¡síguenos!</h1>
                </div>
            </div>
            <div class="social-media">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="social-item">
                        <a href="https://www.facebook.com/concertchannel/" target="_blank">
                            <img class="social-icon" src="./images/redes/facebook-icon-green.svg" alt="">
                        </a>
                    </div>
                    <div class="social-item">
                        <a href="https://twitter.com/Concert_Channel" target="_blank">
                            <img class="social-icon" src="./images/redes/twitter-icon-green.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cconcert-list-links-footer">
            <?php
            include './views/partials/list-links-footer.php';
            ?>
        </div>
        <footer>
            <?php
            include 'footer.php'
            ?>
        </footer>
    </div>
    <script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
    <script>
        var socketFooterConcertChannel = new easyXDM.Socket({
            onReady: function () {
                socketFooterConcertChannel.postMessage(1092)
            }
        });
        $(".pencil").click(function () {
            let data = {
                type: $(this).attr("type")
            }
            var json = JSON.stringify(data);
            socketFooterConcertChannel.postMessage(json);
        });
    </script>
</body>

</html>