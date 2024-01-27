<?php
  session_start();
  include 'core/database.php';
  $title = 'Register';
  $contentView = 'views/_register.php';
  include('views/master.php');
?>