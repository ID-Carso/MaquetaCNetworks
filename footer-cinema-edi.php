<head>
  <?php include './views/partials/head.php' ?>
  <input type="hidden" id="actual_landing" value="claro_cinema">

</head>
<body class="claro-cinema-content">
<div class=" border-t border-l border-r border-b position-relative m-5 ml-5 mr-5">
                    <img src="./images/General/pencil.svg" alt="" class="pencil pencil-carrusel-main" type="home-claro-carrousel-main">

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

</body>