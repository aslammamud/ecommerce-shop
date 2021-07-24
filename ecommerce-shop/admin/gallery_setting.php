<?php
include 'header.php';
if(isset($_POST['submit'])){
    $gallery_header_one = htmlspecialchars($_POST['gallery_header_one']);
    $gallery_offer_one = htmlspecialchars($_POST['gallery_offer_one']);
    $gallery_header_two = htmlspecialchars($_POST['gallery_header_two']);
    $gallery_offer_two = htmlspecialchars($_POST['gallery_offer_two']);
    $gallery_header_three = htmlspecialchars($_POST['gallery_header_three']);
    $gallery_offer_three = htmlspecialchars($_POST['gallery_offer_three']);
    $gallery_header_four = htmlspecialchars($_POST['gallery_header_four']);
    $gallery_offer_four = htmlspecialchars($_POST['gallery_offer_four']);

    if($_FILES['gallery_image_one']['name']){
        // image uploads
        $gallery_image_one = $_FILES['gallery_image_one']['name'];
        $gallery_image_one_explode = explode(".", $gallery_image_one);
        $gallery_image_one_extention = end($gallery_image_one_explode);
        $gallery_image_one_new_name = time() . "-" . rand(111, 999) . "." . $gallery_image_one_extention;
        $gallery_image_one_tmp_location = ($_FILES['gallery_image_one']['tmp_name']);
        $gallery_image_one_new_location = "images/banner_image/" . $gallery_image_one_new_name;
        move_uploaded_file($gallery_image_one_tmp_location, $gallery_image_one_new_location);
        // image one uploaded code End

        $update_query = "UPDATE gallery_settings SET gallery_image_one = '$gallery_image_one_new_name'";
        $imge_one_result = mysqli_query($con, $update_query);
    }
    
    if($_FILES['gallery_image_two']['name']){
        // image uploads
        $gallery_image_two = $_FILES['gallery_image_two']['name'];
        $gallery_image_two_explode = explode(".", $gallery_image_two);
        $gallery_image_two_extention = end($gallery_image_two_explode);
        $gallery_image_two_new_name = time() . "-" . rand(111, 999) . "." . $gallery_image_two_extention;
        $gallery_image_two_tmp_location = ($_FILES['gallery_image_two']['tmp_name']);
        $gallery_image_two_new_location = "images/banner_image/" . $gallery_image_two_new_name;
        move_uploaded_file($gallery_image_two_tmp_location, $gallery_image_two_new_location);
        // image one uploaded code End

        $update_query = "UPDATE gallery_settings SET gallery_image_two = '$gallery_image_two_new_name'";
        $imge_one_result = mysqli_query($con, $update_query);
    }

    if($_FILES['gallery_image_three']['name']){
        // image uploads
        $gallery_image_three = $_FILES['gallery_image_three']['name'];
        $gallery_image_three_explode = explode(".", $gallery_image_three);
        $gallery_image_three_extention = end($gallery_image_three_explode);
        $gallery_image_three_new_name = time() . "-" . rand(111, 999) . "." . $gallery_image_three_extention;
        $gallery_image_three_tmp_location = ($_FILES['gallery_image_three']['tmp_name']);
        $gallery_image_three_new_location = "images/banner_image/" . $gallery_image_three_new_name;
        move_uploaded_file($gallery_image_three_tmp_location, $gallery_image_three_new_location);
        // image one uploaded code End

        $update_query = "UPDATE gallery_settings SET gallery_image_three = '$gallery_image_three_new_name'";
        $imge_one_result = mysqli_query($con, $update_query);
    }

    if($_FILES['gallery_image_four']['name']){
        // image uploads
        $gallery_image_four = $_FILES['gallery_image_four']['name'];
        $gallery_image_four_explode = explode(".", $gallery_image_four);
        $gallery_image_four_extention = end($gallery_image_four_explode);
        $gallery_image_four_new_name = time() . "-" . rand(111, 999) . "." . $gallery_image_four_extention;
        $gallery_image_four_tmp_location = ($_FILES['gallery_image_four']['tmp_name']);
        $gallery_image_four_new_location = "images/banner_image/" . $gallery_image_four_new_name;
        move_uploaded_file($gallery_image_four_tmp_location, $gallery_image_four_new_location);
        // image one uploaded code End

        $update_query = "UPDATE gallery_settings SET gallery_image_four = '$gallery_image_four_new_name'";
        $imge_one_result = mysqli_query($con, $update_query);
    }

    if($_FILES['gallery_banner_image_one']['name']){
        // image uploads
        $gallery_image_four = $_FILES['gallery_banner_image_one']['name'];
        $gallery_image_four_explode = explode(".", $gallery_image_four);
        $gallery_image_four_extention = end($gallery_image_four_explode);
        $gallery_image_four_new_name = time() . "-" . rand(111, 999) . "." . $gallery_image_four_extention;
        $gallery_image_four_tmp_location = ($_FILES['gallery_banner_image_one']['tmp_name']);
        $gallery_image_four_new_location = "images/banner_image/" . $gallery_image_four_new_name;
        move_uploaded_file($gallery_image_four_tmp_location, $gallery_image_four_new_location);
        // image one uploaded code End

        $update_query = "UPDATE gallery_settings SET gallery_banner_image_one = '$gallery_image_four_new_name'";
        $imge_one_result = mysqli_query($con, $update_query);
    }

    if($_FILES['gallery_banner_image_two']['name']){
        // image uploads
        $gallery_image_four = $_FILES['gallery_banner_image_two']['name'];
        $gallery_image_four_explode = explode(".", $gallery_image_four);
        $gallery_image_four_extention = end($gallery_image_four_explode);
        $gallery_image_four_new_name = time() . "-" . rand(111, 999) . "." . $gallery_image_four_extention;
        $gallery_image_four_tmp_location = ($_FILES['gallery_banner_image_two']['tmp_name']);
        $gallery_image_four_new_location = "images/banner_image/" . $gallery_image_four_new_name;
        move_uploaded_file($gallery_image_four_tmp_location, $gallery_image_four_new_location);
        // image one uploaded code End

        $update_query = "UPDATE gallery_settings SET gallery_banner_image_two = '$gallery_image_four_new_name'";
        $imge_one_result = mysqli_query($con, $update_query);
    }

    $update_query = "UPDATE gallery_settings SET gallery_header_one = '$gallery_header_one', gallery_offer_one = '$gallery_offer_one', gallery_header_two = '$gallery_header_two', gallery_offer_two = '$gallery_offer_two', gallery_header_three = '$gallery_header_three', gallery_offer_three = '$gallery_offer_three', gallery_header_four = '$gallery_header_four', gallery_offer_four = '$gallery_offer_four'";
    $gallery_settings = mysqli_query($con, $update_query);
    $_SESSION['gallery_setting_update_status'] = "Gallery settings successfully updated!";
}

