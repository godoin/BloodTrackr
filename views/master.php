<?php
include_once 'core/functions.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <!-- CSS Link -->
  <link rel="stylesheet" href="styles.css" type="text/css">
  <!-- Font Awesome Link -->
  <script src="https://kit.fontawesome.com/84e2199ce0.js" crossorigin="anonymous"></script>
  <!-- FontAwesome Offline -->
  <link rel="stylesheet" href="assets\fontawesome-web\css\all.css">
</head>

<body>

  <?php include('views/inc/header.php') ?>
  <?php include('views/inc/modals.php') ?>
  <?php include($contentView) ?>

  <?php include('views/inc/footer.php') ?>

  <!-- JS Link -->
  <script src="assets/javascript/main.js" type="text/javascript"></script>
  <script src="assets/javascript/shop.js" type="text/javascript"></script>
  <script src="assets/javascript/products.js" type="text/javascript"></script>
  <!-- <script src="assets/javascript/selector.js" type="text/javascript"></script> -->
  <script src="assets/javascript/seller.js" type="text/javascript"></script>
  <script src="assets/javascript/member.js" type="text/javascript"></script>
  <!-- <script src="assets/javascript/click.js"></script> -->
</body>

</html>