<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
    <input type="hidden" id="actual_landing" value="footer_concert_channel">
</head>

<body class="concert-container pt-5">


    <?php
        include 'advertising-section.php'
        ?>
    <div class="">
        <div class="row no-gutters">
            <div class="col-10 mx-auto">
                <h1 class="footer-title" id="redes_concert_channel_title">¡síguenos!</h1>
            </div>
        </div>
        <div class="social-media">
            <div class="d-flex align-items-center justify-content-center">
                <div class="social-item">
                    <a href="https://www.facebook.com/concertchannel/" target="_blank"
                        id="facebook_concert_channel_url">
                        <img class="social-icon" src="./images/redes/facebook-icon-green.svg" alt="icono-facebook"
                            id="facebook_concert_channel_icon"/>
                    </a>
                </div>
                <div class="social-item">
                    <a href="https://twitter.com/Concert_Channel" target="_blank" id="twitter_concert_channel_url">
                        <img class="social-icon" src="./images/redes/twitter-icon-green.svg" alt="icono-twitter"
                            id="twitter_concert_channel_icon"/>
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

    <script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
    <script>
        var socketFooterConcertChannel = new easyXDM.Socket({
            onReady: function () {
                socketFooterConcertChannel.postMessage(1050)
            },
        });
    </script>
</body>

</html>