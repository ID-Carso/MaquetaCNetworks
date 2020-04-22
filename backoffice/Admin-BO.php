<?php
session_start();


if (!isset($_SESSION["session"])) {
  header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php
  include 'scripts.php';
  include
    'styles.php';
  ?>


</head>

<body class="scroll">

  <main>
    <!--header-->
    <?php
    $nameButton = "Cerrar sesión";
    // $nameSection = "Home";
    include 'header-office.php';
    showHeader($nameButton, 1, $_SESSION["name_user"], $_SESSION["rol"]);
    ?>
    <!--Botones de navegación-->
    <nav class='navbar navbar-expand-sm mx-auto ' style="display:flex; justify-content:space-around; margin-top:-10px">
      <ul class='navbar-nav'>
        <li class='nav-item'>
          <button class='buttonall btn-nav btn-nav-select ml-xl-4 pr-4 pl-4  ' type='button' id="btn-nav" rel='Admin-home-BO' onClick="muestra1()">Administrar sitio</button>
        </li>
        <?php
        if ($_SESSION['rol_id'] == 1) {
          echo "        
            <li class='nav-item'>
              <button class='admin-users-section  buttonall btn-nav ml-xl-4 pr-2 pl-2 ' type='button' id='btn-nav' rel='Adm-users-BO'>Administrar usuario BO</button>
            </li>
            <li class='nav-item'>
              <button class='admin-users-front-section  buttonall btn-nav ml-xl-4 pr-1 pl-1 ' type='button' id='btn-nav' rel='Admin-users-Front'>Administrar usuarios Front</button>
            </li>
            ";
        } else {
          echo "        
          <li class='nav-item'>
            <button class='disabled-option buttonall btn-nav ml-xl-4 pr-2 pl-2 ' type='button' id='btn-nav'>Administrar usuario BO</button>
          </li>
          <li class='nav-item'>
            <button class='disabled-option buttonall btn-nav ml-xl-4 pr-1 pl-1 ' type='button' id='btn-nav'>Administrar usuarios Front</button>
          </li>
          ";
        }
        ?>
      </ul>

    </nav>
    <hr class=' mt-2 ml-3 mr-3' />
    <br>
    <div id="cambio">
      <!--Div para el cambio-->
      <?php include 'admin-home.php' ?>
      <!--Carga de div's-->
    </div>
  </main>

</body>



</html>