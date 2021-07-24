<?php 
require '../connection.inc.php';
require '../functions.inc.php';

$msg = '';
$err = '';

if(isset($_POST['submit'])) {
	
if(empty($_POST['phone'])){
	$err = '<b style="color:red;">Please enter phone no.<b>';
}else if(preg_match("/^[0-9][0-9]*$/",$_POST['phone'])){
	if(strlen($_POST['phone'])<11){
	$err = '<b style="color:red;">Mobile no should be 11 digits long.<b>';
	}else if(preg_match("/^(?:\+88|01)?(?:\d{11}|\d{13})$/",$_POST['phone'])){
		
		$phone = get_safe_value($con,htmlspecialchars($_POST['phone']));
		$password = get_safe_value($con,htmlspecialchars($_POST['password']));
				
		$sql = "SELECT * FROM user WHERE user_phone = '$phone' and user_pass = '$password'";

		$result = mysqli_query($con,$sql);
		$data = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);

		if($count>0){
			if($data['user_type'] == 'admin'){
				$_SESSION['eb_lgn']= true;
				$_SESSION['eb_usr_id']=$data['user_id'];

				echo reloader('/',0);
				exit();
		}else{
			$msg = '<b style="color:red;">Please enter correct login details.<b>';
		}
	}
}else{
	$err = '<b style="color:red;">Mobile no should be digits only<b>';
}

}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Stylishvalley Admin Dashboard</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
                <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Stylishvalley <span class="tx-info tx-normal">admin</span></div>
                <div class="tx-center mg-b-60">Admin Dashboard</div>

                <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your phone no." name="phone">
                </div><!-- form-group -->
				<?php 
					if(!empty($err)){
						echo '<div class="text-left p-b-15">'.$err.'</div>'; 
					}
					?>
                <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter your admin password" name="password">
				<div class="text-center p-b-15">
					<?php echo $msg; ?>
					</div>
                <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                </div><!-- form-group -->
                <button type="submit" name="submit" class="btn btn-info btn-block">Sign In</button>

                <div class="mg-t-60 tx-center">Not yet a member? <a href="../index.php" class="tx-info">Sign Up</a></div>
            </div><!-- login-wrapper -->
        </form>
    </div><!-- d-flex -->

    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>

  </body>
</html>
