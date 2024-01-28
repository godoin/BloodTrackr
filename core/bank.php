<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['reposition_map'])) {
            $_SESSION['address'] = $address;

            $query = "SELECT name, location, region, date, time, telephone_num, blood_types FROM blood_bank WHERE name = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $_SESSION['address']);
            $stmt->execute();
            $result = $stmt->get_result();

            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        }
    }

    if (isset($_GET['address'])) {
        $address = $_GET['address'];
        $_SESSION['address'] = $address;

        $query = "SELECT name, location, region, date, time, telephone_num, blood_types FROM blood_bank WHERE name = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $_SESSION['address']);
        $stmt->execute();
        $result = $stmt->get_result();
    }