<?php
$page = 'single';
$active_nav = 'order_list';
include ('dynamic-meta.inc.php');
$dynamic_title="Orders List | Stylishvalley.com";
include ('header.php');
include ('single_nav.php');

if(!isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == false){   
  echo reloader('login_page.php',0);
  die();
}

$select_query = "SELECT * FROM orders WHERE customer_id = '$eb_user_id'";
$orders = mysqli_query($con, $select_query);
$serial=0;

?>
<!-- Copy Bootstrap CDN  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="/">Home</a><span>&raquo;</span></li>
            <li><strong>Orders List</strong></li>
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
              <h2 style="margin-top: 20px;">All Orders Details</h2>
            </div>
            <div class="orders-list table-responsive"> 
              <!--orders list table-->
              <table class="table table-bordered cart_summary table-striped">
                <thead>
                  <tr> 
                    <th class="text-center">Sr.</th>
                    <th class="text-center">Order Date</th>
                    <th class="text-center" >Payment Method</th>
                    <th class="text-center">Payment</th>
                    <th class="text-center">Order Status</th>
                    <th class="text-center">Total Amount</th>
                    <th class="text-center">Invoice</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach($orders as $order):
                      $serial++;
                    ?>
                      <tr>
                      <td class="text-center" data-title="Order No."><?=$serial?></td>
                      <td data-title="Order Date"><?=$order['order_date']?></td>
                      <td data-title="Order Address"><?=$order['pmode']?></td>
                      <td data-title="Order Payment"><?php if($order['user_pay_status']==0){echo 'Due';}else{echo 'Done';} ?></td>
                      <td data-title="Order Status"><?=$order['order_status']?></td>
                      <td data-title="Total"><span class="order-total"><?=$order['amount_to_pay']?> ৳</span></td>
                      <td data-title="Total"><a class="order-total btn btn btn-info" target="_blank" href="user_invoice?invid=<?=$order['id']?> ">view</a></td>
                    </tr>
                  <?php
                    endforeach;
                  ?>

                </tbody>
              </table>
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
  
  <!-- Footer -->
 <?php
 include ('footer.php');
 ?>