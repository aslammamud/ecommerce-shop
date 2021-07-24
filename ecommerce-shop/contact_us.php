<?php
$page='single';
$page_title="shop-page";
include ('dynamic-meta.inc.php');
$dynamic_title="Contact us | Stylishvalley.com";
include ('header.php');
include ('single_nav.php');

$select_info = "SELECT * FROM  header_settings WHERE id = 1;";
$info_result = mysqli_fetch_assoc(mysqli_query($con, $select_info));

if(isset($_POST['submit'])){
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);
        
        $insert_query = "INSERT INTO guest_info (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
        $guest_msg = mysqli_query($con, $insert_query);
        $_SESSION['guest_message'] = "Successfully Submited your message!";
        reloader('contact_us',0);
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
              <li class="home"> <a title="Go to Home Page" href="index">Home</a><span>&raquo;</span></li>
              <li><strong>Contact Us</strong></li>
            </ul>
        </div>
      </div>
  </div>
</div>
<!-- Breadcrumbs End -->
<!-- Main Container -->
<section class="main-container col1-layout">
  <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12">
            <div id="contact" class="page-content page-contact">
              <div class="page-title">
                  <h2 style="font-size: 24px;">Contact Us</h2>
              </div>
              <div id="message-box-conact">We are here for any help</div>
              <div class="row">
                  <div class="col-xs-12 col-sm-6" id="contact_form_map">
                    <h3 style="font-size: 18px;" class="page-subheading">Let's get in touch</h3>
                    <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor dapibus eget. Mauris tincidunt aliquam lectus sed vestibulum. Vestibulum bibendum suscipit mattis.</p>
                    <br/>
                    <ul>
                        <li><i class="fa fa-circle"></i> Praesent nec tincidunt turpis.</li>
                        <li><i class="fa fa-circle"></i> Aliquam et nisi risus.&nbsp;Cras ut varius ante.</li>
                        <li><i class="fa fa-circle"></i> Ut congue gravida dolor, vitae viverra dolor.</li>
                    </ul>
                    <br/>
                    <ul class="store_info">
                        <li><i class="fa fa-home"></i><?=$info_result['welcome_msg']?></li>
                        <li><i class="fa fa-phone"></i><span><?=$info_result['phone_number']?></span></li>
                        <li><i class="fa fa-print"></i><span><?=$info_result['phone_number']?></span></li>
                        <li><i class="fa fa-envelope"></i>Email: <span><a href="<?=$info_result['email_address']?>"><?=$info_result['email_address']?></a></span></li>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                    <?php
                      if(isset($_SESSION['guest_message'])):
                      ?>
                      <div class="alert alert-success">
                          <?php
                          echo $_SESSION['guest_message']; 
                          unset($_SESSION['guest_message']);
                          ?>
                      </div>
                    <?php endif; ?>
                    <h3 style="font-size: 16px;" class="page-subheading">Make an enquiry</h3>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                      <div class="contact-form-box">
                          <div class="form-selector">
                            <label>Your Name*</label>
                            <input type="text" class="form-control input-sm" id="name" name="name" required/>
                          </div>
                          <div class="form-selector">
                            <label>Email Address*</label>
                            <input type="email" class="form-control input-sm" id="email" name="email" required/>
                          </div>
                          <div class="form-selector">
                            <label>Phone No*</label>
                            <input type="text" class="form-control input-sm" id="phone" name="phone" required/>
                          </div>
                          <div class="form-selector">
                            <label>Your Message*</label>
                            <textarea class="form-control" colspan="80" rows="90" name="message" required></textarea>
                          </div>
                          <div class="form-selector">
                            <button class="button" type="submit" name="submit"><i class="icon-paper-plane icons"></i>&nbsp; <span>Send Message</span></button>
                          </div>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
        </section>
      </div>
  </div>
</section>
<!-- Main Container End -->

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

