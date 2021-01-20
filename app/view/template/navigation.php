<header>
  <!-- MOBILE NAVIGATION (SIDEBAR) -->
  <nav id="sidebar" class="navbar navbar-dark min-vh-100">
    <div class="container-fluid min-vh-100">
      <button id="button" class="navbar-toggler position-absolute top-0 start-50 translate-middle bg-warning mt-5 shadow" type="button" onclick="toggleSideNav()">
        <span id="icon" class="navbar-toggler-icon"></span>
      </button>
      <ul id="navlink" class="navbar-nav list-group mx-auto" onclick="toggleSideNav()">
        <li class="nav-item"><a href="<?= BASEURL; ?>/#intro" class="display-6 nav-link">HOME</a></li>
        <li class="nav-item"><a href="<?= BASEURL; ?>/#about" class="display-6 nav-link">ABOUT US</a></li>
        <li class="nav-item"><a href="<?= BASEURL; ?>/#howto" class="display-6 nav-link">HOW IT WORKS</a></li>
        <li class="nav-item"><a href="<?= BASEURL; ?>/#services" class="display-6 nav-link">OUR SERVICES</a></li>
        <?php if(isset($_SESSION['activeUser'])) { ?>
          <li class="nav-item"><a href="<?= BASEURL; ?>/delivery" class="display-6 nav-link">DELIVERIES</a></li>
          <li class="nav-item"><a href="<?= BASEURL; ?>/account" class="display-6 nav-link">ACCOUNT</a></li>
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
  <!-- OVERLAY WHEN SIDEBAR IS OPEN -->
  <div class="overlay position-fixed min-vw-100 min-vh-100" onclick="toggleSideNav()"></div>
  <!-- LOGIN FORM -->
  <div id="loginform" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md modal-fullscreen-md-down">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Sign-in</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= BASEURL; ?>/account/login">
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
            <h7>Don't have an account? Register <a href="<?= BASEURL; ?>/account/register">here</a>.</h7>
            <button type="submit" class="btn btn-warning">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>
<!-- NEW ORDER MODAL -->
<div id="neworder" class="modal fade" tabindex="-1"  data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-lg modal-fullscreen-md-down modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New Delivery</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" method="post" action="<?= BASEURL; ?>/delivery/neworder">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="delivery_id" id="delivery_id" placeholder="delivery_id" required>
            <label for="delivery_id">Delivery ID</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="description" id="description" placeholder="description" required>
            <label for="description">Description</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="destination" id="destination" placeholder="destination" required>
            <label for="destination">Destination Address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="detail" id="detail" placeholder="detail" required>
            <label for="detail">Destination Detail</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="item_count" id="item_count" placeholder="item_count" required>
            <label for="item_count">Item Count</label>
          </div>
          <div class="form-floating input-group mb-3">
            <input type="number" class="form-control" name="weight" id="weight" placeholder="weight" required>
            <label for="weight">Weight (kg)</label>
            <span class="input-group-text">kg</span>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" name="item_type" id="item_type" placeholder="item_type" required>
              <option selected value="Normal">Normal</option>
              <option value="Fragile">Fragile</option>
              <option value="Organic">Food/Organic</option>
              <option value="Large">Large</option>
            </select>
            <label for="item_type">Item Type</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="location" id="location" placeholder="location" required>
            <label for="location">Deliver From</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" name="delivery_type" id="delivery_type" placeholder="delivery_type" required>
              <option selected value="Standard">Standard</option>
              <option value="Next-Day">Next-Day</option>
              <option value="Heavy-Duty">Heavy-Duty</option>
              <option value="Economy">Economy</option>
            </select>
            <label for="delivery_type">Delivery Option</label>
          </div>
          <div class="input-group mb-3">
            <input type="file" name="picture" id="picture">
            <label class="input-group-text" for="picture">Picture</label>
          </div>
          <span class="text-danger"><?php if(isset($_SESSION['loginError'])) { echo $_SESSION['loginError']; } ?></span>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<main data-aos="fade-in">
