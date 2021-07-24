<?php
require_once '../connection.inc.php';  

$category_id = $_GET['id'];
$delete_query = "DELETE FROM categories WHERE id = '$category_id'";
$delet_category = mysqli_query($con, $delete_query);
$_SESSION['category_delete_status'] = "Deleted a category Seccessfully!";
header('location: add-category.php');

?>