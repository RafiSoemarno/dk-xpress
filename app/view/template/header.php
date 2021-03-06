<?php if(session_status() == PHP_SESSION_NONE) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="icon" href="<?= BASEURL; ?>/public/img/icon.svg" sizes="any" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="<?= BASEURL; ?>/public/libs/aos-master/dist/aos.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/public/css/style.css" rel="stylesheet">
    <script src="<?= BASEURL; ?>/public/js/validate.js" charset="utf-8"></script>
  </head>
  <body>
