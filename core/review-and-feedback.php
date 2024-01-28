<?php
    if (isset($_SESSION['user_id'])) {
        $query = "SELECT id, name, location, region, date, time, blood_types, telephone_num FROM blood_bank LIMIT 1";
        $result = $conn->query($query);
        
        $selectedBloodBankId = null;
        
        if ($result && $result->num_rows > 0) {
            $bloodBank = $result->fetch_assoc();
            $selectedBloodBankId = $bloodBank['id'];
        }
        
        $reviewsQuery = "SELECT user_name, rating, message, created_at as review_time FROM reviews WHERE bank_id = '$selectedBloodBankId'";
        $reviewsResult = $conn->query($reviewsQuery);

        $user_id = $_SESSION["user_id"];
        $user_name = $_SESSION["user_name"];

        $bank_id = $selectedBloodBankId; 

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $rating = $_POST['rating'];
            $message = $_POST['message'];

            $insertQuery = "INSERT INTO reviews (user_id, user_name, bank_id, rating, message) 
                            VALUES ('$user_id', '$user_name', '$bank_id', '$rating', '$message')";

            if ($conn->query($insertQuery) === TRUE) {
                echo "Review added successfully!";
            } else {
                echo "Error adding review: " . $conn->error;
            }
        }
    } else {
        $_SESSION['error_message'] = 'Please log in first before continuing';
        header('location:login.php?error=user_access_deny');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $bloodBankName = isset($_GET['name']) ? $_GET['name'] : '';
    
        $query = "SELECT id, name, location, telephone_num, region, time, blood_types, date FROM blood_bank WHERE
            (name LIKE '%$bloodBankName%') LIMIT 1";
    
        $result = $conn->query($query);
    
        // if ($result && $result->num_rows > 0) {
        //     $bloodBank = $result->fetch_assoc();
        //     $selectedBloodBankId = $bloodBank['id'];
    
        //     $reviewsQuery = "SELECT user_name, rating, message FROM reviews WHERE bank_id = '$selectedBloodBankId'";
        //     $reviewsResult = $conn->query($reviewsQuery);
        // }
    }
    
    function getAllBloodBanks($conn)
    {
        $query = "SELECT name FROM blood_bank";
        $result = $conn->query($query);
    
        $bloodBanks = [];
    
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $bloodBanks[] = $row['name'];
            }
        }
    
        return $bloodBanks;
    }