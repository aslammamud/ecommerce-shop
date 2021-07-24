<?php
$page = 'single';
$active_nav = 'profile_setting';
include ('header.php');
include ('single_nav.php');

if(!isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == false){   
  echo reloader('login_page.php',0);
  die();
}
?> 
  <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
            <li><strong>Wishlist</strong></li>
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
              <h2 style="margin-top: 20px;">My Profile</h2>
            </div>

            <div class="wishlist-item table-responsive">
            <div class="user-dashboard-content">
                <div class="content-title-box">
                    <div style="text-align: center; font-size: 26px;" class="title"><strong>Change Password</strong></div>
                    <div style="text-align: center; font-size: 16px;" class="subtitle">Edit your information</div>
                </div>
                <form action="profile_setting_post.php" method="POST">
                    
                    <?php
                      if(isset($_SESSION['old_password_status'])){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                              echo $_SESSION['old_password_status'];
                              unset($_SESSION['old_password_status']);
                            ?>
                        </div>
                      <?php
                      }
                    ?>
                    <?php
                      if(isset($_SESSION['password_confirm_password_status'])){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                              echo $_SESSION['password_confirm_password_status'];
                              unset($_SESSION['password_confirm_password_status']);
                            ?>
                        </div>
                      <?php
                      }
                    ?>
                    <?php
                      if(isset($_SESSION['profile_setting_updated_status'])){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                              echo $_SESSION['profile_setting_updated_status'];
                              unset($_SESSION['profile_setting_updated_status']);
                            ?>
                        </div>
                      <?php
                      }
                    ?>
                    <div class="content-box">

                        <div class="link-group">
                            <div class="form-group">
                                <label for="FristName">Old Password : </label>
                                <input type="password" class="form-control" name="old_password" required>
                            </div>
                            <div class="form-group">
                                <label for="FristName">New Password : </label>
                                <input type="password" class="form-control" name="new_password" required>
                            </div>
                            <div class="form-group">
                                <label for="FristName">Confirm mew Password : </label>
                                <input type="password" class="form-control" name="confirm_password" required>
                            </div>
                        </div>

                    </div>
                    <div style="text-align: center;" class="content-update-box">
                        <button type="submit" name="submit" class="all-cart">Save Now</button>
                    </div>
                </form>
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
  
  <!-- Footer -->
<?php
include ('footer.php');
?>


