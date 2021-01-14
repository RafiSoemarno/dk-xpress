<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Orders</title>
</head>
<body>
  <main>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 rounded-3 shadow-lg g-4 m-5 ps-3 pt-0 pb-4 pe-3" id="orderContainer">
      <script type="text/javascript">
        <?php
        $orders = json_decode($_SESSION["orders"]);
        foreach($orders) {

          $.get("orderCard.html", function(data) {
            $("orderContainer").append(data);
          });
        }
        ?>
      </script>
      <?php

      ?>
    </div>
  </main>
</body>
</html>
