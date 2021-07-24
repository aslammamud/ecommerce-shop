<?php
$dynamic_title = 'Order Details | Admin Panel | Stylishvalley';
include 'header.php';
$order_id = $_GET['id'];

$select_query = "SELECT * FROM orders WHERE id = '$order_id'";
$select_order_info = mysqli_query($con, $select_query);
$order = mysqli_fetch_assoc($select_order_info);

$coupon_id = $order['coupon_id'];
$coupon_query = "SELECT * FROM `coupon` WHERE `id` = '$coupon_id'";
$result_coupon = mysqli_query($con,$coupon_query);
$coupon = mysqli_fetch_assoc($result_coupon);

$customer_id = $order['customer_id'];
$query_customer = "SELECT * FROM `user` WHERE `user_id` = '$customer_id'";
$result_customer = mysqli_query($con,$query_customer);
$customer = mysqli_fetch_assoc($result_customer);


$sub_total = 0;
$token = $order['order_token'];
$sql = "SELECT * FROM cart WHERE cart_session = '$token'";
$result = mysqli_query($con,$sql);

$count = mysqli_num_rows($result);
if($count>0){
  while ($row = $result->fetch_assoc()) {
    $sub_total += $row['total_price'];
  }
}


?>

<style>
    .pointer{
        cursor: pointer;
    }
