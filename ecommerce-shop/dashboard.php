<?php
$page = 'single';
$active_nav = 'dashboard';
include ('dynamic-meta.inc.php');
$dynamic_title="Dashboard | Stylishvalley.com";
include ('header.php');
include ('single_nav.php');

if(!isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == false){   
  echo reloader('login_page.php',0);
  die();
}

$select_query = "SELECT * FROM orders WHERE customer_id = '$eb_user_id' AND `order_status` = 'Pending' ORDER By id DESC";
$orders = mysqli_query($con, $select_query);
// select user information query 
$select_query = "SELECT * FROM user WHERE user_id = '$eb_user_id'";
$user_info = mysqli_fetch_assoc(mysqli_query($con, $select_query));

?>
<!-- Copy Bootstrap CDN  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

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
         <!-- Breadcrumbs -->
         <div class="breadcrumbs">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12">
                     <ul>
                        <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
                        <li><strong>My Dashboard</strong></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- Breadcrumbs End --> 
         <!-- Main Container -->
         <section class="main-container col2-right-layout">
            <div class="main container">
               <div class="row">

                  <?php
                  include ('student_asidebar.php');
                  ?>

                  <div style="background: #f1f1f1; margin-left: 40px;" class="col-main col-sm-8 col-xs-10">
                     <div class="my-account">
                        <div class="page-title">
                           <h2 style="margin-top: 20px;">My Dashboard</h2>
                        </div>
                        <div class="dashboard">
                           <div class="welcome-msg">
                              <strong style="font-size: 14px;">Hello, <?=$user_info['user_name']?></strong>
                              <p style="text-color: yellow; margin: 20px;">NOTE: Delivery outside Dhaka may be delayed due to shortage of product in our stock Delivery outside Dhaka may be delayed due to shortage of product in our stock</p>
                           </div>
                           <div class="recent-orders">
                              <div class="title-buttons"><strong style="font-size: 14px;">Recent Orders</strong><a href="index.php">continue shopping</a> </div>
                              <div class="table-responsive">
                                 <?php
                                 if(isset($_SESSION['delete_status'])){
                                    ?>
                                    <div class="alert alert-success">
                                       <?php
                                          echo $_SESSION['delete_status'];
                                          unset($_SESSION['delete_status']);
                                       ?>
                                    </div>
                                 <?php
                                 }
                                 ?>
                                 <table class="table table-bordered cart_summary table-striped">
                                    <colgroup>
                                       <col>
                                       <col>
                                       <col>
                                       <col width="1">
                                       <col width="1">
                                       <col width="1">
                                    </colgroup>
                                    <thead>
                                       <tr class="first last">
                                        <th class="text-center">Order No.</th>
                                        <th class="text-center">Order Date</th>
                                        <th class="text-left" class="text-center">Payment Method</th>
                                        <th class="text-center" class="text-center" class="text-center">Payment</th>
                                        <th class="text-center" class="text-center" class="text-center" class="text-center">Amount</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Options</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       foreach($orders as $single_order){
                                          ?>
                                          <tr class="first odd">
                                             <td><?=$single_order['id']?></td>
                                             <td><?=$single_order['order_date']?></td>
                                             <td><?=$single_order['pmode']?></td>
                                             <td data-title="Order Payment"><?php if($order['user_pay_status']==0){echo 'Due';}else{echo 'Done';} ?></td>
                                             <td><?=$single_order['amount_to_pay']?> ৳</td>
                                             <td><?=$single_order['order_status']?></td>
                                             <td style="text-align: center;">
                                                <?php
                                                if($single_order['order_status'] == "Pending"):
                                                   ?>
                                                       <a style="margin-top: 8px;" target="_blank" href="user_invoice?invid=<?=$single_order['id']?>" type="submit" class="btn btn-sm btn-info">Invoice</a>
                                                   <?php
                                                endif;
                                                ?>
                                                 <a style="margin-top: 8px; background: red;" href="cancel_order?invid=<?=$single_order['id']?>" type="submit" class="btn btn-sm btn-info"> Cancel</a>
                                               
                                             </td>
                                          </tr>
                                          <?php
                                       }
                                       ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>

                           <div class="box-account">
                              <div class="page-title">
                                 <h2 style="font-size: 20px; margin-top: 100px;">Account Information</h2>
                              </div>
                              <div class="col2-set">
                                 <div class="col-1">
                                    <h4 style="margin-top: 20px;">Contact Information</h4>
                                    <p><?=$user_info['user_name']?> <br>
                                       <?=$user_info['user_email']?> <br>
                                       <?=$user_info['user_phone']?> <br> 
                                    </p>
                                 </div>
                                 <div class="col-2">
                                    <h4>Newsletters</h4>
                                    <p> You are currently not subscribed to any newsletter. </p>
                                 </div>
                              </div>
                              <div class="col2-set">
                                 <div class="col-1">
                                    <h4>Primary Billing Address</h4>
                                    <address>
                                       <?=$user_info['user_name']?><br>
                                       <?=$user_info['user_about']?><br>
                                       <?=$user_info['user_location']?><br>
                                       <?=$user_info['user_city']?><br>
                                       <?=$user_info['user_phone']?><br>
                                    </address>
                                 </div>
                                 <div class="col-2">
                                    <h4>Primary Shipping Address</h4>
                                    <address>
                                       <?=$user_info['user_name']?><br>
                                       <?=$user_info['user_about']?><br>
                                       <?=$user_info['user_location']?><br>
                                       <?=$user_info['user_city']?><br>
                                       <?=$user_info['user_phone']?><br>
                                    </address>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- service section -->
         <div class="jtv-service-area">
            <div class="container">
               <div class="row">
                  <div class="col col-md-3 col-sm-6 col-xs-12">
                     <div class="block-wrapper ship">
                        <div class="text-des">
                           <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
                           <div class="service-wrapper">
                              <h3>World-Wide Shipping</h3>
                              <p>On order over ৳ 99</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-md-3 col-sm-6 col-xs-12 ">
                     <div class="block-wrapper return">
                        <div class="text-des">
                           <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
                           <div class="service-wrapper">
                              <h3>30 Days Return</h3>
                              <p>Moneyback guarantee </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-md-3 col-sm-6 col-xs-12">
                     <div class="block-wrapper support">
                        <div class="text-des">
                           <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
                           <div class="service-wrapper">
                              <h3>Support 24/7</h3>
                              <p>Call us: ( +123 ) 456 789</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-md-3 col-sm-6 col-xs-12">
                     <div class="block-wrapper user">
                        <div class="text-des">
                           <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
                           <div class="service-wrapper">
                              <h3>Member Discount</h3>
                              <p>25% on order over ৳ 199</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php include 'footer.php'; ?>