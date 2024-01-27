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
                for ($i = 1; $i <= 10; $i++) {
            ?>
                <div class="search-content">
                    <span class="bank-name">Blood Bank Name Placeholder</span>
                    <div class="address">
                        <span class="location">Location Placeholder</span>
                        <span class="region">Region Placeholder</span>
                    </div>
                    <div class="extra-details">
                        <span class="date-and-time">Date Placeholder | Time Placeholder</span>
                        <span class="contact">Contact: Contact Placeholder</span>
                    </div>
                    <div class="blood-types">
                        <span class="blood-header">Blood Types Available:</span>
                        <div class="blood-group">
                            <div class="blood">A</div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </section>
</div>