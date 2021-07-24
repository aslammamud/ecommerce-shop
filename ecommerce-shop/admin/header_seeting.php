<?php
include 'header.php';
if(isset($_POST['submit'])){
    $welcome_msg = htmlspecialchars($_POST['welcome_msg']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $email_address = htmlspecialchars($_POST['email_address']);
    $update_query = "UPDATE header_settings SET welcome_msg = '$welcome_msg', phone_number = '$phone_number', email_address = '$email_address'";
    $header_settings = mysqli_query($con, $update_query);
    $_SESSION['setting_update_status'] = "Header settings successfully Updated!";
}
$select_query = "SELECT * FROM header_settings WHERE id = 1";
$header_setting = mysqli_fetch_assoc(mysqli_query($con, $select_query));

?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item">header settings</a>
      </nav>
      <div class="col-lg-12 sl-pagebody m-auto">

        <div class="col-lg-8 col-md-10 col-sm-12 m-auto">
            <div class="card">
            <div class="card-header text-white bg-info bg-info h5 p-3">Header Settings</div>
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <?php
                        if(isset($_SESSION['setting_update_status'])){
                            ?>
                            <div class="alert alert-success">
                            <?php
                                echo $_SESSION['setting_update_status'];
                                unset($_SESSION['setting_update_status']);
                            ?>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="form-group">
                            <label class="h6" for="exampleInputEmail1">Welcome message :</label>
                            <input type="text" class="form-control" value="<?=$header_setting['welcome_msg']?>" name="welcome_msg">
                        </div>

                        <div class="form-group">
                            <label class="h6" for="exampleInputEmail1">Phone number :</label>
                            <input type="text" class="form-control" value="<?=$header_setting['phone_number']?>" name="phone_number">
                        </div>

                        <div class="form-group">
                            <label class="h6" for="exampleInputEmail1">Email Address :</label>
                            <input type="text" class="form-control" value="<?=$header_setting['email_address']?>" name="email_address">
                        </div>

                        <div class="text-center mt-4 mb-2">
                            <button type="submit" name="submit" class="btn btn-primary ">Save Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->

<?php
  require_once 'footer.php';
?>
