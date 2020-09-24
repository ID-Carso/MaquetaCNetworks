<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './views/partials/head.php' ?>
  <input type="hidden" id="actual_landing" value="claro_cinema">

</head>

<body class="claro-cinema-content">
  <div class=" border-t border-l border-r border-b position-relative m-5 ml-5 mr-5">
    <img src="./images/General/pencil.svg" alt="" class="pencil pencil-carrusel-main" type="footer-claro-cinema">

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
        socketFooterClaroCinema.postMessage(1092)
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