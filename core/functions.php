<?php
include 'core/database.php';
// filter, search, & sort Functions

//***************************************************** */
//Update the getTable function that accepts $search and $sorting. If $search is provided, it adds a WHERE clause to the SQL query to only select rows where the 'name' column contains the search string. If $sorting is provided, it will sort by last_modified in descending order.
function getTable($table, $search = '', $sorting = '', $min_price = '', $max_price = '', $colors = [], $sizes = [], $category_id = '')
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE 1+1";

  if ($search !== '') {
    $search = mysqli_real_escape_string($conn, $search);
    $mysql_stmt .= " AND name LIKE '%$search%'";
  }

  if ($sorting !== '') {
    if ($sorting === 'new') {
      $mysql_stmt .= " ORDER BY last_modified DESC";
    } elseif ($sorting === 'popular') {
      // Adding the SUM() function to calculate the total quantity bought by each member and renaming it as total_quantity
      $mysql_stmt = "SELECT $table.*, SUM(pb.quantity_bought) as total_quantity
                     FROM $table
                     LEFT JOIN bill pb ON $table.id = pb.product_id
                     GROUP BY $table.id
                     ORDER BY total_quantity DESC";
    }
  }

  //************************Adding Filters***************************** */

  // Category filter
  if ($category_id !== '') {
    $category_id = mysqli_real_escape_string($conn, $category_id);
    $mysql_stmt .= " AND category_id = $category_id";
  }
  // price filter
  if ($min_price !== '') {
    $min_price = mysqli_real_escape_string($conn, $min_price);
    $mysql_stmt .= " AND price >= $min_price";
  }
  if ($max_price !== '') {
    $max_price = mysqli_real_escape_string($conn, $max_price);
    $mysql_stmt .= " AND price <= $max_price";
  }

  // color filter
  foreach ($colors as $color) {
    $color = mysqli_real_escape_string($conn, $color);
    $mysql_stmt .= " AND FIND_IN_SET('$color', colors)";
  }

  // size filter
  foreach ($sizes as $size) {
    $size = mysqli_real_escape_string($conn, $size);
    $mysql_stmt .= " AND FIND_IN_SET('$size', sizes)";
  }

  // // Add sorting at the end of the query

  $result = mysqli_query($conn, $mysql_stmt);

  if ($result === false) {
    die("Error in query: " . mysqli_error($conn));
  }

  return $result;
}

function getCategories()
{
  global $conn;
  $mysql_stmt = "SELECT * FROM category";
  return mysqli_query($conn, $mysql_stmt);
}

//********************************************************* */

// Functions
function getTableData($table)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table";
  return mysqli_query($conn, $mysql_stmt);
}

function getProdByCategory($category_id)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM product WHERE category_id='$category_id'";
  return mysqli_query($conn, $mysql_stmt);
}

function getProdBySeller($seller_id)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM product WHERE seller_id='$seller_id'";
  return mysqli_query($conn, $mysql_stmt);
}

function getProdByName($table, $name)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE name='$name'";
  return mysqli_query($conn, $mysql_stmt);
}

function getProdByMemberId($table, $id)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE member_id='$id'";
  return mysqli_query($conn, $mysql_stmt);
}

function getProdById($table, $id)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE product_id='$id'";
  return mysqli_query($conn, $mysql_stmt);
}

function getLikedProduct($table, $member_id, $product_id)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE product_id='$product_id' AND member_id='$member_id'";
  return mysqli_query($conn, $mysql_stmt);
}

function checkDiscountProduct($table, $product_id)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE product_id='$product_id'";
  return mysqli_query($conn, $mysql_stmt);
}

function getProductById($table, $id)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE id='$id'";
  return mysqli_query($conn, $mysql_stmt);
}

function limitWords($text, $limit)
{
  $words = explode(' ', $text);
  if (count($words) > $limit) {
    $words = array_slice($words, 0, $limit);
    $text = implode(' ', $words);
    $text .= '...';
  }
  return $text;
}

function getBillByMemberAndId($table, $product_id, $member_id)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE product_id='$product_id' AND member_id='$member_id'";
  return mysqli_query($conn, $mysql_stmt);
}

// Count of how many products there are all in all
$total_amount_of_products = mysqli_query($conn, "SELECT COUNT(*) as total_records FROM product WHERE 1+1");

$row = mysqli_fetch_assoc($total_amount_of_products);
$total_amount_of_products = $row['total_records'];

// Max amount of products to display in one page
$max_products_per_page = 15;

// Setting and getting the page number
if (isset($_GET['page_number']) && $_GET['page_number'] !== "") {
  $page_number = $_GET['page_number'];
} else {
  $page_number = 1;
}

// Calculate offset for the max limit query
$offset = ($page_number - 1) * $max_products_per_page;

// Get the search term from the form
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

// Get the sorting parameter from the form
$sorting = isset($_GET['sorting']) ? trim($_GET['sorting']) : '';

// Get the category_id from the form
$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : '';

// Get the price filters from the form
$min_price = isset($_GET['min_price']) ? $_GET['min_price'] : '';
$max_price = isset($_GET['max_price']) ? $_GET['max_price'] : '';

// Get the color and size filters from the form
$colors = isset($_GET['colors']) ? $_GET['colors'] : [];
$sizes = isset($_GET['sizes']) ? $_GET['sizes'] : [];

// Query string to retrieve products with limit and offset
$sql = "SELECT * FROM product WHERE 1+1";

// Apply search filter if provided
if (!empty($search)) {
  $search = mysqli_real_escape_string($conn, $search);
  $sql .= " AND name LIKE '%$search%'";
}

// Apply sorting
if ($sorting === 'new') {
  $sql .= " ORDER BY last_modified DESC";
} elseif ($sorting === 'popular') {
  // Adding the SUM() function to calculate the total quantity bought by each member and renaming it as total_quantity
  $sql = "SELECT product.*, SUM(pb.quantity_bought) as total_quantity
          FROM product
          LEFT JOIN bill pb ON product.id = pb.product_id
          GROUP BY product.id
          ORDER BY total_quantity DESC";
}

// Apply category filter if provided
if (!empty($category_id)) {
  $category_id = mysqli_real_escape_string($conn, $category_id);
  $sql .= " AND category_id = '$category_id'";
}

// Apply price filters if provided
if (!empty($min_price)) {
  $min_price = mysqli_real_escape_string($conn, $min_price);
  $sql .= " AND price >= '$min_price'";
}
if (!empty($max_price)) {
  $max_price = mysqli_real_escape_string($conn, $max_price);
  $sql .= " AND price <= '$max_price'";
}

// Apply color filters if provided
foreach ($colors as $color) {
  $color = mysqli_real_escape_string($conn, $color);
  $sql .= " AND FIND_IN_SET('$color', colors)";
}

// Apply size filters if provided
foreach ($sizes as $size) {
  $size = mysqli_real_escape_string($conn, $size);
  $sql .= " AND FIND_IN_SET('$size', sizes)";
}

// Add limit and offset to the query
$sql .= " LIMIT $offset, $max_products_per_page";

// Execute the query
$output = mysqli_query($conn, $sql) or die(mysqli_error($conn));

// Get previous page
$back = $page_number - 1;
// Get next page
$next = $page_number + 1;

// Total counts of records applied $output function
$count_records = mysqli_num_rows($output);

// Max pages
$max_amount_of_pages = ceil($total_amount_of_products / $max_products_per_page);
