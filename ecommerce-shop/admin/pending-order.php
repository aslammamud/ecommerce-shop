<?php
include 'header.php';

$select_query = "SELECT * FROM orders WHERE order_status = 'Pending'";
$select_pending_order_info = mysqli_query($con, $select_query);

?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

      <nav class="breadcrumb sl-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="orders">Orders</a></li>
          <li class="breadcrumb-item active" aria-current="page">pending order</li>
        </ol>
      </nav>

      <div class="col-lg-12 sl-pagebody m-auto">
        
        <table class="table table-bordered text-center">
        
          <div class="row gutters-10">
            <div class="col-md-3">
                <div class="bg-info text-white rounded-lg mb-4 overflow-hidden">
                  <div class="px-3 pt-3">
                    <div class="h3 fw-700"><?= $select_pending_order_info->num_rows ?></div>
                    <div class="h5 opacity-50">Pending Order</div>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                      <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L26.7,192C53.3,192,107,192,160,202.7C213.3,213,267,235,320,218.7C373.3,203,427,149,480,117.3C533.3,85,587,75,640,90.7C693.3,107,747,149,800,149.3C853.3,149,907,107,960,112C1013.3,117,1067,171,1120,202.7C1173.3,235,1227,245,1280,213.3C1333.3,181,1387,107,1413,69.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
                  </svg>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-info text-white rounded-lg mb-4 overflow-hidden">
                    <div class="px-3 pt-3">
                        <div class="h3 fw-700"> -- </div>
                        <div class="h5 opacity-50">Update information</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
          </div>

            <thead class="bg-primary">
                <tr>
                    <th class="text-center" scope="row">Customer ID</th>
                    <th class="text-center" scope="row">Customer Name</th>
                    <th class="text-center" scope="col">Email Address</th>
                    <th class="text-center" scope="col">Phone Number</th>
                    <th class="text-center" scope="col">Order Details</th>
                    <th class="text-center" scope="col">Payment Status</th>
                    <th class="text-center" scope="col">Status</th>
                </tr>
            </thead>
            <tbody>

                <?php
                  foreach($select_pending_order_info as $order_info){
                      
                      $customer_id = $order_info['customer_id'];
                      $query_customer = "SELECT * FROM `user` WHERE `user_id` = '$customer_id'";
                      $result_customer = mysqli_query($con,$query_customer);
                      $customer = mysqli_fetch_assoc($result_customer);
                      $cus_name = $customer['user_name'];
                      $cus_phone = $customer['user_phone'];
                      $cus_email = $customer['user_email'];

                    ?>
                      <tr>
                        <td id ="customer_id" class="text-dark"><?=$order_info['customer_id']?></td>
                        <td scope="row" class="text-dark"><?=$cus_name?></td>
                        <td class="text-dark"><?=$cus_phone?></td>
                        <td class="text-dark"><?=$cus_email?></td>
                        <td>
                          <a name="id" class="btn btn-sm btn-outline-info" href="order-details?id=<?=$order_info['id']?>">Order Details</a>
                        </td>
                        <td>
                          <!-- This colom make payment status paid or unpaid -->
                          <?php
                            if($order_info['user_pay_status'] == 0){

                              echo '<a class="badge badge-danger p-2 mt-2" href="#">upaid</a>
                          </td>
                            ';
                          }
                          else{

                          echo '<a class="badge badge-success p-2 mt-2" href="#">paid</a>
                          </td>
                              ';
                            }
                          ?>
                        <td>
                            <?php
                              if($order_info['order_status'] === "Pending"){
                                echo '<a class="badge badge-danger p-2 mt-2" href="#"> Pending </a>';
                                  
                              }
                              elseif($order_info['order_status'] === "On delivery")
                                {
                                echo '<a class="badge badge-warning text-white p-2 mt-2" href="#"> On delivery </a>';
                                  
                              }
                              elseif($order_info['order_status'] === "Delivered")
                                {
                                echo '<a class="badge badge-success p-2 mt-2" href="#"> Delivered </a>';
                                  
                              }elseif($order_info['order_status'] === "Canceled")
                                {
                                echo '<a class="badge badge-danger text-white p-2 mt-2"> Canceled </a>';
                                  
                              }
                            ?>
                        </td>
                      </tr>

                    <?php
                  }
                ?>
                
            </tbody>
        </table>

        <!-- Show Bootstrap Modal page Start -->
        <!-- Always try to place a modal's HTML code in a top-level position in your document to avoid other components affecting the modal's appearance and/or functionality. -->


        <!-- Show Bootstrap Modal page End -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

<?php
  require_once 'footer.php';
?>
