<?php
    session_start();
    include 'core/database.php';

    if (isset($_GET['address'])) {
        $address = $_GET['address'];
        $_SESSION['address'] = $address;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['submit_address'])) {
            $address = $_POST['address'];
            $_SESSION['address'] = $address;
        }
    }

    $title = 'Bank Map';
    $contentView = 'views/_bank-map.php';
    include('views/user-layout.php');
?>
