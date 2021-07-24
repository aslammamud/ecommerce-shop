<?php
require_once '../connection.inc.php';

$product_id = $_GET['id'];
$delete_query = "DELETE FROM products WHERE id = '$product_id'";
$delete_category = mysqli_query($con, $delete_query);
$_SESSION['product_delete_status'] = "One Product deleted successfully!";

header('location: products.php');
?>