<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DonkeyExpress Login</title>
    <!-- Link Bootstrap 5 Stylesheet via jsdelvir -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Link jquery 3.5.1 via googleapis -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <main class="container-md bg-light text-center">
      <h1 class="mb-5">Donkey Express</h1>
      <h4 class="display-2 text-muted">Please enter your credentials to sign-in. Some functions will be unavailable without signing in.</h4>
      <div class="container-md p-4 rounded-3 bg-secondary">
      <form id="form" action="controller/userControl.php" method="post">
        <label for="email" class="visually-hidden">E-mail</label>
        <input type="email" id="email" name="email" class="form-control bg-light" placeholder="E-mail" required>
        <label for="pass" class="visually-hidden">Password</label>
        <input type="password" id="pass" name="pass" class="form-control bg-light" placeholder="Password" required>
        <!-- Tells userControl.php what to do -->
        <input type="hidden" name="request" value="login">
        <p id="error" hidden>Invalid e-mail or password.</p>
        <button class="w-100 btn btn-lg btn-light" type="submit" onclick="errCheck()">Sign in</button>
      </form>
    </main>
    <!-- Shows error message if credentials invalid -->
    <?php
      if(isset($_SESSION["error"])) {
        if($_SESSION["error"]) {
          echo "<script type=\"text/javascript\">$('#error').show();</script>";
        }
      }
    ?>
  </body>
</html>
<?php unset($_SESSION["error"]); ?>
