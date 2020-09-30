<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
    <input type="hidden" id="actual_landing" value="footer_claro_cinema">

</head>

<body class="claro-cinema-content">



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

    <script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
    <script>
        var socketFooterClaroCinema = new easyXDM.Socket({
            onReady: function () {
                socketFooterClaroCinema.postMessage(1092)
            },

        });
    </script>
</body>

</html>