<?php 
$page='single';
include ('dynamic-meta.inc.php');
$dynamic_title="User Invoice | Stylishvalley.com";
include('header.php');
include('single_nav.php');

if(isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == true){

}else{
    echo reloader('index.php',0);
	exit();
	die();
}

if(isset($_GET['invid'])){
$order_id = $_GET['invid'];

$sql="SELECT * from orders WHERE id = '{$order_id}'";

// get token by order id 
$result = mysqli_query($con, $sql);
$order = mysqli_fetch_assoc($result);
$order_token = $order['order_token'];


}else {
	echo reloader('index.php',0);
	exit();
	die();
	
}

?>

<?php 
    if(isset($_POST['submit'])){
	echo reloader('index.php',0);
	}
?>

<style>
  #search button {
    line-height: 24px;
    border: none;
    padding-top: 10px;
    padding-bottom: 19px;
    padding-right: 17px;
    padding-left: 17px;
  }
</style>


<!-- Bootstrap CDN linkup -->
<section class="checkout bg-white">
    <div class="container">
        <div class="row">
            
            <div class="card-header">
                <div class="row text-center">
                    <div class="col-md-12 ">
                        <h2 style="margin-top: 30px;" class="mb-0"><strong> Invoice </strong></h2>
                        <h6 class="mt-1">Please check Your Invoice</h6>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="table" id="printableArea">
                <!-- Projects table -->
                <div class="card-body bg-white">
				<div class="form-group row">
					<div class="col-md-12 text-center">
                            <img width="180px" height="70px" src="images/logo.png" alt="logo">
                        </div>
                    </div>
                    <div class="form-group row">                   
                        <div class="col-md-4" style="padding-top:20px;">
                            <h5 style="color:#f8415f;"> <strong> Order ID : </strong><?= $order['id'];?></h5>
                            <h5 style="color:#f8415f;"> <strong> Order Date : </strong><?= $order['order_date'];?></h5>
                        </div>
                    </div>
                    <div style="margin-top: 30px; margin-bottom: 30px;" class="form-group row">
                        <label class="col-md-4 col-from-label"> 
                            <h4 style="font-size: 23px;" ><strong> Invoice Form</strong></h4>
                            <p  class="alert alert-success" style="color:#000;">Stylishvalley Complex
                            <br>New market, Dhaka
                            <br>Dhaka, Bangladesh</p>
                        </label>
                        <div class="col-md-4 ml-auto">
                            <label> <h4 style="font-size: 23px;" ><strong> Invoice To</strong></h4>
                            <br>
                            <h4 style="color:#14b04f;"><?= $eb_user_name;?></h4>
                            <h4 style="color:#f8415f;"><?= $order['address'];?></h4>
                            </label>
                        </div>

                        <div class="col-md-4 ml-auto">
                            <label> <h4 style="font-size: 23px;" ><strong> Payment Method</strong></h4>
                                <p class="alert alert-success" style="color:#000;"><?= $order['pmode'];?><br>
                                <?= $order['shipping_area'];?><br>

								<?php if($order['pmode'] == 'Cash On Delivery' && $order['shipping_area']=='Inside Dhaka'){
										echo 'Shipping Cost : 60 ৳';
										}else if($order['pmode'] == 'Bkash'){
											echo 'Bkash Send Money To: 017********';
										}else if($order['shipping_area']=='Outside Dhaka'){
											echo 'Shipping Cost : 120 ৳';
										}
										
								?>       
								</p>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group row">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="text-align:left; font-size: 16px;" scope="col"><strong> Purchased Items </strong></th>
                                    <th style="text-align:center; font-size: 16px;" scope="col"><strong>Quantity</strong></th>
                                    <th style="text-align:center; font-size: 16px;" scope="col"><strong>Unit Price</strong></th>
                                    <th style="text-align:center; font-size: 16px;" scope="col"><strong>TOTAL</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    
                                        $query_products = "SELECT * FROM cart where cart_session = '{$order_token}'";
                                        $result_p_query = mysqli_query($con,$query_products);
                                        $count_p = mysqli_num_rows($result_p_query);
                                        
                                        if($count_p>0){
                                            $total_sub = 0;
                                            $count_prod = 0;
                                            foreach($result_p_query as $data){
                                                $count_prod++;
                                                $total_sub += $data['total_price'];
                                                echo '<tr>';
                                                echo '<th style="text-align:left; font-size: 14px;" scope="row">&nbsp &nbsp '.$data['product_name'].'</th>';										
            									echo '<td style="text-align:center; font-size: 14px;">'.$data['qty'].' pcs</td>';
            									echo '<td style="text-align:center; font-size: 14px;">'.$data['product_price'].' ৳</td>';
            									echo '<td style="text-align:center; font-size: 14px;">'.$data['total_price'].' ৳</td>';
                                                echo '</tr>';
                                                
                                            }
                                        }
                                    
                                    ?>
                                    

								<?php 
								    
								    if($count_prod>1){
								        echo '<tr>
									<th style="text-align:left; font-size: 14px;" scope="row"><strong> Sub Total </strong></th>
									<td style="text-align:center; font-size: 14px;"></td>
									<td style="text-align:center; font-size: 14px;"></td>
									<td style="text-align:center; font-size: 14px;">'.$total_sub.' ৳</td>
								    </tr>';
								    }
								    
								    ?>
								
								
						    	
								<tr>
									<th style="text-align:left; font-size: 14px;" scope="row"><strong> Discount </strong></th>
									<td style="text-align:center; font-size: 14px;"></td>
									<td style="text-align:center; font-size: 14px;"></td>
									<td style="text-align:center; font-size: 14px;"> 0 ৳</td>
								</tr>
								
								<?php
								    if($order['pmode'] == 'Bkash'){
								        $payable_amount =  (int)$order['amount_to_pay'];
										$bkash = ($payable_amount*2)/100;
								        
    								    echo '<tr>
        									<th style="text-align:left; font-size: 14px;" scope="row"><strong> Bkash Cost </strong></th>
        									<td style="text-align:center; font-size: 14px;"></td>
        									<td style="text-align:center; font-size: 14px;"></td>
        									<td style="text-align:center; font-size: 14px;">'.$bkash.' ৳</td>
        								    </tr>';
								    }
								
								?>
								
								<tr>
									<th style="text-align:left; font-size: 14px;" scope="row"><strong> Shipping Cost </strong></th>
									<td style="text-align:center; font-size: 14px;"></td>
									<td style="text-align:center; font-size: 14px;"></td>
									<?php 
									    
									    if($order['shipping_area']=='Inside Dhaka'){
									       
										    echo '<td style="text-align:center; font-size: 14px;"> 60 ৳</td>';
									        
									    }else if($order['shipping_area']=='Outside Dhaka'){
									
										echo '<td style="text-align:center; font-size: 14px;"> 120 ৳</td>';
    									
									        
									    }
										
								    ?>
								</tr>

								<tr>
									<th style="text-align:left; font-size: 14px;" scope="row"><strong> Total Ammount </strong></th>
									<td style="text-align:center; font-size: 14px;"></td>
									<td style="text-align:center; font-size: 14px;"></td>
									<td style="text-align:center; font-size: 14px;">
									<?php echo number_format($order['amount_to_pay'],2); ?> ৳</td>
								</tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-12 col-from-label">
                            <h4 style="font-size: 22px;"> <strong> Product Return Policy</strong> </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </label> 
                    </div>
                </div>
            </div>
			<div class="form-group row m-auto mt-5">
                <div class="col-md-2">
                </div>
                <form action="dashboard.php" method="POST">
                <div style="margin-top: 30px; margin-bottom: 30px;" class="col-md-4">
                <button type="submit" name="submit" class="btn btn-block btn-warning">Exit</button>
                </div>   
                </form>							
                <div style="margin-top: 30px; margin-bottom: 30px;" class="col-md-4 m-auto">
                    <button type="button" onclick="printDiv('printableArea')" class="btn btn-block btn-success">Print</button>
                </div>							
                <div class="col-md-2">
                </div>
							
            </div>
        </div>
    </div>
</section>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

<?php 
include('footer.php');
?>