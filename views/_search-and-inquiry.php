<!-- Search and Inquiry -->
<div class="search-container">
    <!-- Filters -->
    <section class="filters">
        <div class="filters-header">
            <i class="fa-solid fa-filter"></i>
            <header>Filters</header>
        </div>
        <form class="filters-group">
            <div class="filters">
                <div class="filter">
                    <label for="">Blood Type</label>
                    <input id="" type="" class="form-control" name="" autofocus>
                </div>
                <div class="filter">
                    <label for="">Region</label>
                    <input id="" type="" class="form-control" name="">
                </div>
                <div class="filter">
                    <label for="">Time</label>
                    <input id="" type="" class="form-control" name="">
                </div>
            </div>
            <div class="actions">
                <button class="primary">Apply Filters</button>
            </div>
        </form>
    </section>
    <!-- Search Content -->
    <section class="search">
        <div class="search-header">
            <header>Search and Inquiry</header>
        </div>
        <div class="search-wrapper">
            <?php
            // Check if the query was successful
            if ($result) {
                // Loop through the results and display them
                while ($row = mysqli_fetch_assoc($result)) {
                    $bloodTypesString = str_replace(['[', ']', '"'], '', $row['blood_types']);
                    $bloodTypesArray = explode(",", $bloodTypesString);
            ?>
                    <div class="search-content">
                        <span class="bank-name"><?php echo $row['name']; ?></span>
                        <div class="address">
                            <span class="location"><?php echo $row['location']; ?></span>
                            <span class="region"><?php echo $row['region']; ?></span>
                        </div>
                        <div class="extra-details">
                            <span class="date-and-time"><?php echo $row['date']; ?> | <?php echo $row['time']; ?></span>
                            <span class="contact">Contact: <?php echo $row['telephone_num']; ?></span>
                        </div>
                        <div class="blood-types">
                            <span class="blood-header">Blood Types Available:</span>
                            <div class="blood-group">
                                <?php
                                foreach ($bloodTypesArray as $bloodType) {
                                    echo '<div class="blood">' . trim($bloodType) . '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            ?>
        </div>
    </section>
</div>