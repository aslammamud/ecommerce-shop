<?php

include 'header.php';

//Declare today and yesterday
$today = date("Y-m-d");
$yesterday = new DateTime();
$yesterday->add(DateInterval::createFromDateString('yesterday'));
$yesterday = $yesterday->format("Y-m-d");

//Get recent day,month,year
$fulldate = explode('-',$today);
$day = $fulldate[2];
$month = $fulldate[1];
$year = $fulldate[0];

$last_year_today = date("Y-m-d", strtotime("-1 years"));
$lastyeardate = explode('-',$last_year_today);
$last_year = $lastyeardate[0];

//Declare starting and ending state of this week
$this_saturday = date('Y-m-d', strtotime('saturday this week'));
$this_friday = date('Y-m-d', strtotime('friday next week'));

//Declare starting and ending state of last week
$last_saturday = date('Y-m-d', strtotime('saturday this week'));
$last_friday = date('Y-m-d', strtotime('friday next week'));

//Declare starting and ending state of this month
$this_month_start = $year.'-'.$month.'-01';
$this_month_end = $year.'-'.$month.'-31';

//Declare starting and ending state of last month
if($month == 1){
$last_month_start = $year.'-12-01';
$last_month_end = $year.'-12-31';
}else{
$new_month = (int)$month-1;
$last_month_start = $year.'-'.$new_month.'-01';
$last_month_end = $year.'-'.$new_month.'-31';
}

//Declare starting and ending state of this year
$this_year_start = $year.'-01-01';
$this_year_end = $year.'-12-31';

//Declare starting and ending state of last year
$last_year_start = $last_year.'-01-01';
$last_year_end = $last_year.'-12-31';

//Get today's sales by query
$todays_sale_select_query = "SELECT amount_to_pay FROM orders WHERE `order_date`= '$today'";
$todays_sale = mysqli_query($con, $todays_sale_select_query);
$today_sales_total = 0;
foreach($todays_sale as $item_price){
	$today_sales_total += (int)$item_price['amount_to_pay'];
}

//Get yesterday's sales by query
$yesterdays_sale_select_query = "SELECT amount_to_pay FROM orders WHERE `order_date`= '$yesterday'";
$yesterdays_sale = mysqli_query($con, $yesterdays_sale_select_query);
$yesterday_sales_total = 0;
foreach($yesterdays_sale as $item_price){
	$yesterday_sales_total += (int)$item_price['amount_to_pay'];
}


//Get this week's sales by query
$weekly_sale_select_query = "SELECT amount_to_pay FROM orders WHERE `order_date` between '$last_saturday' and '$last_friday'";
$weekly_sale = mysqli_query($con, $weekly_sale_select_query);
$weekly_sales_total = 0;
foreach($weekly_sale as $item_price){
	$weekly_sales_total += (int)$item_price['amount_to_pay'];
}

//Get last week's sales by query
$last_weeks_sale_select_query = "SELECT amount_to_pay FROM orders WHERE `order_date` between '$this_saturday' and '$this_friday'";
$last_weeks_sale = mysqli_query($con, $last_weeks_sale_select_query);
$last_week_sales_total = 0;
foreach($last_weeks_sale as $item_price){
	$last_week_sales_total += (int)$item_price['amount_to_pay'];
}


//Get this month's sales by query
$monthly_sale_select_query = "SELECT amount_to_pay FROM orders WHERE `order_date` between '$this_month_start' and '$this_month_end'";
$monthly_sale = mysqli_query($con, $monthly_sale_select_query);
$monthly_sales_total = 0;
foreach($monthly_sale as $item_price){
	$monthly_sales_total += (int)$item_price['amount_to_pay'];
}

//Get last month's sales by query
$last_month_sale_select_query = "SELECT amount_to_pay FROM orders WHERE `order_date` between '$last_month_start' and '$last_month_end'";
$last_month_sale = mysqli_query($con, $last_month_sale_select_query);
$last_month_sales_total = 0;
foreach($last_month_sale as $item_price){
	$last_month_sales_total += (int)$item_price['amount_to_pay'];
}

//Get this year's sales by query
$yearly_sale_select_query = "SELECT amount_to_pay FROM orders WHERE `order_date` between '$this_year_start' and '$this_year_end'";
$yearly_sale = mysqli_query($con, $yearly_sale_select_query);
$yearly_sales_total = 0;
foreach($yearly_sale as $item_price){
	$yearly_sales_total += (int)$item_price['amount_to_pay'];
}

//Get last year's sales by query
$last_years_sale_select_query = "SELECT amount_to_pay FROM orders WHERE `order_date` between '$last_year_start' and '$last_year_end'";
$last_yearls_sale = mysqli_query($con, $last_years_sale_select_query);
$last_year_sales_total = 0;
foreach($last_yearls_sale as $item_price){
	$last_year_sales_total += (int)$item_price['amount_to_pay'];
}


