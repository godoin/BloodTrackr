<?php
    session_start();
    include 'core/database.php';
    include 'core/review-and-feedback.php';
    $title = 'Review and Feedback';
    $contentView = 'views/_review-and-feedback.php';
    include('views/user-layout.php');
?>