<?php
require 'connection.inc.php';  
require 'functions.inc.php';

if(isset($_POST['couponname'])){
$coupon_name = get_safe_value($con,htmlspecialchars($_POST['couponname']));

$select_query = "SELECT * FROM coupon WHERE coupon_code = '$coupon_name'";
$result = mysqli_query($con, $select_query);
$result_data = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);
if($count > 0 ){
    echo true;
}else{
    echo false;
}

}

?>