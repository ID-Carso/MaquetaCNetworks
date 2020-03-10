class Menu {
  renderMenuWhite() {
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

    $("#menu-white").html();
  }
}
