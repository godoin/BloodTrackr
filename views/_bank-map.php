<div class="bank-map">
  <div class="bank-details">
    <form method="POST">
      <p>
        <input type="text" name="address" placeholder="Enter Address">
      </p>
      
      <input type="submit" name="submit_address">
    </form>
  </div>
  <div class="map">
    <?php
      if (isset($address)) {
        echo '<iframe width="100%" height="650" src="https://maps.google.com/maps?q=' . urlencode($address) . '&output=embed"></iframe>';
      }
    ?>
  </div>
</div>