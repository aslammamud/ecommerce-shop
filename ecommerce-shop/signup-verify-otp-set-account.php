<?php 
include 'header.php';
?>
<!-- ---======  Nav part start  ======------->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<style>
  #search button {
    line-height: 24px;
    border: none;
    padding-top: 10px;
    padding-bottom: 19px;
    padding-right: 17px;
    padding-left: 17px;
  }
  
  .page-content{
		max-width: 50%;
		margin: auto;
	}

	.texther {
	    padding-top: 10px;
	    font-size: 22px;
	    padding-bottom: 10px;
	    font-weight: 600;
	}
</style>
<nav>
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-5 jtv-megamenu">
          <div class="mtmegamenu">

          </div>
        </div>

        <div class="col-md-7 col-sm-7 jtv-megamenu">
          <div class="mtmegamenu">
            <ul class="hidden-xs">

              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item">
                  <a href="index.php">
                    <div class="title title_font"><span class="title-text">Home</span></div>
                  </a>
                </div>
              </li>
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item">
                  <a href="login_page.php">
                    <div class="title title_font"><span class="title-text">Login</span></div>
                  </a>
                </div>
              </li>
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item">
                  <a href="signup_page.php">
                    <div class="title title_font"><span class="title-text">Registration</span></div>
                  </a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>

      </div>
    </div>
  </nav>
<!-- ---======  Nav part End  ======----- -->



<?php
$username = '';
$password1 = '';
$password2 = '';
$error='';


if(isset($_POST['passsubmit'])){
	$password1 = get_safe_value($con,htmlspecialchars($_POST['password1']));
	$password2 = get_safe_value($con,htmlspecialchars($_POST['password2']));
	$userphone = get_safe_value($con,htmlspecialchars($_POST['userphone']));
	$username = get_safe_value($con,htmlspecialchars($_POST['name']));

	if (!empty($password1) || !empty($password2)){
		if($password1==$password2){
			$password = $password1;
			if(!empty($password)){
				$_SESSION['usrphn'] = $userphone;
				$_SESSION['usrnm'] = $username;
				$_SESSION['usrpass'] = $password;

			    echo  reloader('signup-set-account.php',0);
				exit();
				die();
			}
		} else{
			$error = '<b style="color:red;">Password doesn\'t match! Try again<b>';
		}
	}
}

if(isset($_POST['otpsubmit'])){
$userOTP = get_safe_value($con,htmlspecialchars($_POST['otp-key-1'])).get_safe_value($con,htmlspecialchars($_POST['otp-key-2'])).get_safe_value($con,htmlspecialchars($_POST['otp-key-3'])).get_safe_value($con,htmlspecialchars($_POST['otp-key-4']));
$sytemOTP = get_safe_value($con,htmlspecialchars($_POST['otptomatch']));
$userphone = get_safe_value($con,htmlspecialchars($_POST['userphone']));

if($userOTP == $sytemOTP){
		$_SESSION['abc_OTP_verified']= true;
		$_SESSION['abc_OTP_verified'] = $userphone;
	}else{
		$_SESSION['abc_OTP_verified']= false;
		session_unset();
	}
}
if(isset($_SESSION['abc_OTP_verified']) AND $_SESSION['abc_OTP_verified'] == true){
			
		echo '
		<br><div id="alertmessage" class="alert alert-success alert-dismissible mt-2" style="max-width:90%; margin:0 auto; padding: 20px 30px; ">
				  <button onclick="closealert()" type="button" class="close" data-dismiss="alert">×</button>
				  <strong> OTP Successfully Verified! </strong>
				</div>
			<center>
			<div class="texther mt-4"> Create Account </div>

			<div class="checkoutbox">
				<div class="contacta">
					<div class="bildet myfont">
					<form action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="POST">					
						      	<div class="page-content">     
						        	<div class="account-login">
						            		<div class="bildet myfont">

											<h4 class="text-left">Your Name :</h4> 
											 <input class="form-control inptex" type="text" name="name" placeholder="enter your name" value="'.$username.'" required="">
											<br><h4 class="text-left">Password :</h4> 
											<input class="form-control inptex" type="password" name="password1" placeholder="enter your password" value="'.$password1.'" required>
											<br><input class="form-control inptex" type="password" name="password2" placeholder="re-enter password" value="'.$password2.'" required>';
											if(!empty($error)){
												echo '<div class="text-center fntsz p-b-15">'.$error.'</div>'; 
											}
											echo '
											<input type="hidden" name="userphone" value="'.$_SESSION['abc_OTP_verified'].'">
											<br>
											<input class="btn btn-success" name="passsubmit" type="submit" value="Sign Up">

											</div>
									</div>
								</div>
					</form>
					</div>
				</div>
			</div>
			</center>';
			
}else{
		echo '
		<div class="alert alert-danger alert-dismissible mt-2" style="max-width:90%; margin:0 auto; padding: 20px 30px; ">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong class="otp-alert-custom"> OTP Verification Failed! </strong>
				</div>
		<center><div class="mt-3 mb-5"><a class="alert h4 apply resend-opt-custom"  href="account_page.php">Resend OTP</a></div></center>';
}

?>

<?php include('footer.php')?>