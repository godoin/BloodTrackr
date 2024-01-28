<?php
  session_start();
  include 'core/database.php';
  include 'core/search-and-inquiry.php';
  $title = 'Search and Inquiry';
  $contentView = 'views/_search-and-inquiry.php';
  include('views/user-layout.php');
?>