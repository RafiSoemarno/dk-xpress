<header>
  <!-- MOBILE NAVIGATION (SIDEBAR) -->
  <nav id="sidebar" class="navbar navbar-dark min-vh-100">
    <div class="container-fluid min-vh-100">
      <button id="button" class="navbar-toggler position-absolute top-0 start-50 translate-middle bg-warning mt-5 shadow" type="button" onclick="toggleSideNav()">
        <span id="icon" class="navbar-toggler-icon"></span>
      </button>
      <ul id="navlink" class="navbar-nav list-group mx-auto" onclick="toggleSideNav()">
        <li class="nav-item"><a href="../public/#intro" class="display-6 nav-link">HOME</a></li>
        <li class="nav-item"><a href="../public/#about" class="display-6 nav-link">ABOUT US</a></li>
        <li class="nav-item"><a href="../public/#howto" class="display-6 nav-link">HOW IT WORKS</a></li>
        <li class="nav-item"><a href="../public/#services" class="display-6 nav-link">OUR SERVICES</a></li>
        <?php if(isset($_SESSION['activeUser'])) { ?>
          <li class="nav-item"><a href="../public/delivery" class="display-6 nav-link">DELIVERIES</a></li>
          <li class="nav-item"><a href="../public/account" class="display-6 nav-link">ACCOUNT</a></li>
        <?php } ?>
      </ul>
      <?php if(isset($_SESSION['activeUser'])) { ?>
        <form action="../public/account/logout" method="post">
          <button id="account" class="btn-lg btn-warning position-absolute bottom-0 start-50 translate-middle mb-5 nav-link" type="submit">
            <h1 class="display-6 text-light">LOGOUT</h1>
          </button>
        </form>
      <?php } else { ?>
        <button id="account" class="btn-lg btn-warning position-absolute bottom-0 start-50 translate-middle mb-5 nav-link" data-bs-toggle="modal" data-bs-target="#loginform">
          <h1 class="display-6 text-light">LOGIN</h1>
        </button>
      <?php } ?>
    </div>
  </nav>
  <!-- OVERLAY WHEN SIDEBAR IS OPEN -->
  <div class="overlay position-fixed min-vw-100 min-vh-100" onclick="toggleSideNav()"></div>
  <!-- LOGIN FORM -->
  <div id="loginform" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-md-down">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Sign-in</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="../public/account/login">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
              <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
              <label for="password">Password</label>
            </div>
            <span class="text-danger"><?php if(isset($_SESSION['loginError'])) { echo $_SESSION['loginError']; } ?></span>
          </div>
          <div class="modal-footer">
            <h7>Don't have an account? Register <a href="../public/account/register">here</a>.</h7>
            <button type="submit" class="btn btn-warning">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>
<main data-aos="fade-in">
