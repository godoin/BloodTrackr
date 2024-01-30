<!-- Navigation Header -->
<div class="header">
    <div class="bg-lime"></div>
    <ul class="navbar">
        <a href="user-index.php" class="site-logo">
            <div class="logo-wrapper">
                <img src="assets/images/logo.png" alt="BloodTrackr">
            </div>
            <div class="logo-group">
                <div class="logo-title">BloodTrackr</div>
                <div class="logo-desc">blood services</div>
            </div>
        </a>
        <ul class="nav">
            <a href="user-index.php">Home</a>
            <a href="search-and-inquiry.php">Search and Inquiry</a>
            <a href="review-and-feedback.php">Review and Feedback</a>
            <a href="">Notifications Center</a>
        </ul>
        <div class="left-group">
            <div class="user" id="user-btn">
                <div class="user-group">
                    <div class="user-icon">
                        <?php
                            if (isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])) {
                                echo strtoupper(substr($_SESSION['user_name'], 0, 1));
                            }
                        ?>
                    </div>
                    <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>
            <div class="icon-button" id="menu-btn">
                <i class="fa-solid fa-bars menu"></i>
            </div>
        </div>
    </ul>
</div>