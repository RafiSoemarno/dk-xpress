<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dk_express";

  $loginsql = "SELECT email, password FROM user WHERE email = '".$email."'";

  // Creates mysqli connection object
  $conn = new mysqli($servername, $username, $password, $dbname);
  if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // To check which form is requesting
  $request = $_POST["request"];

  // Login
  if($request == "login") {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $result = $conn->query($loginsql);
    if($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      if($row["password"] == $pass) {
        $_SESSION["user"] = $email;
        header("location: dashboard.php");
      } else {
        $_SESSION["error"] = true;
        header("location: index.php");
      }
    } else {
      $_SESSION["error"] = true;
      header("location: index.php");
    }
    $conn->close();
  }
?>
