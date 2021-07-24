<?php
$page = 'single';
$active_nav = 'product_review';
include ('header.php');
include ('single_nav.php');

if(!isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == false){   
  echo reloader('login_page.php',0);
  die();
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
                           <h2 style="margin-top: 20px;">My product review</h2>
                        </div>

                        <table>
                           <tr>
                              <td colspan="60">Nothing to Show</td>
                           </tr>
                        </table>

                        <!-- <div class="dashboard">
                           <div class="welcome-msg">
                              <strong>Hello, MR Mahmud!</strong>
                              <p style="text-color: yellow; margin: 20px;">NOTE: Delivery outside Dhaka may be delayed due to shortage of product in our stock Delivery outside Dhaka may be delayed due to shortage of product in our stock</p>
                           </div>
                           <div class="recent-orders">
                              <div class="title-buttons"><strong style="font-size: 18px;">Recent Orders</strong><a href="#">View All </a> </div>
                              <div class="table-responsive">
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
                                          <th>Order #</th>
                                          <th>Date</th>
                                          <th>Ship to</th>
                                          <th><span class="nobr">Order Total</span></th>
                                          <th>Status</th>
                                          <th>&nbsp;</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="first odd">
                                          <td>1234567</td>
                                          <td>10/05/2017 </td>
                                          <td> jones d</td>
                                          <td><span class="price">$49.00</span></td>
                                          <td><em>Pending</em></td>
                                          <td class="a-center last"><span class="nobr"><a href="#">View Order</a> <span class="separator">|</span><a href="#">Reorder</a> </span></td>
                                       </tr>
                                       <tr class="last even">
                                          <td>987654</td>
                                          <td>10/12/2017 </td>
                                          <td> jones d</td>
                                          <td><span class="price">$79.99</span></td>
                                          <td><em>Pending</em></td>
                                          <td class="a-center last"><span class="nobr"><a href="#">View Order</a> <span class="separator">|</span><a href="#">Reorder</a> </span></td>
                                       </tr>
                                       <tr class="first odd">
                                          <td>1234567</td>
                                          <td>10/05/2017 </td>
                                          <td> jones d</td>
                                          <td><span class="price">$49.00</span></td>
                                          <td><em>Pending</em></td>
                                          <td class="a-center last"><span class="nobr"><a href="#">View Order</a> <span class="separator">|</span><a href="#">Reorder</a> </span></td>
                                       </tr>
                                       <tr class="last even">
                                          <td>987654</td>
                                          <td>10/12/2017 </td>
                                          <td> jones d</td>
                                          <td><span class="price">$79.99</span></td>
                                          <td><em>Pending</em></td>
                                          <td class="a-center last"><span class="nobr"><a href="#">View Order</a> <span class="separator">|</span><a href="#">Reorder</a> </span></td>
                                       </tr>
                                       <tr class="first odd">
                                          <td>1234567</td>
                                          <td>10/05/2017 </td>
                                          <td> jones d</td>
                                          <td><span class="price">$49.00</span></td>
                                          <td><em>Pending</em></td>
                                          <td class="a-center last"><span class="nobr"><a href="#">View Order</a> <span class="separator">|</span><a href="#">Reorder</a> </span></td>
                                       </tr>
                                       <tr class="last even">
                                          <td>987654</td>
                                          <td>10/12/2017 </td>
                                          <td> jones d</td>
                                          <td><span class="price">$79.99</span></td>
                                          <td class="badge batge-outline-danger">pending</td>
                                          <td class="a-center last"><span class="nobr"><a href="#">View Order</a> <span class="separator">|</span><a href="#">Reorder</a> </span></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>

                           <div class="box-account">
                              <div class="page-title">
                                 <h2>Account Information</h2>
                              </div>
                              <div class="col2-set">
                                 <div class="col-1">
                                    <h6>Contact Information</h6>
                                    <a href="#">Edit</a>
                                    <p> jones don<br>
                                       someone@example.com<br>
                                       <a href="#">Change Password</a> 
                                    </p>
                                 </div>
                                 <div class="col-2">
                                    <h5>Newsletters</h5>
                                    <a href="#">Edit</a>
                                    <p> You are currently not subscribed to any newsletter. </p>
                                 </div>
                              </div>
                              <div class="col2-set">
                                 <h5>Address Book</h5>
                                 <div class="manage_add"><a href="#">Manage Addresses</a> </div>
                                 <div class="col-1">
                                    <h5>Primary Billing Address</h5>
                                    <address>
                                       jones d<br>
                                       Hawaii<br>
                                       Britain,  North America, 65432<br>
                                       United States<br>
                                       T: 123456 <br>
                                       <a href="#">Edit Address</a>
                                    </address>
                                 </div>
                                 <div class="col-2">
                                    <h5>Primary Shipping Address</h5>
                                    <address>
                                       jones d<br>
                                       Hawaii<br>
                                       Britain,  North America, 65432<br>
                                       United States<br>
                                       T: 123456 <br>
                                       <a href="#">Edit Address</a>
                                    </address>
                                 </div>
                              </div>
                           </div>

                        </div> -->

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
                              <p>On order over $99</p>
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
                              <p>25% on order over $199</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php include 'footer.php'; ?>