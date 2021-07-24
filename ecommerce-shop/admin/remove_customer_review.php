<?php
require_once '../connection.inc.php';

$customer_id = $_GET['id'];
$delete_query = "DELETE FROM customer_reviews WHERE id = '$customer_id'";
$customer_review = mysqli_query($con, $delete_query);
$_SESSION['customer_review_delete_status'] = "Deleted One Customer Review!";
header('location: customer_review.php');
?>