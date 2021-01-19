<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $data['title'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="../public/libs/aos-master/dist/aos.css" rel="stylesheet">
  <link href="../public/css/style.css" rel="stylesheet">
</head>
<body>
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
        </ul>
        <button id="account" class="btn-lg btn-warning position-absolute bottom-0 start-50 translate-middle mb-5 nav-link" data-bs-toggle="modal" data-bs-target="#loginform">
          <h1 class="display-6 text-light">ACCOUNT</h1>
        </a>
      </div>
    </nav>
    <!-- OVERLAY WHEN SIDEBAR IS OPEN -->
    <div class="overlay position-fixed min-vw-100 min-vh-100" onclick="toggleSideNav()"></div>
    <!-- LOGIN/REGISTER FORM -->
    <div class="modal fade" id="loginform" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sign-in</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="modal-footer">
            <h7>Don't have an account?</h7>
            <button type="button" class="btn btn-primary">Register</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- DESKTOP NAVIGATION (TOPNAV)
    <nav id="navbar" class="navbar navbar-light">
    <div class="container-fluid row">
    <div class="col-3">
    <h1>Donkey Express</h1>
  </div>
  <div class="col-9">
  <div class="container-fluid d-flex justify-content-end">
  <a href="#intro" class="nav-link">HOME</a>
  <a href="#about" class="nav-link">ABOUT US</a>
  <a href="#howto" class="nav-link">HOW IT WORKS</a>
  <a href="#services" class="nav-link">OUR SERVICES</a>
  <a href="./delivery/" class="nav-link">DELIVERIES</a>
</div>
</div>
</div>
</nav>
DEPRECATED -->
</header>
<main data-aos="fade-in">
