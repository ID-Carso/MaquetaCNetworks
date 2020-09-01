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
                <img class="menu-responsive-tablet" src="../images/aboutus/hamburger-about-us.svg" alt="" />
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
    <nav class="menu-desktop">
    <div class="nav-content">
        <div class="claro-logo">

            <a href="home.php"><img class="logo" src="./images/home/claro-logo.svg" alt="" /></a>
        </div>

        <div class="user-options">
        </div>
    </div>
    <div class="claro-navbar">
        <div>
            <a href="claro-canal.php" class="navbar-link text-decoration-none">
                <p class="navbar-item-black text-semibold">Canal Claro</p>
            </a>
        </div>
        <div>
            <a href="concert-channel.php" class="navbar-link text-decoration-none">
                <p class="navbar-item-black text-semibold">Concert Channel</p>
            </a>
        </div>
        <div>
            <a href="claro-cinema.php" class="navbar-link text-decoration-none">
                <p class="navbar-item-black text-semibold">Claro Cinema</p>
            </a>
        </div>
        <div>
            <a href="https://nuestravision.tv" class="navbar-link text-decoration-none">
                <p class="navbar-item-black text-semibold">Nuestra Visión</p>
            </a>
        </div>
        <div>
            <a href="https://www.marca.com/claro-mx/" class="navbar-link text-decoration-none">
                <p class="navbar-item-black text-semibold">Claro Sports</p>
            </a>
        </div>
        <div>
            <a href="programacion.php" class="navbar-link text-decoration-none">
                <p class="navbar-item-black text-semibold">Programación</p>
            </a>
        </div>
    </div>
</nav>`;

        if ($(window).width() < 768) {
            menuWhite.html(menuMobileWhite);

        } else if ($(window).width() < 1200) {
            menuWhite.html(menuTabletWhite);

        } else if ($(window).width() >= 1200) {
            menuWhite.html(menuDesktopWhite);

        }
        $(window).resize(function () {
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
                    <img class="menu-responsive-tablet" src="../images/aboutus/hamburger-about-us.svg" alt="" />
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
      <nav class="menu-desktop">
      <div class="nav-content">
          <div class="claro-logo">
  
              <a href="home.php"><img class="logo" src="./images/home/claro-logo.svg" alt="" /></a>
          </div>
  
          <div class="user-options">
          </div>
      </div>
      <div class="claro-navbar">
          <div>
              <a href="claro-canal.php" class="navbar-link text-decoration-none">
                  <p class="navbar-item-black text-semibold">Canal Claro</p>
              </a>
          </div>
          <div>
              <a href="concert-channel.php" class="navbar-link text-decoration-none">
                  <p class="navbar-item-black text-semibold">Concert Channel</p>
              </a>
          </div>
          <div>
              <a href="claro-cinema.php" class="navbar-link text-decoration-none">
                  <p class="navbar-item-black text-semibold">Claro Cinema</p>
              </a>
          </div>
          <div>
              <a href="https://nuestravision.tv" class="navbar-link text-decoration-none">
                  <p class="navbar-item-black text-semibold">Nuestra Visión</p>
              </a>
          </div>
          <div>
              <a href="https://www.marca.com/claro-mx/" class="navbar-link text-decoration-none">
                  <p class="navbar-item-black text-semibold">Claro Sports</p>
              </a>
          </div>
          <div>
              <a href="programacion.php" class="navbar-link text-decoration-none">
                  <p class="navbar-item-black text-semibold">Programación</p>
              </a>
          </div>
      </div>
  </nav>`;

            menuWhite.html("");
            if ($(window).width() < 768) {
                menuWhite.html(menuMobileWhite);

            } else if ($(window).width() < 1200) {
                menuWhite.html(menuTabletWhite);

            } else if ($(window).width() >= 1200) {
                menuWhite.html(menuDesktopWhite);

            }
        });
    }
}