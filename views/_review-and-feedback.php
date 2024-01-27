<!-- Reviews -->
<div class="reviews-container">
    <!-- Search -->
    <div class="search">
        <div class="search-header">
            <i class="fa-solid fa-magnifying-glass"></i>
            <header>Search</header>
        </div>
        <form action="" method="GET" class="filters-group">
            <div class="filters">
                <div class="filter">
                    <label for="name">Select Blood Bank</label>
                    <select class="form-control" id="name" name="name">
                        <?php
                        $bloodBanks = getAllBloodBanks($conn);

                        foreach ($bloodBanks as $bloodBankName) {
                            echo "<option value=\"$bloodBankName\">$bloodBankName</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="actions">
                <button type="submit" class="secondary">Apply Filters</button>
            </div>
        </form>
    </div>
    <!-- .Reviews Contact -->
    <div class="content-container">
        <div class="search-header">
            <header>Reviews and Feedback</header>
        </div>
        <div class="content-group">
            <?php
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        $bloodTypesString = str_replace(['[', ']', '"'], '', $row['blood_types']);
                        $bloodTypesArray = explode(",", $bloodTypesString);
            ?>
                <div class="bank-details">
                    <header><?php echo $row['name']; ?></header>
                    <div class="details-section">
                        <div class="detail">
                            <div class="group">
                                <i class="fa-solid fa-location-arrow icon"></i>
                                <div class="text-group">
                                    <span class="location"><?php echo $row['location']; ?></span>
                                    <span class="region"><?php echo $row['region']; ?></span>
                                </div>
                            </div>
                            <div class="group">
                                <i class="fa-solid fa-calendar-days icon"></i>
                                <div class="text-group">
                                    <span class="date-time"><?php echo $row['date'] . ' | ' . $row['time']; ?></span>
                                </div>
                            </div>
                            <div class="group">
                                <i class="fa-solid fa-phone icon"></i>
                                <div class="text-group">
                                    <span class="contact"><?php echo $row['telephone_num']; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="blood-types">
                            <span class="title">Blood Types Available:</span>
                            <div class="blood-group">
                                <?php
                                    foreach ($bloodTypesArray as $bloodType) {
                                        echo '<div class="blood">' . trim($bloodType) . '</div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            } else {
                echo "Error fetching blood bank details: " . $conn->error;
            }
            ?>
            <div class="reviews">
                <div class="reviews-header">
                    <header>Reviews</header>
                    <button class="primary">Write a Review</button>
                </div>
                <div class="reviews-section">
                    <?php
                        if ($reviewsResult && $reviewsResult->num_rows > 0) {
                            while ($reviewRow = $reviewsResult->fetch_assoc()) {
                    ?>
                        <div class="review">
                            <!-- User Detail -->
                            <div class="user">
                                <div class="user-icon"><?php echo strtoupper(substr($reviewRow['user_name'], 0, 1)); ?></div>
                                <div class="user-group">
                                    <span class="date"><?php echo $reviewRow['review_time']; ?></span>
                                    <span class="username"><?php echo $reviewRow['user_name']; ?></span>
                                </div>
                            </div>
                            <!-- Review Message -->
                            <div class="review-message">
                                <div class="stars-container">
                                    <!-- Display star icons based on the rating -->
                                    <?php
                                        $rating = $reviewRow['rating'];
                                        for ($i = 0; $i < $rating; $i++) {
                                            echo '<i class="fa-solid fa-star star"></i>';
                                        }
                                    ?>
                                    <span class="rating"><?php echo $rating; ?>.0</span>
                                </div>
                                <p class="description"><?php echo $reviewRow['message']; ?></p>
                            </div>
                        </div>
                    <?php
                            }
                        } else {
                            echo '<p class="no-reviews">No reviews made for this blood bank.</p>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>