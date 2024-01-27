<?php
  session_start();
  include 'core/database.php';

  if (isset($_SESSION['user_id'])) {
    $query = "SELECT name, location, telephone_num, region, time, blood_types, date FROM blood_bank";
    $result = mysqli_query($conn, $query);
  } else {
    $_SESSION['error_message'] = 'Please log in first before continuing';
    header('location:login.php?error=user_access_deny');
  }

  $title = 'Search and Inquiry';
  $contentView = 'views/_search-and-inquiry.php';
  include('views/user-layout.php');
?>