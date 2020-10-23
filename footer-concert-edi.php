<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
    <input type="hidden" id="actual_landing" value="footer_concert_channel">
</head>

<body class="concert-container">

    <div class=" border-t border-l border-r border-b position-relative m-5 ml-5 mr-5">
        <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-carrusel-main" type="footer-concert-channel"/>

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
    </div>
    <script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
    <script>
        var socketFooterConcertChannel = new easyXDM.Socket({
            onReady: function () {
                socketFooterConcertChannel.postMessage(1192)
            },
            onMessage: function (message, origin) {
                let json = JSON.parse(message);

                //Right image
                $('#footer_image_right_mob').attr("src", json.data.image_right)
                $('#footer_image_right_tablet').attr("src", json.data.image_right)
                $('#footer_image_right_desk').attr("src", json.data.image_right)
                $('#footer_image_left_desk').attr("src", json.data.image_left)
                $('#footer_image_left_tablet').attr("src", json.data.image_left)
                $('#footer_image_left_mob').attr("src", json.data.image_left)

                //Social media
                $('#facebook_concert_channel_icon').attr("src", json.data.facebook_concert_channel_icon)
                $('#twitter_concert_channel_icon').attr("src", json.data.twitter_concert_channel_icon)

                $('#f-title1').text(json.data.menu_1_opcion_1_title);
                $('#f-title2').text(json.data.menu_1_opcion_2_title);
                $('#f-title3').text(json.data.menu_1_opcion_3_title);
                $('#f-title4').text(json.data.menu_1_opcion_4_title);
                $('#f-title5').text(json.data.menu_1_opcion_5_title);
                $('#f-title6').text(json.data.menu_1_opcion_6_title);

                $('#about_icon').attr("src", json.data.about_icon);
                $('#about_legend').text(json.data.about_legend);

                $('.about_link_1_title').text(json.data.about_link_1_title)
                $('.about_link_2_title').text(json.data.about_link_2_title)

                $('#menu_2_opcion_1_icon').attr("src", json.data.menu_2_opcion_1_icon)
                $('#menu_2_opcion_2_icon').attr("src", json.data.menu_2_opcion_2_icon)
                $('#menu_2_opcion_3_icon').attr("src", json.data.menu_2_opcion_3_icon)
                $('#menu_2_opcion_4_icon').attr("src", json.data.menu_2_opcion_4_icon)
                $('#menu_2_opcion_5_icon').attr("src", json.data.menu_2_opcion_5_icon)
                $('#menu_2_opcion_6_icon').attr("src", json.data.menu_2_opcion_6_icon)
                $('#menu_2_opcion_7_icon').attr("src", json.data.menu_2_opcion_7_icon)
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