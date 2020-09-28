<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>

</head>

<body>


    <main class="today">
        <div class=" border-t border-l border-r border-b position-relative m-5 ml-5 mr-5">
            <img src="./images/General/pencil.svg" alt="" class="pencil pencil-carrusel-main"
                type="footer-claro-networks">
            <?php
    include 'advertising-section.php'
    ?>

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
        var socketFooterNetworks = new easyXDM.Socket({
            onReady: function () {
                socketFooterNetworks.postMessage(document.body.scrollHeight)
            }
        });
        $(".pencil").click(function () {
            let data = {
                type: $(this).attr("type")
            }
            var json = JSON.stringify(data);
            socketFooterNetworks.postMessage(json);
        });
    </script>
</body>