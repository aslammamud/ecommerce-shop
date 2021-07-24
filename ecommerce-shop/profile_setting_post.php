<?php
include ('connection.inc.php');

    // -------- Change user password ----------
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $select_query = "SELECT user_pass FROM user WHERE user_id = '$eb_user_id'";
    $user_pass = mysqli_fetch_assoc(mysqli_query($con, $select_query))['user_pass'];

    // old password checking
    if($user_pass === $old_password){
        // new password & confirm password checking
        if($new_password == $confirm_password){
            $update_query = "UPDATE user SET user_pass = '$new_password' WHERE user_id = '$eb_user_id'";
            mysqli_query($con, $update_query);
            $_SESSION['profile_setting_updated_status'] = "Your Account password successfully updated!";
            header('location: profile_settings.php');
        }else{
            $_SESSION['password_confirm_password_status'] = "Password & Confirm password Doesn't match!";
            header('location: profile_settings.php');
        }
    }else{
        $_SESSION['old_password_status'] = "Your Old Password is Wrong!";
        header('location: profile_settings.php');
    }


?>