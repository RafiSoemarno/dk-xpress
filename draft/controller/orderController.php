<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dk_xpress";

  $activeuser = "SELECT user_id FROM user WHERE email = '".$_SESSION['email']."'";
  $fetchorders = "SELECT * FROM delivery WHERE user_id = (".$activeuser.")";

  // Creates mysqli connection object
  $conn = new mysqli($servername, $username, $password, $dbname);
  if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $result = $conn->query($fetchorders);
  if($result->num_rows > 0) {
    $orders = array();
    while($row = $result->fetch_assoc()) {
      $values = array("delivery_id"=>$row["delivery_id"],
                      "user_id"=>$row["user_id"],
                      "description"=>$row["description"],
                      "picture"=>$row["picture"],
                      "status"=>$row["status"],
                      "destination_address"=>$row["destination_address"],
                      "destination_detail"=>$row["destination_detail"],
                      "item_count"=>$row["item_count"],
                      "gross_weight"=>$row["gross_weight"],
                      "item_type"=>$row["item_type"],
                      "location"=>$row["location"],
                      "ordered"=>$row["ordered"],
                      "scheduled"=>$row["scheduled"],
                      "delivery_type"=>$row["delivery_type"],
                      "handler"=>$row["handler"]);
      $orderdetails = json_encode($values);
      array_push($orders, $values);
    }
    $_SESSION["orders"] = json_encode($orders);
    header("Location: ./model/orders.php");
  }

  $conn->close();
?>