?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"> Sales Statistics</a>
      </nav>

      <div class="sl-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">৳<?=$today_sales_total?></h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Yesterday's Sales</span>
                </div>
                <div>
                  <h6 class="tx-white mg-b-0">৳<?=$yesterday_sales_total?></h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Week's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">৳<?=$weekly_sales_total?></h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Last Week's Sales</span>
                </div>
                <div>
                  <h6 class="tx-white mg-b-0">৳<?=$last_week_sales_total?></h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">৳<?=$monthly_sales_total?></h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Last Month's Sales</span>
                </div>
                <div>
                  <h6 class="tx-white mg-b-0">৳<?=$last_month_sales_total?></h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">৳<?=$yearly_sales_total?></h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Last Year's Sales</span>
                </div>
                <div>
                  <h6 class="tx-white mg-b-0">৳<?=$last_year_sales_total?></h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-xl-8">
            <div class="card overflow-hidden">
              <div class="card-header bg-transparent pd-y-20 d-sm-flex align-items-center justify-content-between">
                <div class="mg-b-20 mg-sm-b-0">
                  <h6 class="card-title mg-b-5 tx-13 tx-uppercase tx-bold tx-spacing-1">Profile Statistics</h6>
                  <span class="d-block tx-12">October 23, 2017</span>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="#" class="btn btn-secondary tx-12 active">Today</a>
                  <a href="#" class="btn btn-secondary tx-12">This Week</a>
                  <a href="#" class="btn btn-secondary tx-12">This Month</a>
                </div>
              </div><!-- card-header -->
              <div class="card-body pd-0 bd-color-gray-lighter">
                <div class="row no-gutters tx-center">
                  <div class="col-12 col-sm-4 pd-y-20 tx-left">
                    <p class="pd-l-20 tx-12 lh-8 mg-b-0">Note: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula...</p>
                  </div><!-- col-4 -->
                  <div class="col-6 col-sm-2 pd-y-20">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">6,112</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Views</p>
                  </div><!-- col-2 -->
                  <div class="col-6 col-sm-2 pd-y-20 bd-l">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">102</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Likes</p>
                  </div><!-- col-2 -->
                  <div class="col-6 col-sm-2 pd-y-20 bd-l">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">343</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Comments</p>
                  </div><!-- col-2 -->
                  <div class="col-6 col-sm-2 pd-y-20 bd-l">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">960</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Shares</p>
                  </div><!-- col-2 -->
                </div><!-- row -->
              </div><!-- card-body -->
              <div class="card-body pd-0">
                <div id="rickshaw2" class="wd-100p ht-200"></div>
              </div><!-- card-body -->
            </div><!-- card -->

            <!--div class="card pd-20 pd-sm-25 mg-t-20">
              <h6 class="card-body-title tx-13">Horizontal Bar Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <canvas id="chartBar4" height="300"></canvas>
            </div--><!-- card -->

          </div><!-- col-8 -->
          <div class="col-xl-4 mg-t-20 mg-xl-t-0">

            <div class="card pd-20 pd-sm-25">
              <h6 class="card-body-title">Net Profit</h6>
              <p class="mg-b-20 mg-sm-b-30">Labels can be hidden if the slice is less than a given percentage of the pie.</p>
              <div id="flotPie2" class="ht-200 ht-sm-250"></div>
            </div><!-- card -->

            <!--div class="card widget-messages mg-t-20">
              <div class="card-header">
                <span>Messages</span>
                <a href=""><i class="icon ion-more"></i></a>
              </div>
              <div class="list-group list-group-flush">
                <a href="" class="list-group-item list-group-item-action media">
                  <img src="../img/img10.jpg" alt="">
                  <div class="media-body">
                    <div class="msg-top">
                      <span>Mienard B. Lumaad</span>
                      <span>4:09am</span>
                    </div>
                    <p class="msg-summary">Many desktop publishing packages and web page editors now use...</p>
                  </div>
                </a>
                <a href="" class="list-group-item list-group-item-action media">
                  <img src="../img/img9.jpg" alt="">
                  <div class="media-body">
                    <div class="msg-top">
                      <span>Isidore Dilao</span>
                      <span>Yesterday 3:00am</span>
                    </div>
                    <p class="msg-summary">On the other hand, we denounce with righteous indignation and dislike...</p>
                  </div>
                </a>
                <a href="" class="list-group-item list-group-item-action media">
                  <img src="../img/img8.jpg" alt="">
                  <div class="media-body">
                    <div class="msg-top">
                      <span>Kirby Avendula</span>
                      <span>Yesterday 3:00am</span>
                    </div>
                    <p class="msg-summary">It is a long established fact that a reader will be distracted by the readable...</p>
                  </div>
                </a>
                <a href="" class="list-group-item list-group-item-action media">
                  <img src="../img/img7.jpg" alt="">
                  <div class="media-body">
                    <div class="msg-top">
                      <span>Roven Galeon</span>
                      <span>Yesterday 3:00am</span>
                    </div>
                    <p class="msg-summary">Than the fact that climate change may be causing it to rapidly disappear... </p>
                  </div>
                </a>
              </div>
              <div class="card-footer">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-3"></i> Load more messages</a>
              </div>
            </div-->
          </div><!-- col-3 -->
        </div><!-- row -->

      </div><!-- sl-pagebody -->
      <footer class="sl-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2021. Bay Coders. All Rights Reserved.</div>
          <div>Made by Bay Coders Software Team</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/DigitalITInstituteBD"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/DigitalITInstituteBD"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


<?php
  require_once 'footer.php';
?>
