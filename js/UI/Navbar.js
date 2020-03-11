export default class Navbar {
  renderMenuWhite() {
    let menuWhite = $("#menu-white");
    let menuMobileWhite = `
        <nav class="navbar-white">
            <div class="nav-content">
                <div class="claro-logo">
                    <img class="menu-responsive" src="../images/aboutus/hamburger-about-us.svg" alt="" />
                    <div class="d-flex justify-content-center">
                        <a href="home.php">
                            <img class="logo" src="../images/home/claro-logo.svg" alt="" />
                        </a>
                    </div>
                </div>
        
                <div class="login">
                    <a href="index.php" class="login-item"><img class="login-country" alt="" /></a>
                </div>
            </div>
        </nav>
        `;
    let menuTabletWhite = `
    <nav class="navbar-white">
        <div class="nav-content">
            <div class="nav-logo">
                <img class="menu-responsive" src="../images/aboutus/hamburger-about-us.svg" alt="" />
                <a href="home.php">
                    <img class="logo" src="../images/home/claro-logo.svg" alt="" />
                </a>

            </div>

            <div class="nav-country-image">
                <a href="index.php" class="login-item"><img src="" class="login-country" alt="" /></a>
            </div>
        </div>
    </nav>
    `;

    let menuDesktopWhite = `    
    <nav class="navbar-white">
        <div class="nav-content">
            <div class="claro-logo">
                <img class="menu-responsive" src="../images/aboutus/hamburger-about-us.svg" alt="" />
                <div class="d-flex justify-content-center">
                    <a href="home.php">
                        <img class="logo" src="../images/home/claro-logo.svg" alt="" />
                    </a>
                </div>
            </div>

            <div class="login">
                <a href="index.php" class="login-item"><img class="login-country" alt="" /></a>
            </div>
        </div>
    </nav>`;

    if ($(window).width() < 768) {
      menuWhite.html(menuMobileWhite);
      console.log("Menu Móvil");
    } else if ($(window).width() < 1200) {
      menuWhite.html(menuTabletWhite);
      console.log("Menu Tablet");
    } else if ($(window).width() >= 1200) {
      menuWhite.html(menuDesktoptWhite);
      console.log("Menu Desktop");
    }
    $(window).resize(function() {
      let countryFlag = localStorage.getItem("src");
      menuMobileWhite = `
        <nav class="navbar-white">
            <div class="nav-content">
                <div class="claro-logo">
                    <img class="menu-responsive" src="../images/aboutus/hamburger-about-us.svg" alt="" />
                    <div class="d-flex justify-content-center">
                        <a href="home.php">
                            <img class="logo" src="../images/home/claro-logo.svg" alt="" />
                        </a>
                    </div>
                </div>
        
                <div class="login">
                    <a href="index.php" class="login-item"><img src="${countryFlag}" class="login-country" alt="" /></a>
                </div>
            </div>
        </nav>
        `;
      let menuTabletWhite = `
        <nav class="navbar-white">
            <div class="nav-content">
                <div class="nav-logo">
                    <img class="menu-responsive" src="../images/aboutus/hamburger-about-us.svg" alt="" />
                    <a href="home.php">
                        <img class="logo" src="../images/home/claro-logo.svg" alt="" />
                    </a>
    
                </div>
    
                <div class="nav-country-image">
                    <a href="index.php" class="login-item"><img src="${countryFlag}" class="login-country" alt="" /></a>
                </div>
            </div>
        </nav>
        `;
      let menuDesktopWhite = `    
        <nav class="navbar-white">
            <div class="nav-content">
                <div class="claro-logo">
                    <img class="menu-responsive" src="../images/aboutus/hamburger-about-us.svg" alt="" />
                    <div class="d-flex justify-content-center">
                        <a href="home.php">
                            <img class="logo" src="../images/home/claro-logo.svg" alt="" />
                        </a>
                    </div>
                </div>
    
                <div class="login">
                    <a href="index.php" class="login-item"><img src="${countryFlag}" class="login-country" alt="" /></a>
                </div>
            </div>
        </nav>`;

      menuWhite.html("");
      if ($(window).width() < 768) {
        menuWhite.html(menuMobileWhite);
        console.log("Menu Móvil");
      } else if ($(window).width() < 1200) {
        menuWhite.html(menuTabletWhite);
        console.log("Menu Tablet");
      } else if ($(window).width() >= 1200) {
        menuWhite.html(menuDesktoptWhite);
        console.log("Menu Desktop");
      }
    });
  }
}
