<?php
include ('connection.inc.php');
  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $user_phone = $_POST['user_phone'];
  $user_city = $_POST['user_city'];
  $user_location = $_POST['user_location'];

// user information update query 
    $update_query = "UPDATE user SET user_name = '$user_name', user_email = '$user_email', user_phone = '$user_phone', user_city = '$user_city', user_location = '$user_location' WHERE user_id = '$eb_user_id'";
    $user_update_info = mysqli_query($con, $update_query);
    $_SESSION['update_user_info'] = "Your Information successfully updated!";
    header('location: profile.php');

// user image update 
  if($_FILES['user_image']['name']){
        
      $user_image_name = $_FILES['user_image']['name'];
      $after_explode = explode(".", $user_image_name);
      $image_extension = end($after_explode);
      $accepted_extension = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG', 'webp', 'WEBP', 'GIF', 'gif'];
      
      if(!in_array($image_extension, $accepted_extension)){
          $_SESSION['image_extention_missing'] = "This image formate is not accepted!";
          header("location: profile.php");
          die();
      } 
      if($_FILES['user_image']['size'] > 1000000){
          echo "";
          $_SESSION['file_size_not_accepting'] = "This file size greater than 1 MB!";
          header("location: profile.php");
          die();
      }
      $user_image_query = "SELECT user_image FROM user WHERE user_id = '$eb_user_id'";
      $old_image_name = mysqli_fetch_assoc(mysqli_query($con, $user_image_query))['user_image'];

      if($old_image_name != "default.png"){
          unlink("images/profile_image/" . $old_image_name);
      }
      // image uploade start
      $image_new_name = random_int(123123, 2345234) . "STYLISH" . "." . $image_extension;

      $user_temp_location = $_FILES['user_image']['tmp_name'];    
      $new_location = "images/profile_image/" . $image_new_name;
      move_uploaded_file($user_temp_location, $new_location);
      // image uploade End

      // Database image update start
      $update_query = "UPDATE user SET user_image = '$image_new_name' WHERE user_id = '$eb_user_id'";
      mysqli_query($con, $update_query);
      // Database image update End
    }
    
?>