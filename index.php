<?php
  session_start();
  include 'core/database.php';
  $title = 'BloodTrackr';
  $contentView = 'views/_index.php';
  include('views/master.php');
?>