<?php
$page = 'single';
include ('header.php');
include ('single_nav.php');

if(!isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == false){   
  echo reloader('login_page',0);
  die();
}

// select user information query
$select_query = "SELECT * FROM user WHERE user_id = '$eb_user_id'";
$user_info = mysqli_fetch_assoc(mysqli_query($con, $select_query));

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
                    <div style="text-align: center; font-size: 26px;" class="title"><strong>Profile Information</strong></div>
                    <div style="text-align: center; font-size: 16px;" class="subtitle">If you want change your Information</div>
                </div>
                <form action="profile_post.php" method="POST"  enctype="multipart/form-data">
                  <?php
                    if(isset($_SESSION['image_extention_missing'])){
                      ?>
                      <div class="alert alert-danger">
                          <?php
                            echo $_SESSION['image_extention_missing'];
                            unset($_SESSION['image_extention_missing']);
                          ?>
                      </div>
                    <?php
                    }
                  ?>

                  <?php
                    if(isset($_SESSION['file_size_not_accepting'])){
                      ?>
                      <div class="alert alert-danger">
                          <?php
                            echo $_SESSION['file_size_not_accepting'];
                            unset($_SESSION['file_size_not_accepting']);
                          ?>
                      </div>
                    <?php
                    }
                  ?>

                  <?php
                    if(isset($_SESSION['update_user_info'])){
                      ?>
                      <div class="alert alert-success">
                          <?php
                            echo $_SESSION['update_user_info'];
                            unset($_SESSION['update_user_info']);
                          ?>
                      </div>
                    <?php
                    }
                  ?>
                  <div class="content-box">
                      <div class="basic-group">
                          <div class="form-group">
                              <label for="FristName">Name : </label>
                              <input type="text" class="form-control" id="FristName" value="<?=$user_info['user_name']?>"  name="user_name">
                          </div>

                          <div class="form-group">
                              <label for="FristName">Email address : </label>
                              <input type="email" class="form-control" value="<?=$user_info['user_email']?>"  name="user_email">
                          </div>

                          <div class="form-group">
                              <label for="FristName">Phone : </label>
                              <input type="tel" class="form-control" value="<?=$user_info['user_phone']?>"  name="user_phone">
                          </div>

                          <div class="form-group">
                              <label for="Biography">Current City :</label><br>
                              <input type="text" class="form-control" value="<?=$user_info['user_city']?>" name="user_city">
                          </div>

                          <div class="form-group">
                              <label for="Biography">Shipping Address :</label><br>
                              <input type="text" class="form-control" value="<?=$user_info['user_location']?>"  name="user_location">
                          </div>

                          <div class="basic-group">
                            <div class="form-group">
                                <label for="FristName">Profile Photo : </label><br>
                                <img style="margin-bottom: 10px;" width="120px" height="120px;" src="images/profile_image/<?=$user_info['user_image']?>" alt="Current Profile Photo">
                                <input type="file" class="form-control" value="images/profile_image/<?=$user_info['user_image']?>" name="user_image">
                            </div>
                          </div>

                          <div style="text-align: center;" class="content-update-box">
                              <button type="submit" name="submit" class="all-cart">Save Now</button>
                          </div>
                      </div>
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


