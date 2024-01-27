<div class="user-profile">
    <form action="user-profile.php" method="POST">
        <div class="header-wrapper">
            <div class="group">
                <span class="title">Account Settings</span>
                <button type="submit" name="submit" class="primary">Save Changes</button>
            </div>
            <?php
                if (isset($error)) {
                    echo '<span class="error-msg"> Error: ' . $error . '</span>';
                } elseif (isset($_SESSION['success_message'])) {
                    echo '<span class="success-msg"> Success: ' . $_SESSION['success_message'] . '</span>';
                } elseif (isset($_SESSION['error_message'])) {                            
                    echo '<span class="error-msg"> Error: ' . $_SESSION['error_message'] . '</span>';
                }
            ?>

            <?php
                unset($_SESSION['success_message']);
                unset($_SESSION['error_message']);
            ?>
        </div>
        <div class="user-section">
            <div class="user-details">
                <span class="title">Username</span>
                <div class="groups">
                    <div class="group">
                        <label for="username">untitled.com/</label>
                        <input type="text" id="username" name="username" autocomplete="username" value="<?php echo $user_details['username']; ?>" required autofocus>
                    </div>
                </div>
            </div>
            <div class="user-details">
                <span class="title">Details</span>
                <div class="groups">
                    <div class="group">
                        <label for="home_address">Home Address:</label>
                        <input type="text" id="home_address" name="home_address" autocomplete="" value="<?php echo $user_details['home_address']; ?>">
                    </div>
                    <div class="group">
                        <label for="blood_type">Blood Type:</label>
                        <input type="text" id="blood_type" name="blood_type" autocomplete="" value="<?php echo $user_details['blood_type']; ?>">
                    </div>
                </div>
            </div>
            <div class="user-details">
                <div class="user-group">
                    <span class="title">Profile Image</span>
                    <p class="description">This will be displayed on all pages.</p>
                </div>
                <div class="groups profile">
                    <div class="user-icon">
                        <?php
                            if (isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])) {
                                echo strtoupper(substr($_SESSION['user_name'], 0, 1));
                            }
                        ?>
                    </div>
                    <input type="file" name="new_image" accept="image/*">
                </div>
            </div>
        </div>
    </form>
    <!-- <div class="user-details">
        <span class="title">Password</span>
        <div class="groups">
            <button class="secondary">Change Password</button>
        </div>
    </div> -->
</div>