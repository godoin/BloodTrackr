<?php
  session_start();
  include 'core/database.php';

  if (isset($_POST['submit'])) {
    // $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    $sql_stmt = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  
    $result = mysqli_query($conn, $sql_stmt);
  
    if (mysqli_num_rows($result) > 0) {
      $array = mysqli_fetch_array($result);
      $_SESSION['user_name'] = $array['username'];
      $_SESSION['user_id'] = $array['id'];
      $_SESSION['user_email'] = $array['email'];
      header('location:search-and-inquiry.php?success=user-logged');
    } elseif (empty($email) || empty($password)) {
      $error = 'Please fill all the necessary fields.';
    } else {
      $error = 'The email does not exist.';
    }
  }

  $title = 'Login';
  $contentView = 'views/_login.php';
  include('views/guest-layout.php');
?>