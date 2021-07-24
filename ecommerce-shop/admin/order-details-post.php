<?php
include '../connection.inc.php';

$order_id = $_POST['id'];
$payment_status = $_POST['payment_status'];
if($payment_status == "Paid"){

	$payment_status_int = 1;
}
else{

	$payment_status_int = 0;
}

$delivery_status = $_POST['order_status'];

$update_query = "UPDATE orders SET user_pay_status = '$payment_status_int', order_status = '$delivery_status' WHERE id = $order_id";
$update_query_from_db = mysqli_query($con, $update_query);

header('location: orders.php');

?>