<?php
    session_start();
    include 'core/database.php';
    include 'core/bank.php';
    $title = 'Bank Map';
    $contentView = 'views/_bank-map.php';
    include('views/user-layout.php');
?>
