<?php
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        $query = "SELECT username, home_address, blood_type FROM users WHERE id = $user_id";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $user_details = mysqli_fetch_assoc($result);
        } else {
            $_SESSION['error_message'] = 'Error fetching user details from the database';
            header('location:login.php?error=database_error');
        }

    } else {
        $_SESSION['error_message'] = 'Please log in first before continuing';
        header('location:login.php?error=user_access_deny');
        exit();
    }
    
    // Handle new changes to user information
    if (isset($_POST["submit"])) {
        $new_username = mysqli_real_escape_string($conn, $_POST['username']);
        $new_home_address = mysqli_real_escape_string($conn, $_POST['home_address']);
        $new_blood_type = mysqli_real_escape_string($conn, $_POST['blood_type']);
    
        // Handle image upload
        $new_image = '';
        $fileName = $_FILES['new_image']['name'];
        $fileTmpName = $_FILES['new_image']['tmp_name'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'jfif');
        
        if (in_array($fileActualExt, $allowed)) {
            $fileDestination = "assets/uploads/" . $fileName;
            move_uploaded_file($fileTmpName, $fileDestination);
            echo '<script>';
            echo 'console.log("' . $fileDestination . '");';
            echo '</script>';
        } else {
            $error = "You can not upload this type of file.";
        }
        
        $update_query = "UPDATE users SET username = '$new_username', home_address = '$new_home_address', blood_type = '$new_blood_type', image_path = '$image' WHERE id = $user_id";
        
        $update_result = mysqli_query($conn, $update_query);
    
        if ($update_result) {
            $query = "SELECT username, home_address, blood_type FROM users WHERE id = $user_id";
            $result = mysqli_query($conn, $query);
    
            if ($result) {
                $user_details = mysqli_fetch_assoc($result);
            } else {
                $_SESSION['error_message'] = 'Error fetching user details from the database';
                header('location:user-profile.php?error=database_error');
            }
    
            $_SESSION['success_message'] = 'User details updated successfully';
            header('location:user-profile.php?success=details_updated');
        } else {
            $_SESSION['error_message'] = 'Error updating user details';
            header('location:user-profile.php?error=database_error');
        }
    }