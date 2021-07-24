<?php
require 'connection.inc.php';  
require 'functions.inc.php';

if(isset($_POST['couponname'])){
$coupon_name = get_safe_value($con,htmlspecialchars($_POST['couponname']));
$finalprice = get_safe_value($con,htmlspecialchars($_POST['finalprice']));

$select_query = "SELECT * FROM coupon WHERE coupon_code = '$coupon_name'";
$result = mysqli_query($con, $select_query);
$coupon_data = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);



if($count > 0 ){
    
    $discount = $coupon_data['coupon_discount'];
    $coupon_type = $coupon_data['coupon_type'];
    
        if($coupon_type == 'Fixed'){
            $final_amount = (int)$finalprice - (int)$discount;
            echo $final_amount;
        }else{
            $final_amount = ((int)$discount/100)*(int)$finalprice;
            echo $final_amount;
        }
}else{
    echo $finalprice;
}

}

?>