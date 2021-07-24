<?php
require_once '../connection.inc.php';

$sub_category_id = $_GET['id'];
$delete_query = "DELETE FROM sub_categories WHERE id = '$sub_category_id'";
$delet_category = mysqli_query($con, $delete_query);
$_SESSION['sub-category_delete_status'] = "Deleted One Sub-category!";
header('location: add-sub-category.php');
?>