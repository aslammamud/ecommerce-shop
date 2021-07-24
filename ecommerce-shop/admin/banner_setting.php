<?php
include 'header.php';
if(isset($_POST['submit'])){
    $product_name_one = htmlspecialchars($_POST['product_name_one']);
    $heading_one = htmlspecialchars($_POST['heading_one']);
    $short_description_one = htmlspecialchars($_POST['short_description_one']);

    $product_name_two = htmlspecialchars($_POST['product_name_two']);
    $heading_two = htmlspecialchars($_POST['heading_two']);
    $short_description_two = htmlspecialchars($_POST['short_description_two']);

    $product_name_three = htmlspecialchars($_POST['product_name_three']);
    $heading_three = htmlspecialchars($_POST['heading_three']);
    $short_description_three = htmlspecialchars($_POST['short_description_three']);

    if($_FILES['banner_image_one']['name']){
        // image uploads
        $banner_image_one = $_FILES['banner_image_one']['name'];
        $banner_image_one_explode = explode(".", $banner_image_one);
        $banner_image_one_extention = end($banner_image_one_explode);
        $banner_image_one_new_name = time() . "-" . rand(111, 999) . "." . $banner_image_one_extention;
        $banner_image_one_tmp_location = ($_FILES['banner_image_one']['tmp_name']);
        $banner_image_one_new_location = "images/banner_image/" . $banner_image_one_new_name;
        move_uploaded_file($banner_image_one_tmp_location, $banner_image_one_new_location);
        // image one uploaded code End

        $update_query = "UPDATE banner_settings SET banner_image_one = '$banner_image_one_new_name'";
        $imge_one_result = mysqli_query($con, $update_query);
    }
    
    if($_FILES['banner_image_two']['name']){
        $banner_image_two = $_FILES['banner_image_two']['name'];
        $banner_image_two_explode = explode(".", $banner_image_two);
        $banner_image_two_extention = end($banner_image_two_explode);
        $banner_image_two_new_name = time() . "-" . rand(111, 999) . "." . $banner_image_two_extention;
        $banner_image_two_tmp_location = ($_FILES['banner_image_two']['tmp_name']);
        $banner_image_two_new_location = "images/banner_image/" . $banner_image_two_new_name;
        move_uploaded_file($banner_image_two_tmp_location, $banner_image_two_new_location);
        // image two uploaded code End

        $update_query = "UPDATE banner_settings SET banner_image_two = '$banner_image_two_new_name'";
        $imge_two_result = mysqli_query($con, $update_query);
    }
    
    if($_FILES['banner_image_three']['name']){
        $banner_image_three = $_FILES['banner_image_three']['name'];
        $banner_image_three_explode = explode(".", $banner_image_three);
        $banner_image_three_extention = end($banner_image_three_explode);
        $banner_image_three_new_name = time() . "-" . rand(111, 999) . "." . $banner_image_three_extention;
        $banner_image_three_tmp_location = ($_FILES['banner_image_three']['tmp_name']);
        $banner_image_three_new_location = "images/banner_image/" . $banner_image_three_new_name;
        move_uploaded_file($banner_image_three_tmp_location, $banner_image_three_new_location);
        // image three uploaded code End

        $update_query = "UPDATE banner_settings SET banner_image_three = '$banner_image_three_new_name'";
        $imge_three_result = mysqli_query($con, $update_query);
    }

    $update_query = "UPDATE banner_settings SET product_name_one = '$product_name_one', heading_one = '$heading_one', short_description_one = '$short_description_one', product_name_two = '$product_name_two', heading_two = '$heading_two', short_description_two = '$short_description_two', product_name_three = '$product_name_three', heading_three = '$heading_three', short_description_three = '$short_description_three'";
    $banner_settings = mysqli_query($con, $update_query);
    $_SESSION['banner_setting_update_status'] = "Banner settings successfully updated!";
}
$select_query = "SELECT * FROM banner_settings WHERE id = 1";
$banner_setting = mysqli_fetch_assoc(mysqli_query($con, $select_query));

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item">header settings</a>
    </nav>
    <div class="col-lg-12 sl-pagebody m-auto">
        <div class="card">
        <div class="card-header text-white bg-info bg-info h5 p-3">Banner Settings</div>
            <div class="card-body">
                <?php
                    if(isset($_SESSION['banner_setting_update_status'])){
                        ?>
                        <div class="alert alert-success">
                        <?php
                            echo $_SESSION['banner_setting_update_status'];
                            unset($_SESSION['banner_setting_update_status']);
                        ?>
                        </div>
                        <?php
                    }
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                    <div class="row m-auto">
                    
                        <div class="col-lg-10 m-auto">
                            <div class="card-header text-white bg-secondary h6 p-3">Slider One - 01</div>
                                <div class="card-body bg-light">
                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Image product Name :</label>
                                        <input type="text" class="form-control" value="<?=$banner_setting['product_name_one']?>" name="product_name_one">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Banner Heading :</label>
                                        <input type="text" class="form-control" value="<?=$banner_setting['heading_one']?>" name="heading_one">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Short description :</label>
                                        <input type="text" class="form-control" value="<?=$banner_setting['short_description_one']?>" name="short_description_one">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Select Banner Image: <span class="text-secondary p"> (width: 860 X height: 450)</span> </label><br>
                                        <img width="300px" height="200px" src="images/banner_image/<?=$banner_setting['banner_image_one']?>" alt="Current Image">
                                        <input type="file" class="form-control" value="<?=$banner_setting['banner_image_one']?>" name="banner_image_one">
                                    </div>
                                    
                                </div>
                            </div>
                        </div><br><br>

                        <div class="col-lg-10 m-auto">
                            <div class="card-header text-white bg-secondary h6 p-3">Slider Two - 02</div>
                                <div class="card-body bg-light">

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Image product Name :</label>
                                        <input type="text" class="form-control" value="<?=$banner_setting['product_name_two']?>" name="product_name_two">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Banner Heading :</label>
                                        <input type="text" class="form-control" value="<?=$banner_setting['heading_two']?>" name="heading_two">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Short description :</label>
                                        <input type="text" class="form-control" value="<?=$banner_setting['short_description_two']?>" name="short_description_two">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Select Banner Image: <span class="text-secondary p"> (width: 860 X height: 450)</span> </label><br>
                                        <img width="300px" height="200px" src="images/banner_image/<?=$banner_setting['banner_image_two']?>" alt="Current Image">
                                        <input type="file" class="form-control" value="<?=$banner_setting['banner_image_two']?>" name="banner_image_two">
                                    </div>
                                    
                                </div>
                            </div>
                        </div><br><br>

                        <div class="col-lg-10 m-auto">
                            <div class="card-header text-white bg-secondary h6 p-3">Slider Three - 03</div>
                                <div class="card-body bg-light">

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Image product Name :</label>
                                        <input type="text" class="form-control" value="<?=$banner_setting['product_name_three']?>" name="product_name_three">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Banner Heading :</label>
                                        <input type="text" class="form-control" value="<?=$banner_setting['heading_three']?>" name="heading_three">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Short description :</label>
                                        <input type="text" class="form-control" value="<?=$banner_setting['short_description_three']?>" name="short_description_three">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-dark h6" for="exampleInputEmail1">Select Banner Image: <span class="text-secondary p"> (width: 860 X height: 450)</span> </label><br>
                                        <img width="300px" height="200px" src="images/banner_image/<?=$banner_setting['banner_image_three']?>" alt="Current Image">
                                        <input type="file" class="form-control" value="<?=$banner_setting['banner_image_three']?>" name="banner_image_three">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4 mb-4">
                            <button type="submit" name="submit" class="btn btn-primary ">Save Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->      
<!-- ########## END: MAIN PANEL ########## -->

<?php
include 'footer.php';
?>