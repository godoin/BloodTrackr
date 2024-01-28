<!-- views/_bank-map.php -->
<div class="bank-map">
  <div class="bank-details">
    <?php
    if ($result && $row = $result->fetch_assoc()) {
      // Extract blood types
      $bloodTypesString = str_replace(['[', ']', '"'], '', $row['blood_types']);
      $bloodTypesArray = explode(",", $bloodTypesString);
    ?>
      <header><?php echo $row['name']; ?></header>
      <!-- Bank Details -->
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
    <?php
    } else {
      echo "No information found for the specified address.";
    }
    ?>
    <!-- <div class="map-functions">
      <header>Map Functions:</header>
      <form method="POST">
        <input type="submit" name="reposition_map" value="Reposition Map">
      </form>
    </div> -->
  </div>
  <!-- Map -->
  <div class="map">
    <?php
    if (isset($_SESSION['address'])) {
      echo '<iframe width="100%" height="100%" src="https://maps.google.com/maps?q=' . urlencode($_SESSION['address']) . '&output=embed"></iframe>';
    }
    ?>
  </div>
</div>
