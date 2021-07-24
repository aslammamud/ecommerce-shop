<?php
include 'connection.inc.php';
include 'functions.inc.php';
include ('header.php');
include ('single_nav.php');

$phn = '';
$error='';

if(isset($_POST['submit'])) {
	if(empty($_POST['givenuserphone'])){
		$error = '<b style="color:red;">Please enter phone no.</b>';
	}else if(preg_match("/^[0-9][0-9]*$/",$_POST['givenuserphone'])){
		$phn = htmlspecialchars($_POST['givenuserphone']);
		
		if(strlen($_POST['givenuserphone'])<11){
			$error = '<b style="color:red;">Mobile no should be 11 digits long.</b>';
		}else if(preg_match("/^(?:\+88|01)?(?:\d{11}|\d{13})$/",$_POST['givenuserphone'])){			
			$sql = "SELECT user_phone FROM user";
			$result = mysqli_query($con,$sql);
			$data = mysqli_fetch_assoc($result);
			if($data['user_phone']== $phn){
				$error = '<b style="color:red;">Mobile no already used ! Try another number.</b>';
			}else{
				$_SESSION['givenphone'] = htmlspecialchars($_POST['givenuserphone']);			
				//header("Location: signup-verify-phone.php");
				echo  reloader('signup-verify-phone.php',0);
				exit();
				die();	
			 }
		}else if(strlen($_POST['givenuserphone'])>11){
			$error = '<b style="color:red;">Mobile no should be 11 digits.</b>';
		}


	}else{
		$error = '<b style="color:red;">Mobile no should be digits only</b>';
	}
}
?>



<!--====== Backend code for login Page =========-->
<?php
$msg = '';
$err = '';
$phn = '';
$pass = '';


if(isset($_POST['submit'])) {
	
	if(isset($_POST['password'])){
		$pass = $_POST['password'];
	}
	if(empty($_POST['phone'])){
		$err = '<b>Please enter phone no.</b>';
	}else if(preg_match("/^[0-9][0-9]*$/",$_POST['phone'])){
		$phn = $_POST['phone'];
		if(preg_match("/^(?:\+88|01)?(?:\d{11}|\d{13})$/",$_POST['phone'])){		
			$phonenum = get_safe_value($con,htmlspecialchars($_POST['phone']));			
			$phone = preg_replace('/^\+?88|\|88|\DD/', '', ($phonenum));
			$password = get_safe_value($con,htmlspecialchars($_POST['password']));
				
			$sql = "SELECT user_id,user_phone,user_pass FROM user";
			$result = mysqli_query($con,$sql);   
			$count = mysqli_num_rows($result);

			if($count>0){
				
				foreach($result as $user){
					if( $user['user_phone']== $phone){
						$flag_phone = true;
						$err = '';
						
						if( $user['user_pass']== $password){
						$flag_pass = true;
						$msg = '';
						
						$sql_authentic_user = "SELECT * FROM user WHERE user_phone = '$phone' and user_pass = '$password'";
						$result_authentic_user = mysqli_query($con,$sql_authentic_user);   
						$data_authentic_user = mysqli_fetch_assoc($result_authentic_user);
						$count_authentic_user = mysqli_num_rows($result_authentic_user);
						
						if($count_authentic_user>0){
							$_SESSION['abc_lgn']= true;
							$_SESSION['abc_usr_id']=$data_authentic_user['user_id'];
							echo  reloader('index.php',0);
							//header("Location: index.php");
							exit();
							die(); 
							
						}					

						
						}else{
							$flag_pass = false;
							$msg = '<b>Please enter correct password.<b>';
						}
					}else{
						$flag_phone = false;
						$err = '<p>Please enter correct number.<p>';
					}
					
					
				}
				
				
			}
		}
		
		if(strlen($_POST['phone']) < 11){
			$flag_phone = false;
			$err = '<b>Mobile no should be 11 digits long.</b>';
		}
		
		if(strlen($_POST['phone']) > 11){
			$flag_phone = false;
			$err = '<b>Mobile no should be 11 digits only</b>';
		}
	}else{
		$flag_phone = false;
		$err = '<b>Mobile no should be digits only<b>';
	}

}
?>
<!--====== Backend code for login Page End =========-->




  <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
            <li><strong>My Account</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End -->
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="page-content">
        <div class="account-login">

          <div class="box-authentication">
            <style>
              .error-msg{
                color:red;
              }
              .succ-msg{
                color:green;
              }
              .fntsz{
                font-size:18px;
              }
            </style>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

              <h4>Login</h4>
              <p class="before-login-text">Welcome back! Sign in to your account</p>

              <?php if(isset($flag_phone) && $flag_phone==true){
                  echo ' <b class="succ-msg">Phone No. :</b>';
                }else if(isset($flag_phone) && $flag_phone==false){
                  echo '<b class="error-msg">Phone No. :</b>';
                }else{
                  echo 'Phone No :';
                } 
              ?>

              <input class="form-control inptex" id="emmail_login" type="tel" name="phone" value="<?php echo $phn; ?>" required>
              <?php 
                if(!empty($err)){
                  echo '<div class="error-msg fntsz text-left p-b-15">'.$err.'</div>'; 
                }else{
                  echo '<br>';
                }
              ?>

              <?php if(isset($flag_pass) && $flag_pass==true){
                  echo ' <b class="succ-msg">Password :</b>';
                }else if(isset($flag_pass) && $flag_pass==false){
                  echo '<b class="error-msg">Password :</b>';
                }else{
                  echo 'Password :';
                } 
              ?>

              <input class="form-control inptex" type="password" id="password_login" value="<?php echo $pass; ?>" required>
              <?php 
                if(!empty($msg)){
                  echo '<div class="error-msg fntsz text-left p-b-15">'.$msg.'</div>'; 
                }
              ?>

              <p class="forgot-pass"><a href="#">Lost your password?</a></p>

              <button class="button apply" name="submit" type="submit" value="Login"><i class="icon-lock icons"></i>&nbsp; <span>Login</span></button>

              <label class="inline" for="rememberme">
              <input type="checkbox" value="forever" id="rememberme" name="rememberme">
              Remember me </label>

            </form>


          </div>

          <div class="box-authentication">
            <h4>Register</h4>
            <p>Create your very own account</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label>Phone Number<span class="required">*</span></label>
            <input class="form-control" type="text" name="givenuserphone" value="<?php echo $phn; ?>" required>
            <?php
                if(!empty($error)){
                  echo '<div class="text-left fntsz p-b-15">'.$error.'</div>'; 
                }
                ?>
            <button name="submit" class="button"><i class="icon-user icons"></i>&nbsp; <span>Register</span></button>
            </form>	


            <div class="register-benefits">
              <h5>Sign up today and you will be able to :</h5>
              <ul>
                <li>Speed your way through checkout</li>
                <li>Track your orders easily</li>
                <li>Keep a record of all your purchases</li>
              </ul>
            </div>
          </div>

        </div>
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


<?php
  require_once ('footer.php');
?>