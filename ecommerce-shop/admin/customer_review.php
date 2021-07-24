<?php
include 'header.php';
if(isset($_POST['submit'])){
    $customer_name = htmlspecialchars($_POST['customer_name']);
    $company_name = htmlspecialchars($_POST['company_name']);
    $customer_review = htmlspecialchars($_POST['customer_review']);

    $customer_image_name = $_FILES['customer_image']['name'];
    $after_explode = explode(".", $customer_image_name);
    $image_extension = end($after_explode);
    $accepted_extension = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG', 'webp', 'WEBP', 'GIF', 'gif'];
    
    if(!in_array($image_extension, $accepted_extension)){
        $_SESSION['image_extention_missing'] = "This image formate is not accepted!";
        die();
    } 
    if($_FILES['customer_image']['size'] > 1000000){
        echo "";
        $_SESSION['file_size_not_accepting'] = "This file size greater than 1 MB!";
        die();
    }
    // image uploade start
    $image_new_name = random_int(123123, 2345234) . "PART-ner" . "." . $image_extension;
    $image_temp_location = $_FILES['customer_image']['tmp_name'];    
    $new_location = "images/partner_image/" . $image_new_name;
    move_uploaded_file($image_temp_location, $new_location);
    // image uploade End

    $insert_query = "INSERT INTO customer_reviews (customer_review, customer_name, company_name, customer_image) VALUES ('$customer_review', '$customer_name', '$company_name', '$image_new_name')";
    $customer_review = mysqli_query($con, $insert_query);
    $_SESSION['customer_create_status'] = "Customer Review Successfully Created!";
}
$select_query = "SELECT * FROM customer_reviews";
$customer_review = mysqli_query($con, $select_query);

?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item">customer review</a>
      </nav>
      <div class="col-lg-12 sl-pagebody m-auto">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card">
                    <div class="card-header text-white bg-info bg-info h5 p-3">Write Customer Review</div>
                    <div class="card-body">
                        <?php
                        if(isset($_SESSION['customer_review_delete_status'])){
                            ?>
                                <div class="alert alert-danger">
                                <?php
                                    echo $_SESSION['customer_review_delete_status'];
                                    unset($_SESSION['customer_review_delete_status']);
                                ?>
                                </div>
                            <?php
                        }
                        ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Serial No</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Company Name & Designation</th>
                                    <th scope="col">Customer Review</th>
                                    <th scope="col">Customer Photo</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $serial_no = 1;
                                foreach($customer_review as $customer):
                                    ?>
                                    <tr class="text-center">
                                        <th scope="row"><?= $serial_no ?></th>
                                        <td><?=$customer['customer_name']?></td>
                                        <td><?=$customer['company_name']?></td>
                                        <td><?=$customer['customer_review']?></td>
                                        <td>
                                            <img width="100px" height="100px" src="images/partner_image/<?=$customer['customer_image']?>" alt="brand image">
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-danger" href="remove_customer_review.php?id=<?=$customer['id']?>" onclick="return confirm('Are you sure want to remove?');"><i class="fa fa-trash-o tx-24"></i></a>
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
            <div class="col-lg-4 col-md-5 col-sm-12">
                <div class="card">
                    <div class="card-header text-white bg-info bg-info h5 p-3">Make Customer Review</div>
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
                            if(isset($_SESSION['customer_create_status'])){
                                ?>
                                    <div class="alert alert-success">
                                    <?php
                                        echo $_SESSION['customer_create_status'];
                                        unset($_SESSION['customer_create_status']);
                                    ?>
                                    </div>
                                <?php
                            }
                            ?>
                            <div class="form-group">
                                <label class="h6" for="exampleInputEmail1">Customer Name :</label>
                                <input type="text" class="form-control" value="" placeholder="Customer Name :" name="customer_name">
                            </div>

                            <div class="form-group">
                                <label class="h6" for="exampleInputEmail1">Company Name & Designation :</label>
                                <input type="text" class="form-control" placeholder="Company name & designation:" value="" name="company_name">
                            </div>

                            <div class="form-group">
                                <label class="h6" for="exampleInputEmail1">Customer Review :</label>
                                <textarea class="form-control" name="customer_review" id="" cols="30" rows="6"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="h6" for="exampleInputEmail1">Customer Profile Image :</label>
                                <input type="file" class="form-control" value="" name="customer_image">
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
