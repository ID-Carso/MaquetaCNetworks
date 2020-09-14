<head>
  <?php include './views/partials/head.php' ?>

</head>
<body>
    

<main class="today">
    <div class=" border-t border-l border-r border-b position-relative m-5 ml-5 mr-5">
                    <img src="./images/General/pencil.svg" alt="" class="pencil pencil-carrusel-main" type="home-claro-carrousel-main">
<?php
    include 'advertising-section.php'
    ?>
    <div class="">
      <div class="row no-gutters">
        <div class="col-12">
          <h1 class="footer-title-claro">¡síguenos!</h1>
        </div>
        <div class="social-media">
          <div class="col ">
            <a href="https://www.facebook.com/CanalClaro/" target="_blank">
              <img class="social-icon" src="./images/redes/facebook-icon-red.svg" alt="" />
            </a>
          </div>
          <div class="col">
            <a href="https://www.instagram.com/canalclaro/?hl=es-la" target="_blank">
              <img class="social-icon" src="./images/redes/insta-icon-red.svg" alt="" />
            </a>
          </div>
          <div class="col">
            <a href="https://twitter.com/canalclaro" target="_blank">
              <img class="social-icon" src="./images/redes/twitter-icon-red.svg" alt="" />
            </a>
          </div>
          <div class="col">
            <a href="https://www.youtube.com/user/CanalClaroTV" target="_blank">
              <img class="social-icon" src="./images/redes/youtube-icon-red.svg" alt="" />
            </a>
          </div>
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
  </body>