$select_query = "SELECT * FROM gallery_settings WHERE id = '1'";
$gallery_setting = mysqli_fetch_assoc(mysqli_query($con, $select_query));

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item">gallery settings</a>
    </nav>
    <div class="sl-pagebody m-auto">
        <div class="card">
            <div class="card-header text-white bg-info bg-info h5 p-3">Gallery Settings</div>
            <div class="card-body">
                <div class="col-lg-12">
                    <?php
                        if(isset($_SESSION['gallery_setting_update_status'])){
                            ?>
                            <div class="alert alert-success">
                            <?php
                                echo $_SESSION['gallery_setting_update_status'];
                                unset($_SESSION['gallery_setting_update_status']);
                            ?>
                            </div>
                            <?php
                        }
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-lg-8 m-auto">
                            <div class="card-header text-white bg-secondary h6 p-3">Gallery One - 01</div>
                                <div class="card-body bg-light">
                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Gallery Image : <span class="text-secondary p"> (width: 360 X height: 410)</span> </label><br>
                                        <img class="mb-2" width="400px;" height="120px;" src="images/banner_image/<?=$gallery_setting['gallery_image_one']?>" alt="not found">
                                        <input type="file" class="form-control" value="<?=$gallery_setting['gallery_image_one']?>" name="gallery_image_one">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Gallery Header :</label>
                                        <input type="text" class="form-control" value="<?=$gallery_setting['gallery_header_one']?>" name="gallery_header_one">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Special Offer (%) :</label>
                                        <input type="text" class="form-control" value="<?=$gallery_setting['gallery_offer_one']?>" name="gallery_offer_one">
                                    </div>
                                    
                                </div>
                            </div>
                        </div><br><br>

                        <div class="col-lg-8 m-auto">
                            <div class="card-header text-white bg-secondary h6 p-3">Gallery Two - 02</div>
                                <div class="card-body bg-light">
                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Gallery Image : <span class="text-secondary p"> (width: 360 X height: 410)</span> </label><br>
                                        <img class="mb-2"  width="400px;" height="120px;" src="images/banner_image/<?=$gallery_setting['gallery_image_two']?>" alt="not found">
                                        <input type="file" class="form-control" value="<?=$gallery_setting['gallery_image_two']?>" name="gallery_image_two">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Gallery Header :</label>
                                        <input type="text" class="form-control" value="<?=$gallery_setting['gallery_header_two']?>" name="gallery_header_two">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Special Offer (%) :</label>
                                        <input type="text" class="form-control" value="<?=$gallery_setting['gallery_offer_two']?>" name="gallery_offer_two">
                                    </div>
                                    
                                </div>
                            </div>
                        </div><br><br>

                        <div class="col-lg-8 m-auto">
                            <div class="card-header text-white bg-secondary h6 p-3">Gallery Three - 03</div>
                                <div class="card-body bg-light">
                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Gallery Image : <span class="text-secondary p"> (width: 360 X height: 186)</span> </label><br>
                                        <img class="mb-2"  width="400px;" height="120px;" src="images/banner_image/<?=$gallery_setting['gallery_image_three']?>" alt="not found">
                                        <input type="file" class="form-control" value="<?=$gallery_setting['gallery_image_three']?>" name="gallery_image_three">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Gallery Header :</label>
                                        <input type="text" class="form-control" value="<?=$gallery_setting['gallery_header_three']?>" name="gallery_header_three">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Special Offer (%) :</label>
                                        <input type="text" class="form-control" value="<?=$gallery_setting['gallery_offer_three']?>" name="gallery_offer_three">
                                    </div>
                                    
                                </div>
                            </div>
                        </div><br><br>

                        <div class="col-lg-8 m-auto pb-4">
                            <div class="card-header text-white bg-secondary h6 p-3">Gallery Four - 04</div>
                                <div class="card-body bg-light">
                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Gallery Image : <span class="text-secondary p"> (width: 360 X height: 186)</span> </label><br>
                                        <img class="mb-2"  width="400px;" height="120px;" src="images/banner_image/<?=$gallery_setting['gallery_image_four']?>" alt="not found">
                                        <input type="file" class="form-control" value="<?=$gallery_setting['gallery_image_four']?>" name="gallery_image_four">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Gallery Header :</label>
                                        <input type="text" class="form-control" value="<?=$gallery_setting['gallery_header_four']?>" name="gallery_header_four">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Special Offer (%) :</label>
                                        <input type="text" class="form-control" value="<?=$gallery_setting['gallery_offer_four']?>" name="gallery_offer_four">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Gallery Banner Image One : <span class="text-secondary p"> (width: 552 X height: 180)</span> </label><br>
                                        <img class="mb-2"  width="400px;" height="120px;" src="images/banner_image/<?=$gallery_setting['gallery_banner_image_one']?>" alt="not found">
                                        <input type="file" class="form-control" value="<?=$gallery_setting['gallery_banner_image_one']?>" name="gallery_banner_image_one">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Gallery Banner Image Two : <span class="text-secondary p"> (width: 552 X height: 180)</span> </label><br>
                                        <img class="mb-2"  width="400px;" height="120px;" src="images/banner_image/<?=$gallery_setting['gallery_banner_image_two']?>" alt="not found">
                                        <input type="file" class="form-control" value="<?=$gallery_setting['gallery_banner_image_two']?>" name="gallery_banner_image_two">
                                    </div>
                                    
                                </div>
                            </div>
                        </div><br><br>

                        <div class="text-center mt-2 mb-4">
                            <button type="submit" name="submit" class="btn btn-primary ">Save Now</button>
                        </div>

                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->      
<!-- ########## END: MAIN PANEL ########## -->

<?php
include 'footer.php';
?>