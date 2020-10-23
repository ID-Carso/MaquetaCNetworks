<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './views/partials/head.php' ?>
  <input type="hidden" id="actual_landing" value="footer_claro_cinema">

</head>

<body class="claro-cinema-content">
  <div class=" border-t border-l border-r border-b position-relative m-5 ml-5 mr-5">
    <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-carrusel-main" type="footer-claro-cinema"/>

    <section>
      <?php
        include 'advertising-section.php';
        ?>
      <div class="ccinema-list-links-footer">
        <?php
          include './views/partials/list-links-footer.php';
          ?>
      </div>
    </section>
    <footer>
      <?php
        include 'footer.php';
        ?>
    </footer>
  </div>
  <script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
  <script>
    var socketFooterClaroCinema = new easyXDM.Socket({
      onReady: function () {
        socketFooterClaroCinema.postMessage(1000)
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

        $('#f-title1').text(json.data.menu_1_opcion_1_title);
        $('#f-title2').text(json.data.menu_1_opcion_2_title);
        $('#f-title3').text(json.data.menu_1_opcion_3_title);
        $('#f-title4').text(json.data.menu_1_opcion_4_title);
        $('#f-title5').text(json.data.menu_1_opcion_5_title);
        $('#f-title6').text(json.data.menu_1_opcion_6_title);

        $('.about_icon').attr("src", json.data.about_icon);
        $('.about_legend').text(json.data.about_legend);

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
      socketFooterClaroCinema.postMessage(json);
    });
  </script>
</body>

</html>