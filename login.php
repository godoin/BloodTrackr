<?php
  session_start();
  include 'core/database.php';
  include 'core/auth/login.php';
  $title = 'Login';
  $contentView = 'views/_login.php';
  include('views/guest-layout.php');
?>