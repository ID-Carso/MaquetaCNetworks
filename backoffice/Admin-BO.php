<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include 'styles.php';
    include 'scripts.php';
    ?>
   <script src="./js/admin.js" defer></script>
  
</head>
<body class="scroll">

    <main>
        <?php
        $nameButton = "Cerrar sesión";
       // $nameSection = "Home";
        include 'header-office.php';
       showHeader($nameButton, 1);
        ?>
         <nav class='navbar navbar-expand-sm mx-auto 'style ="display:flex; justify-content:space-around; margin-top:-10px">
            <ul class='navbar-nav'>
              <li class='nav-item'>
                <button  class=' buttonall btn-nav btn-nav-select ml-xl-4 pr-4 pl-4 textbottom 'type='button' id="btn-nav"   rel='Admin-home-BO' onClick="muestra1()">Administrar sitio</button>       
              </li>
              <li class='nav-item'>
                <button class='  buttonall btn-nav ml-xl-4 textbottom pr-2 pl-2 ' type='button' id="btn-nav" rel='Adm-users-BO' onClick="muestra2()" >Administrar usuario BO</button>
              </li>
              <li class='nav-item'>
                <button class='  buttonall btn-nav ml-xl-4 textbottom pr-1 pl-1 ' type='button' id="btn-nav"  rel='Admin-users-Front'onClick="muestra3()">Administrar usuarios Front</button>
                
              </li>
            </ul>
            
          </nav>
          <hr class=' mt-2 ml-3 mr-3'/>  
          <br>
          <div id="cambio" >         
          <?php include 'admin-home.php'?>  


</div>

          </main>
          
</body>

 
            
</html>