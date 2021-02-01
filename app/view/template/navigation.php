<header>
  <nav id="sidebar" class="navbar navbar-dark min-vh-100">
    <div class="container-fluid min-vh-100">
      <button id="button" class="navbar-toggler position-absolute top-0 start-50 translate-middle bg-warning mt-5 shadow" type="button" onclick="toggleSideNav()">
        <span id="icon" class="navbar-toggler-icon"></span>
      </button>
      <ul id="navlink" class="navbar-nav list-group mx-auto">
        <li class="nav-item"><a href="<?= BASEURL; ?>/#intro" class="display-6 nav-link" onclick="toggleSideNav()">HOME</a></li>
        <li class="nav-item"><a href="<?= BASEURL; ?>/#about" class="display-6 nav-link" onclick="toggleSideNav()">ABOUT US</a></li>
        <li class="nav-item"><a href="<?= BASEURL; ?>/#howto" class="display-6 nav-link" onclick="toggleSideNav()">HOW IT WORKS</a></li>
        <li class="nav-item"><a href="<?= BASEURL; ?>/#services" class="display-6 nav-link" onclick="toggleSideNav()">OUR SERVICES</a></li>
        <?php if(isset($_SESSION['activeUser'])) { ?>
          <li class="nav-item"><a href="<?= BASEURL; ?>/delivery" class="display-6 nav-link" onclick="toggleSideNav()">DELIVERIES</a></li>
          <li class="nav-item"><a href="<?= BASEURL; ?>/account" class="display-6 nav-link" onclick="toggleSideNav()">ACCOUNT</a></li>
        <?php } ?>
      </ul>
      <?php if(isset($_SESSION['activeUser'])) { ?>
        <form action="<?= BASEURL; ?>/account/logout" method="post">
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
  <!-- Overlay when sidebar is open -->
  <div class="overlay position-fixed min-vw-100 min-vh-100" onclick="toggleSideNav()"></div>
</header>
