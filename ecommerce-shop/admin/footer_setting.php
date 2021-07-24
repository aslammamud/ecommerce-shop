<?php
include 'header.php';
if(isset($_POST['submit'])){
    $description = htmlspecialchars($_POST['description']);
    $working_start_time = htmlspecialchars($_POST['working_start_time']);
    $working_end_time = htmlspecialchars($_POST['working_end_time']);
    $off_day = htmlspecialchars($_POST['off_day']);
    $fb_link = htmlspecialchars($_POST['fb_link']);
    $tw_link = htmlspecialchars($_POST['tw_link']);
    $insta_link = htmlspecialchars($_POST['insta_link']);
    $google_plus_link = htmlspecialchars($_POST['google_plus_link']);
    $pinterest_link = htmlspecialchars($_POST['pinterest_link']);
    $copyright = htmlspecialchars($_POST['copyright']);

    $update_query = "UPDATE footer_settings SET description = '$description', working_start_time = '$working_start_time', working_end_time = '$working_end_time', off_day = '$off_day', fb_link = '$fb_link', tw_link = '$tw_link', insta_link = '$insta_link', google_plus_link = '$google_plus_link', pinterest_link = '$pinterest_link', copyright = '$copyright'";
    $footer_settings = mysqli_query($con, $update_query);
    $_SESSION['footer_setting_update_status'] = "Footer settings successfully updated!";
}
$select_query = "SELECT * FROM footer_settings WHERE id = 1";
$footer_setting = mysqli_fetch_assoc(mysqli_query($con, $select_query));

?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item">footer settings</a>
      </nav>
      <div class="col-lg-12 sl-pagebody m-auto">

        <div class="col-lg-8 col-md-10 col-sm-12 m-auto">
            <div class="card">
            <div class="card-header text-white bg-info h5 p-3">Footer Settings</div>
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <?php
                            if(isset($_SESSION['footer_setting_update_status'])){
                                ?>
                                <div class="alert alert-success">
                                <?php
                                    echo $_SESSION['footer_setting_update_status'];
                                    unset($_SESSION['footer_setting_update_status']);
                                ?>
                                </div>
                                <?php
                            }
                        ?>
                        <div class="form-group">
                            <label class="h6" for="exampleInputEmail1">Footer Description :</label><br>
                            <textarea class="form-control" rows="3" cols="88" name="description"><?=$footer_setting['description']?></textarea>
                        </div>

                        <div class="form-group">
                            <label class="h6" for="exampleInputEmail1">Office start time :</label>
                            <input type="text" class="form-control" value="<?=$footer_setting['working_start_time']?>" name="working_start_time">
                        </div>

                        <div class="form-group">
                            <label class="h6" for="exampleInputEmail1">Office End time :</label>
                            <input type="text" class="form-control" value="<?=$footer_setting['working_end_time']?>" name="working_end_time">
                        </div>

                        <div class="form-group">
                            <label class="h6" for="exampleInputEmail1">Off Day :</label>
                            <input type="text" class="form-control" value="<?=$footer_setting['off_day']?>" name="off_day">
                        </div>

                        <div class="form-group">
                            <label class="h6" for="exampleInputEmail1">Facebook Link :</label>
                            <input type="text" class="form-control" value="<?=$footer_setting['fb_link']?>" name="fb_link">
                        </div>

                        <div class="form-group">
                            <label class="h6" for="exampleInputEmail1">Twitter Link :</label>
                            <input type="text" class="form-control" value="<?=$footer_setting['tw_link']?>" name="tw_link">
                        </div>
                        <div class="form-group">
                            <label class="h6" for="exampleInputEmail1">Instagram Link :</label>
                            <input type="text" class="form-control" value="<?=$footer_setting['insta_link']?>" name="insta_link">
                        </div>

                        <div class="form-group">
                            <label class="h6" for="exampleInputEmail1">Google plus Link :</label>
                            <input type="text" class="form-control" value="<?=$footer_setting['google_plus_link']?>" name="google_plus_link">
                        </div>

                        <div class="form-group">
                            <label class="h6" for="exampleInputEmail1">Pinterest Link :</label>
                            <input type="text" class="form-control" value="<?=$footer_setting['pinterest_link']?>" name="pinterest_link">
                        </div>

                        <div class="form-group">
                            <label class="h6" for="exampleInputEmail1">Copyright :</label>
                            <input type="text" class="form-control" value="<?=$footer_setting['copyright']?>" name="copyright">
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
