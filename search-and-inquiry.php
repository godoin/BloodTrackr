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

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $bloodTypeFilter = isset($_GET['blood_type']) ? $_GET['blood_type'] : '';
    $regionFilter = isset($_GET['region']) ? $_GET['region'] : '';
    $timeFilter = isset($_GET['time']) ? $_GET['time'] : '';

    $query = "SELECT name, location, telephone_num, region, time, blood_types, date FROM blood_bank WHERE
        (name LIKE '%$bloodTypeFilter%') AND
        (region LIKE '%$regionFilter%') AND
        (time LIKE '%$timeFilter%')";

    $result = mysqli_query($conn, $query);
}

  $title = 'Search and Inquiry';
  $contentView = 'views/_search-and-inquiry.php';
  include('views/user-layout.php');
?>