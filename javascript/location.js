function redirectToBankMap(location) {
  // Set the location in the session using AJAX or pass it as a query parameter
  // For simplicity, let's use a query parameter here
  window.location.href = "bank-map.php?address=" + encodeURIComponent(location);
}
