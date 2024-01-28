<?php
    session_start();
    include 'core/database.php';
    include 'core/user-profile.php';
    $title = 'User Profile';
    $contentView = 'views/_user-profile.php';
    include('views/user-layout.php');
?>
