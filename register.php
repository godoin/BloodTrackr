<?php
  session_start();
  include 'core/database.php';
  include 'core/auth/register.php';
  $title = 'Register';
  $contentView = 'views/_register.php';
  include('views/guest-layout.php');
?>