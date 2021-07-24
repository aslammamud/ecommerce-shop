<?php
include 'header.php';

// Select query for total orders
$select_query = "SELECT * FROM orders";
$select_order_info = mysqli_query($con, $select_query);

// select query for Pending orders
$select_query_pending_order = "SELECT id FROM orders WHERE order_status = 'Pending'";
$pending_order_from_db = mysqli_query($con, $select_query_pending_order);

// select query for On-delivery orders
$select_query_ondelivery_order = "SELECT id FROM orders WHERE order_status = 'On delivery'";
$ondelivery_order_from_db = mysqli_query($con, $select_query_ondelivery_order);

// select query for Confirmed/successfull orders
$select_query_success_order = "SELECT id FROM orders WHERE order_status = 'Delivered'";
$success_order_from_db = mysqli_query($con, $select_query_success_order);

$today = date("Y-m-d");
$fulldate = explode('-',$today);
//$day = $fulldate[2];
$month = $fulldate[1];
$year = $fulldate[0];

$this_month_start = $year.'-'.$month.'-01';
$this_month_end = $year.'-'.$month.'-31';

$this_year_start = $year.'-01-01';
$this_year_end = $year.'-12-31';

//$todays_order_select_query = "SELECT id FROM orders WHERE `order_date` between  '28/03/2021' and '30/03/2021'";
//$todays_order = mysqli_query($con, $todays_order_select_query);

$todays_order_select_query = "SELECT id FROM orders WHERE `order_date`= '$today'";
$todays_order = mysqli_query($con, $todays_order_select_query);

$monthly_order_select_query = "SELECT id FROM orders WHERE `order_date` between '$this_month_start' and '$this_month_end'";
$monthly_order = mysqli_query($con, $monthly_order_select_query);

$yearly_order_select_query = "SELECT id FROM orders WHERE `order_date` between '$this_year_start' and '$this_year_end'";
$yearly_order = mysqli_query($con, $yearly_order_select_query);


?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      
	  <nav class="breadcrumb sl-breadcrumb">
		<a class="breadcrumb-item" href="orders">Orders</a>
	  </nav>
      <div class="col-lg-10 sl-pagebody m-auto">
          <div class="row gutters-10">
            <div class="col-md-3">
                <div class="bg-secondary text-white rounded-lg mb-4 overflow-hidden">
                    <div class="px-3 pt-3 text-center">
                        <div class="h3 fw-700"><?=$pending_order_from_db->num_rows?></div>
                        <div class="h5 opacity-50">Pending Orders</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
			<div class="col-md-3">
                <div class="bg-warning text-white rounded-lg mb-4 overflow-hidden">
                    <div class="px-3 pt-3 text-center">
                        <div class="h3 fw-700"><?=$ondelivery_order_from_db->num_rows?></div>
                        <div class="h5 opacity-50">On delivery</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
			<div class="col-md-3">
                <div class="bg-success text-white rounded-lg mb-4 overflow-hidden">
                    <div class="px-3 pt-3 text-center">
                        <div class="h3 fw-700"><?=$success_order_from_db->num_rows?></div>
                        <div class="h5 opacity-50">Successful Orders</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
			<div class="col-md-3">
                <div class="bg-danger text-white rounded-lg mb-4 overflow-hidden">
                    <div class="px-3 pt-3 text-center">
                        <div class="h3 fw-700">0</div>
                        <div class="h5 opacity-50">Order Cancelled</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
			<div class="col-md-3">
                <div class="bg-info text-white rounded-lg mb-4 overflow-hidden">
                  <div class="px-3 pt-3 text-center">
                    <div class="h3 fw-700"><?=$select_order_info->num_rows?></div>
                    <div class="h5 opacity-50">Total Orders</div>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                      <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L26.7,192C53.3,192,107,192,160,202.7C213.3,213,267,235,320,218.7C373.3,203,427,149,480,117.3C533.3,85,587,75,640,90.7C693.3,107,747,149,800,149.3C853.3,149,907,107,960,112C1013.3,117,1067,171,1120,202.7C1173.3,235,1227,245,1280,213.3C1333.3,181,1387,107,1413,69.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
                  </svg>
                </div>
            </div>
			<div class="col-md-3">
                <div class="bg-danger text-white rounded-lg mb-4 overflow-hidden">
                    <div class="px-3 pt-3 text-center">
                        <div class="h3 fw-700"><?=$todays_order->num_rows?></div>
                        <div class="h5 opacity-50">Today Orders</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
			<div class="col-md-3">
                <div class="bg-danger text-white rounded-lg mb-4 overflow-hidden">
                    <div class="px-3 pt-3 text-center">
                        <div class="h3 fw-700"><?=$monthly_order->num_rows?></div>
                        <div class="h5 opacity-50">Monthly Orders</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
			<div class="col-md-3">
                <div class="bg-danger text-white rounded-lg mb-4 overflow-hidden">
                    <div class="px-3 pt-3 text-center">
                        <div class="h3 fw-700"><?=$yearly_order->num_rows?></div>
                        <div class="h5 opacity-50">Yearly Orders</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                    </svg>
                </div>
            </div>

          </div>
          <div class="card">
              <div class="card-header">
                  <h5 class="mb-0 h4">Order History</h5>
              </div>
            <div class="card-body">
                <table class="table aiz-table mb-0 footable footable-1 breakpoint-lg table-bordered" style="">
                  <tbody>
                    <tr>
                      <td class="footable-first-visible text-header h6" style="display: table-cell;">Total orders:</td>
                      <td class="footable-last-visible text-dark" style="display: table-cell;"><?=$select_order_info->num_rows?></td>
                      <td class="footable-last-visible text-center" style="display: table-cell;">
                        <a class="btn btn-outline-primary" href="total-order">Show Details</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="footable-first-visible h6" style="display: table-cell;">Pending orders:</td>
                      <td class="footable-last-visible text-dark" style="display: table-cell;"><?=$pending_order_from_db->num_rows?></td>
                      <td class="footable-last-visible text-center" style="display: table-cell;">
                        <a class="btn btn-outline-primary" href="pending-order">Show Details</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="footable-first-visible h6" style="display: table-cell;">On delivery:</td>
                      <td class="footable-last-visible text-dark" style="display: table-cell;"><?=$ondelivery_order_from_db->num_rows?></td>
                      <td class="footable-last-visible text-center" style="display: table-cell;">
                        <a class="btn btn-outline-primary" href="ondelivery-order">Show Details</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="footable-first-visible h6" style="display: table-cell;">Cancelled orders:</td>
                      <td class="footable-last-visible text-dark" style="display: table-cell;"> 0 </td>
                      <td class="footable-last-visible text-center" style="display: table-cell;">
                        <a class="btn btn-outline-primary" href="cancel-order">Show Details</a>
                      </td>
                    </tr>
                    <tr>  
                      <td class="footable-first-visible h6" style="display: table-cell;">Successful orders:</td>
                      <td class="footable-last-visible text-dark" style="display: table-cell;"><?=$success_order_from_db->num_rows?></td>
                      <td class="footable-last-visible text-center" style="display: table-cell;">
                        <a class="btn btn-outline-primary" href="success-order">Show Details</a>
                      </td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel --> 

  


    <!-- ########## END: MAIN PANEL ########## -->

<?php
include 'footer.php';
?>
