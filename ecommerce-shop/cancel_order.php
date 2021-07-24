<?php
include ('connection.inc.php');
$user_order_id = $_GET['invid'];
$delete_query = "DELETE FROM orders WHERE id = '$user_order_id'";
$order_delete = mysqli_query($con, $delete_query);
$_SESSION['delete_status'] = "This order Canceled successfully!";
header('location: dashboard.php');
?>