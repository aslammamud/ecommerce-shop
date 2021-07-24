<?php
include 'header.php';

if(isset($_SESSION['usrphn']) AND isset($_SESSION['usrnm']) AND isset($_SESSION['usrpass'])){
	
$userphone = get_safe_value($con,htmlspecialchars($_SESSION['usrphn']));
$username = get_safe_value($con,htmlspecialchars($_SESSION['usrnm']));
$password = get_safe_value($con,htmlspecialchars($_SESSION['usrpass']));
$user_join_date = date("Y-m-d");

$sql = "SELECT * FROM user";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);

if($count>0){
	$usernext = (int)($count+1) ;
	$insertusert = "INSERT INTO user (user_id, user_name, user_pass, user_email, user_email_token, user_email_ver, user_pass_recovered, user_join_date, user_about, user_tagline, user_skill, user_location, user_city, user_region, user_phone, user_phone_ver, user_type, user_verified, user_level) VALUES (NULL, '$username', '$password', 'user$usernext@customer.com', '', '', '', '$user_join_date', '', '', '', '', 'Dhaka', '', '$userphone', '1', 'Customer', '0', '1')";
	mysqli_query($con,$insertusert);

	echo '<div class="alert alert-success alert-dismissible mt-2" style="max-width:90%; margin:5px auto; padding: 20px 30px; ">
		  <button type="button" class="close" data-dismiss="alert">×</button>
		  <strong> Signup Successful! </strong></div>';
			
			$sql_authentic_user = "SELECT * FROM user WHERE user_phone = '$userphone' and user_pass = '$password'";
			$result_authentic_user = mysqli_query($con,$sql_authentic_user);   
			$data_authentic_user = mysqli_fetch_assoc($result_authentic_user);
			$count_authentic_user = mysqli_num_rows($result_authentic_user);
			mysqli_close($con);
			if($count_authentic_user>0){
				$_SESSION['eb_lgn']= true;
				$_SESSION['eb_usr_id']=$data_authentic_user['user_id'];
                    
                if(isset($_SESSION['unloggeduser']) && $_SESSION['unloggeduser'] == true){
                    
				    echo  reloader('checkout',0);
					exit();
					die(); 
					}else{
					    echo  reloader('/',0);
						exit();
						die(); 
					} 
				
			}			
	
}else{
	$usernext = (int)($count+1) ;
	$insertusert = "INSERT INTO user (user_id, user_name, user_pass, user_email, user_email_token, user_email_ver, user_pass_recovered, user_join_date, user_about, user_tagline, user_skill, user_location, user_city, user_region, user_phone, user_phone_ver, user_type, user_verified, user_level) VALUES (NULL, '$username', '$password', 'user$usernext@customer.com', '', '', '', '$user_join_date', '', '', '', '', 'Dhaka', '', '$userphone', '1', 'Customer', '0', '1')";
	mysqli_query($con,$insertusert);	
	
	echo '<div class="alert alert-success alert-dismissible mt-2" style="max-width:90%; margin:5px auto; padding: 20px 30px; ">
		  <button type="button" class="close" data-dismiss="alert">×</button>
		  <strong> Signup Successful! </strong></div>';
			$sql_authentic_user = "SELECT * FROM user WHERE user_phone = '$userphone' and user_pass = '$password'";
			$result_authentic_user = mysqli_query($con,$sql_authentic_user);   
			$data_authentic_user = mysqli_fetch_assoc($result_authentic_user);
			$count_authentic_user = mysqli_num_rows($result_authentic_user);
			mysqli_close($con);
			if($count_authentic_user>0){
				$_SESSION['eb_lgn']= true;
				$_SESSION['eb_usr_id']=$data_authentic_user['user_id'];

                if(isset($_SESSION['unloggeduser']) && $_SESSION['unloggeduser'] == true){
                    
				    echo  reloader('checkout',0);
					exit();
					die(); 
					}else{
					    echo  reloader('/',0);
						exit();
						die(); 
					} 
					
			}	
}
}else{
	echo  reloader('index.php',0);
	session_unset();
	session_destroy();
	exit();
	die();
}
include 'footer.php';
?>
