<!DOCTYPE html>
<html lang="en">

<head>

  <?php include './views/partials/head.php' ?>
  <input type="hidden" id="actual_landing" value="footer_canal_claro">

</head>

<body>


  <main class="today">
    <div class=" border-t border-l border-r border-b position-relative m-5 ml-5 mr-5">
      <img src="./images/General/pencil.svg" alt="" class="pencil pencil-carrusel-main" type="footer-canal-claro">
      <?php
    include 'advertising-section.php'
    ?>
      <div class="">
        <div class="row no-gutters">
          <div class="col-12">
            <h1 class="footer-title-claro" id="redes_canal_claro_title">¡síguenos!</h1>
          </div>
          <div class="social-media">
            <div class="col ">
              <a href="https://www.facebook.com/CanalClaro/" target="_blank" id="facebook_canal_claro_url">
                <img class="social-icon" src="./images/redes/facebook-icon-red.svg" alt=""
                  id="facebook_canal_claro_icon" />
              </a>
            </div>
            <div class="col">
              <a href="https://www.instagram.com/canalclaro/?hl=es-la" target="_blank" id="instagram_canal_claro_url">
                <img class="social-icon" src="./images/redes/insta-icon-red.svg" alt=""
                  id="instagram_canal_claro_icon" />
              </a>
            </div>
            <div class="col">
              <a href="https://twitter.com/canalclaro" target="_blank" id="twitter_canal_claro_url">
                <img class="social-icon" src="./images/redes/twitter-icon-red.svg" alt=""
                  id="twitter_canal_claro_icon" />
              </a>
            </div>
            <div class="col">
              <a href="https://www.youtube.com/user/CanalClaroTV" target="_blank" id="youtube_canal_claro_url">
                <img class="social-icon" src="./images/redes/youtube-icon-red.svg" alt=""
                  id="youtube_canal_claro_icon" />
              </a>
            </div>
          </div>
        </div>
        <div class="cclaro-list-links-footer">
          <?php
      include './views/partials/list-links-footer.php';
      ?>
        </div>

        <?php
  include 'footer.php'
  ?>
      </div>
  </main>
  <script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
  <script>
    var socketFooterCanalClaro = new easyXDM.Socket({
      onReady: function () {
        socketFooterCanalClaro.postMessage(1192)
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


        $('#facebook_canal_claro_icon').attr("src", json.data.facebook_canal_claro_icon)
        $('#instagram_canal_claro_icon').attr("src", json.data.instagram_canal_claro_icon)
        $('#twitter_canal_claro_icon').attr("src", json.data.twitter_canal_claro_icon)
        $('#youtube_canal_claro_icon').attr("src", json.data.youtube_canal_claro_icon)

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
      socketFooterCanalClaro.postMessage(json);
    });
  </script>
</body>

</html>