</style>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

      <nav class="breadcrumb sl-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="orders">Orders</a></li>
          <li class="breadcrumb-item active" aria-current="page">order details</li>
        </ol>
      </nav>

        <div class="col-lg-12 sl-pagebody m-auto">

            <!-- Show Bootstrap Modal page Start -->
            <div class="row m-auto">
                <div class="col-lg-12 modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">ORDER ID: <?= "STYLISH-" . $order['id']?></h4>

                    <a href="orders" type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                    </a>
                    
                </div><!-- .modal-header -->

                <div class="modal-body">

                    <div class="py-4">
                    <div class="row gutters-5 text-center aiz-steps">
                        <div class="col  active ">
                            <div class="icon">
                                <i style="<?php if($order['order_status'] == "Canceled"){
                                    echo "color: #8694b3";
                                }else{ echo "color: #23bf08"; } ?>" class="tx-30 fa fa-first-order" aria-hidden="true"></i>
                            </div>
                            <div class="tx-secondary title fs-12">Order placed</div>
                        </div>
                        <div class="col active">
                            <div class="icon">
                                <i style="<?php if($order['order_status'] == "On delivery"){
                                    echo "color: #ffa001";
                                }else{ echo "color: #8694b3"; } ?>" class="tx-30 fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <div class="title fs-12 text-secondary">On delivery</div>
                        </div>
                        <div class="col active">
                            <div class="icon">
                                <i style="<?php if($order['order_status'] == "Delivered"){
                                    echo "color: #23bf08";
                                }else{ echo "color: #8694b3"; } ?>" class="tx-30 tx-30 fa fa-check-square" aria-hidden="true"></i>
                            </div>
                            <div class="title fs-12 text-secondary">Delivered</div>
                        </div>                        
                        <div class="col active">
                            <div class="icon">
                                <i style="<?php if($order['order_status'] == "Canceled"){
                                    echo "color: #f52244";
                                }else{ echo "color: #8694b3"; } ?>" class="tx-30 tx-30 fa fa-times" aria-hidden="true"></i>
                            </div>
                            <div class="title fs-12 text-secondary">Canceled</div>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card mt-4">
                        <div class="card-header bg-white">
                            <b class="fs-15 text-dark h5">Order Summary</b>
                        </div>
                        <div class="card-body bg-white">
                            <div class="row">
                                <div class="col-lg-6">
                                    <table class="table table-borderless">
                                        <tbody>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Order Date:</td>
                                            <td class="text-dark"><?=$order['order_date']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Order Token:</td>
                                            <td class="text-dark"><?=$order['order_token']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Order Amount:</td>
                                            <td class="text-dark">৳ <?=$order['amount_to_pay']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Order status:</td>
                                            <td class="text-dark"><?=$order['order_status']?></td>
                                        </tr> 
                                        <tr>
                                            <td class="w-50 fw-600 h6">Discount: </td>
                                            <td class="text-dark"><?php if($coupon['coupon_type']=='Fixed'){echo '৳ '.$coupon['coupon_discount'];}else{echo $coupon['coupon_discount'].' %';}?></td>
                                        </tr>                                        
                                        <tr>
                                            <td class="w-50 fw-600 h6">Payment Method:</td>
                                            <td class="text-dark"><?=$order['pmode']?></td>
                                        </tr>
                                         <tr>
                                            <td class="w-50 fw-600 h6">Payment status:</td>
                                                <td class="text-dark"><?php if($order['user_pay_status']==true){echo 'Paid';}else{echo 'Unpaid';}?></td>
                                        </tr> 
                                    </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-6">
                                    <table class="table table-borderless">
                                        <tbody>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Customer Name:</td>
                                            <td class="text-dark"><?=$customer['user_name']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Customer Email:</td>
                                            <td class="text-dark"><?=$customer['user_email']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Customer Phone:</td>
                                            <td class="text-dark"><?=$customer['user_phone']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Shipping address:</td>
                                            <td class="text-dark"><?=$order['address']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Coupone Code: </td>
                                            <td class="text-dark"><?=$coupon['coupon_code']?></td>
                                        </tr> 
                                        <tr>
                                            <td class="w-50 fw-600 h6">Reference:</td>
                                            <td class="text-dark"><?php if($order['pmode']=='Bkash'){echo $order['reference'];}else{echo 'N/A';}?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Transaction Code:</td>
                                            <td class="text-dark"><?php if($order['pmode']=='Bkash'){echo $order['transaction_code'];}else{echo 'N/A';}?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card mt-4">
                                    <div class="card-header bg-info">
                                    <b class="fs-15 text-white">Order Details</b>
                                    </div>
                                    <div class="card-body bg-secondary pb-0">
                                        <table class="table table-borderless table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Sr.</th>
                                                    <th width="40%">Product</th>
                                                    <th>Quantity</th>
                                                    <th>Unit Price</th>
                                                    <th>Total Price</th>
                                                    <th>Refund</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php
                                                    $serial = 0;
                                                    if($count>0){
                                                          foreach($result as $product){
                                                            $serial++;
                                                            
                                                            echo '<tr><td class="text-dark">'.$serial.'</td>';
                                                            
                                                            echo '<td><a style="color: black" href="single_product?id='.$product['product_id'].'" target="_blank">'.$product['product_name'].'</a></td>';
                                                            
                                                            echo '<td class="text-center text-dark">'.$product['qty'].'</td>';
                                                            
                                                            echo '<td class="text-dark">৳ '.$product['product_price'].'</td>';
                                                            
                                                            echo '<td class="text-dark">৳ '.$product['total_price'].'</td>';
                                                            
                                                            echo '<td><button type="submit" class="btn btn-warning btn-sm pointer" onclick="send_refund_request()">Send</button></td></tr>';
                                                          
                                                          }
                                                    }
                                                    
                                                    
                                                    ?>
                                                    
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card mt-4">
                                    <div class="card-header bg-info">
                                    <b class="fs-15 text-white">Order Ammount</b>
                                    </div>
                                    <div class="card-body bg-secondary">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="w-50 fw-600 text-dark">Subtotal</td>
                                                    <td class="text-right">
                                                        <span class="strong-600 text-dark">৳ <?=$sub_total?></span></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50 fw-600 text-dark">Shipping</td>
                                                    <td class="text-right text-dark">
                                                    <span class="text-italic text-dark">
                                                    <?php 
									    
                    									    if($order['shipping_area']=='Inside Dhaka'){
                    									       
                    										    echo '৳ 60';
                    									        
                    									    }else if($order['shipping_area']=='Outside Dhaka'){
                    									
                    										echo '৳ 120';
                        									
                    									        
                    									    }
                    										
                    								    ?>
                                                       .00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50 fw-600 text-dark">Discount</td>
                                                    <td class="text-right text-dark">
                                                       <span class="text-italic text-dark"><?php if($coupon['coupon_type']=='Fixed'){echo '৳ '.$coupon['coupon_discount'];}else{echo $coupon['coupon_discount'].' %';}?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50 fw-600 text-dark">Bkash</td>
                                                    <td class="text-right text-dark">
                                                        <span class="text-italic text-dark">
                                                    <?php
                    								    if($order['pmode'] == 'Bkash'){
                    								        $payable_amount =  (int)$order['amount_to_pay'];
                    										$bkash = ($payable_amount*2)/100;
                    								        
                        								    echo '৳ '.$bkash;
                    								    }else{
                    								        echo 'N/A';
                    								    }
                    								
                    								?>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50 fw-600 text-dark">Total</td>
                                                    <td class="text-right text-dark">
                                                        <strong>
                                                            <span>৳ <?=$order['amount_to_pay']?>.00</span>
                                                        </strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="py-4 mt-4 col-sm-10 m-auto">
                            <form action="order-details-post.php" method="POST">
                                    <div class="form-group">
                                        <div class="row">
                                            <!-- This input field catch for unique id -->
                                            <input type="hidden" value="<?=$order['id']?>" name="id">

                                            <div class="col-sm-6 mt-4 mb-4">
                                            <label class="text-dark h6" for="inputState">Payment Status</label>
                                            <select id="inputState" class="form-control" name="payment_status">
                                                <option hidden selected>
                                                    <?php
                                                        if($order['user_pay_status'] == 1){
                                                            echo "Paid";
                                                        }
                                                        else{
                                                            echo "Unpaid";
                                                        }
                                                    ?>
                                                </option>
                                                <option>Unpaid</option>
                                                <option>Paid</option>
                                            </select>
                                            </div>
                                            <div class="col-sm-6 mt-4 mb-4">
                                            <label class="text-dark h6" for="inputStatus">Delivery Status</label>
                                            <select id="inputStatus" class="form-control" name="order_status">
                                                <option hidden selected><?=$order['order_status']?></option>
                                                <option>Pending</option>
                                                <option>On delivery</option>
                                                <option>Delivered</option>
                                                <option>Canceled</option>
                                            </select>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                </div>
        
                                <!-- .modal-footer -->
                                <div class="modal-footer">
                                <a href="orders" type="submit" class="btn bg-danger text-white">Cancel</a>
                                <button type="submit" value="submit" class="btn btn-success">
                                    Save Change
                                </button>
                            </form>
                    </div>
                    <!-- .modal-footer -->

                </div><!-- .modal-body -->
                
                </div>
            </div><!-- /.modal-dialog -->
            <!-- Show Bootstrap Modal page End -->

        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->

    <!-- ########## END: MAIN PANEL ########## -->

<?php
include 'footer.php';
?>

