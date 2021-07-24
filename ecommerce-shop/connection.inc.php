<?php
session_start();
$servername = "localhost";
$username = "stylishvalley_admin";
$password = "lpGMvuyqF5ME";
$dbname = "stylishvalley_db";

/*$username = "root";
$password = "";
$dbname = "stylishvalley";*/
$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == true){
		$eb_user_id =  $_SESSION['eb_usr_id'];
		
		$sql = "SELECT * FROM user WHERE user_id = '$eb_user_id'";

		$result = mysqli_query($con,$sql);
		$data = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);

		if($count>0){
			$eb_user_name = $data['user_name'];
			$eb_user_email = $data['user_email'];
			$eb_user_phone = $data['user_phone'];
			$eb_user_pass = $data['user_pass'];
			$eb_user_city = $data['user_city'];
			$eb_user_region = $data['user_region'];
			$eb_user_location = $data['user_location'];
			$eb_user_level = $data['user_level'];
			$eb_user_type = $data['user_type'];
		}
		
	}
?>