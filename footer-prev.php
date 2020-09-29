<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>

</head>

<body>

    <input type="hidden" id="actual_landing" value="footer_home">
    <main class="today">
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



    </main>
    <script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
    <script>
        var socketFooterNetworks = new easyXDM.Socket({
            onReady: function () {
                socketFooterNetworks.postMessage(document.body.scrollHeight)
            },

        });
    </script>
</body>