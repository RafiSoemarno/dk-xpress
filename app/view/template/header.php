<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title><?= $data['title'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="../public/css/sidebar.css">
</head>
<body>
  <nav id="sidebar" class="navbar navbar-dark min-vh-100">
    <div class="container-fluid min-vh-100">
      <button id="button" class="navbar-toggler position-absolute top-0 start-50 translate-middle bg-warning mt-5 shadow" type="button" onclick="showNav()">
        <span id="icon" class="navbar-toggler-icon"></span>
      </button>
      <ul id="navlink" class="navbar-nav list-group mx-auto" onclick="showNav()">
        <li class="nav-item"><a href="#intro" class="display-6 nav-link">HOME</a></li>
        <li class="nav-item"><a href="#about" class="display-6 nav-link">ABOUT US</a></li>
        <li class="nav-item"><a href="#howto" class="display-6 nav-link">HOW IT WORKS</a></li>
        <li class="nav-item"><a href="#services" class="display-6 nav-link">OUR SERVICES</a></li>
      </ul>
    </div>
  </nav>
  <nav id="navbar" class="navbar navbar-light">
    <div class="row">
      <div class="col-2">
        <h1>Donkey Express</h1>
      </div>
      <div class="col">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#intro" class="display-6 nav-link">HOME</a></li>
          <li class="breadcrumb-item"><a href="#about" class="display-6 nav-link">ABOUT US</a></li>
          <li class="breadcrumb-item"><a href="#howto" class="display-6 nav-link">HOW IT WORKS</a></li>
          <li class="breadcrumb-item"><a href="#services" class="display-6 nav-link">OUR SERVICES</a></li>
        </ul>
      </div>
    </div>
  </nav>
