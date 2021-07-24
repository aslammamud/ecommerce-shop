<?php
include ('header.php');
$phn = '';
$error='';

if(isset($_POST['submit'])) {
	if(empty($_POST['givenuserphone'])){
		$error = '<b style="color:red; font-size: 14px;">Please enter phone no.</b>';
	}else if(preg_match("/^[0-9][0-9]*$/",$_POST['givenuserphone'])){
		$phn = htmlspecialchars($_POST['givenuserphone']);
		
		if(strlen($_POST['givenuserphone'])<11){
			$error = '<b style="color:red; font-size: 14px;">Mobile no should be 11 digits long.</b>';
		}else if(preg_match("/^(?:\+88|01)?(?:\d{11}|\d{13})$/",$_POST['givenuserphone'])){	
			$sql = "SELECT user_phone FROM user WHERE user_phone = '$phn'";
			$result = mysqli_query($con,$sql);
			$data = mysqli_fetch_assoc($result);
			if($data['user_phone']== $phn){
				$error = '<b style="color:red; font-size: 14px;">Mobile no already used ! Try another number.</b>';
			}else{
				$_SESSION['givenphone'] = htmlspecialchars($_POST['givenuserphone']);			
				//header("Location: signup-verify-phone.php");
				echo  reloader('signup-verify-phone.php',0);
				exit();
				die();	
			 }
		}else if(strlen($_POST['givenuserphone'])>11){
			$error = '<b style="color:red; font-size: 14px;">Mobile no should be 11 digits.</b>';
		}


	}else{
		$error = '<b style="color:red; font-size: 14px;">Mobile no should be digits only</b>';
	}
}
?>
<!-- ---======  Nav part start  ======------->
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
                  <a href="\">
                    <div class="title title_font"><span class="title-text">Home</span></div>
                  </a>
                </div>
              </li>
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item">
                  <a href="login_page">
                    <div class="title title_font"><span class="title-text">Login</span></div>
                  </a>
                </div>
              </li>
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item">
                  <a href="signup_page">
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

<!-- Breadcrumbs -->
  
<div class="breadcrumbs">
<div class="container">
  <div class="row">
	<div class="col-xs-12">
	  <ul>
		<li class="home"> <a title="Go to Home Page" href="\">Home</a><span>&raquo;</span></li>
		<li><strong>My Account</strong></li>
	  </ul>
	</div>
  </div>
</div>
</div>
<!-- Breadcrumbs End -->
  
<!-- Main Container -->
<section class="main-container col1-layout">

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


.bildet {
	margin-left: 400px;
	color: #909090;
	width: 100%;
	box-sizing: border-box;
}

.bildet form {
	display: inline-table;
}

.inptex {
	width: 100% !important;
}
@media (max-width: 900px){
	.bildet {
		margin-left: 400px;
		color: #909090;
		width: 100%;
		box-sizing: border-box;
	}
	
}

@media (max-width: 575px){
	.bildet {
		margin-left: 40px !important;
		color: #909090;
		width: 100%;
		box-sizing: border-box;
	}
	
}

@media (max-width: 400px){
	.bildet {
		margin-left: 10px !important;
		color: #909090;
		width: 100%;
		box-sizing: border-box;
	}
	
}
</style>

<div class="main container">
  <div class="page-content">
	<div class="account-login">

		<div class="box-authentication">
			<div class="bildet myfont">
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