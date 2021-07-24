<?php
include 'header.php';
if(isset($_POST['submit'])){
    $company_name = htmlspecialchars($_POST['company_name']);
    $visit_link = htmlspecialchars($_POST['visit_link']);
    $company_image_name = $_FILES['company_logo']['name'];
    $after_explode = explode(".", $company_image_name);
    $image_extension = end($after_explode);
    $accepted_extension = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG', 'webp', 'WEBP', 'GIF', 'gif'];
    
    if(!in_array($image_extension, $accepted_extension)){
        $_SESSION['image_extention_missing'] = "This image formate is not accepted!";
        die();
    } 
    if($_FILES['company_logo']['size'] > 1000000){
        echo "";
        $_SESSION['file_size_not_accepting'] = "This file size greater than 1 MB!";
        die();
    }
    // image uploade start
    $image_new_name = random_int(123123, 2345234) . "PART-ner" . "." . $image_extension;

    $image_temp_location = $_FILES['company_logo']['tmp_name'];    
    $new_location = "images/partner_image/" . $image_new_name;
    move_uploaded_file($image_temp_location, $new_location);
    // image uploade End

    $insert_query = "INSERT INTO partners(company_name, company_logo, visit_link) VALUES ('$company_name', '$image_new_name', '$visit_link')";
    $header_settings = mysqli_query($con, $insert_query);
    $_SESSION['partner_create_status'] = "Partner Successfully Created!";
}
$select_query = "SELECT * FROM partners";
$partners_info = mysqli_query($con, $select_query);

?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item">header settings</a>
      </nav>
      <div class="col-lg-12 sl-pagebody m-auto">
        <div class="row">
            <div class="col-lg-7 col-md-9 col-sm-12">
                <div class="card">
                    <div class="card-header text-white bg-info bg-info h5 p-3">Our All Partners</div>
                    <div class="card-body">
                        <?php
                        if(isset($_SESSION['partner_delete_status'])){
                            ?>
                                <div class="alert alert-success">
                                <?php
                                    echo $_SESSION['partner_delete_status'];
                                    unset($_SESSION['partner_delete_status']);
                                ?>
                                </div>
                            <?php
                        }
                        ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Serial No</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Prtners Brand Logo</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $serial_no = 1;
                                foreach($partners_info as $prtner):
                                    ?>
                                    <tr class="text-center">
                                        <th scope="row"><?= $serial_no ?></th>
                                        <td><?=$prtner['company_name']?></td>
                                        <td>
                                            <img width="100px" height="100px" src="images/partner_image/<?=$prtner['company_logo']?>" alt="brand image">
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-danger" href="remove_partner_brand.php?id=<?=$prtner['id']?>" onclick="return confirm('Are you sure want to remove?');"><i class="fa fa-trash-o tx-24"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $serial_no++;
                                endforeach;
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-8">
                <div class="card">
                    <div class="card-header text-white bg-info bg-info h5 p-3">Create Partnership</div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                            <?php
                            if(isset($_SESSION['image_extention_missing'])){
                                ?>
                                    <div class="alert alert-success">
                                    <?php
                                        echo $_SESSION['image_extention_missing'];
                                        unset($_SESSION['image_extention_missing']);
                                    ?>
                                    </div>
                                <?php
                            }
                            ?>

                            <?php
                            if(isset($_SESSION['partner_create_status'])){
                                ?>
                                    <div class="alert alert-success">
                                    <?php
                                        echo $_SESSION['partner_create_status'];
                                        unset($_SESSION['partner_create_status']);
                                    ?>
                                    </div>
                                <?php
                            }
                            ?>
                            <div class="form-group">
                                <label class="h6" for="exampleInputEmail1">Partner Company Name :</label>
                                <input type="text" class="form-control" value="" placeholder="Company Name :" name="company_name">
                            </div>

                            <div class="form-group">
                                <label class="h6" for="exampleInputEmail1">Partner Company Logo :</label>
                                <input type="file" class="form-control" value="" name="company_logo">
                            </div>

                            <div class="form-group">
                                <label class="h6" for="exampleInputEmail1">Website link :</label>
                                <input type="text" class="form-control" value="" name="visit_link">
                            </div>

                            <div class="text-center mt-4 mb-2">
                                <button type="submit" name="submit" class="btn btn-primary ">Save Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->
<?php
  require_once 'footer.php';
?>
