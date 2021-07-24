<?php
require_once '../connection.inc.php';
$coupon_id = $_GET['id'];
$delete_query = "DELETE FROM coupon WHERE id = '$coupon_id'";
$delete_category = mysqli_query($con, $delete_query);
$_SESSION['coupon_delete_status'] = "One Coupon deleted successfully!";
header('location: coupon-list');
?>