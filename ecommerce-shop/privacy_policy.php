<?php
$page='single';
$page_title="privacy-policy-page";
include ('dynamic-meta.inc.php');
$dynamic_title="Privacy Policy | Stylishvalley.com";
include ('header.php');
include ('single_nav.php');
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
              <li class="home"> <a title="Go to Home Page" href="index">Home</a><span>&raquo;</span></li>
              <li><strong>Privacy Policy</strong></li>
            </ul>
        </div>
      </div>
  </div>
</div>
<!-- Breadcrumbs End -->
<div class="container">
    <div style="margin-top: 50px; margin-bottom: 30px;" class="privacy-policy-page">
        <?php
            $select_query = "SELECT * FROM new_pages WHERE page_link = 'privacy_policy.php'";
            $result = mysqli_fetch_assoc(mysqli_query($con, $select_query));
            echo $result['page_content']; 
        ?>
    </div>
</div>

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
              <h3>100% secure payments</h3>
              <p>Credit/ Debit Card/ Banking </p>
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
<!-- service section -->
<?php include('footer.php')?>

