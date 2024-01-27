<?php
    session_start();
    include 'core/database.php';
    $title = 'BloodTrackr';
    $contentView = 'views/_user-index.php';
    include('views/user-layout.php');
?>