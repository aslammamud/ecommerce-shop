<?php
include 'header.php';

$category_select_query = "SELECT * FROM categories";
$category_select_query_from_db = mysqli_query($con, $category_select_query);

$category_select_query = "SELECT * FROM sub_categories";
$sub_category_select_query_from_db = mysqli_query($con, $category_select_query);

$category_select_query = "SELECT * FROM sub_sub_categories";
$sub_sub_category_select_query_from_db = mysqli_query($con, $category_select_query);

?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="category">Category</a>
      </nav>
      <div class="col-lg-12 sl-pagebody m-auto">

        <div class="row gutters-10 p-5">
          <div class="col-md-3">
              <div class="bg-info text-white rounded-lg mb-4 overflow-hidden">
                <div class="px-3 pt-4 pb-5 text-center">
                  <div class="h3 fw-700">0</div>
                    <a class="text-white" href="#"><i class="fa fa-upload tx-30" aria-hidden="true"></i></a>
                  <div class="h5 opacity-50">Remaining Uploads</div>
                </div>
              </div>
          </div>

          <div class="col-md-3">
              <div class="bg-white text-info rounded-lg mb-4 overflow-hidden">
                <div class="px-3 pt-4 pb-5 text-center">
                  <div class="h3 fw-700"> <?=$category_select_query_from_db->num_rows?> </div>
                    <a class="text-info" href="add-category"><i class="fa fa-plus-circle tx-30" aria-hidden="true"></i></a>
                  <div class="h5 opacity-50">Category</div>
                </div>
              </div>
          </div>

          <div class="col-md-3">
              <div class="bg-white text-info rounded-lg mb-4 overflow-hidden">
                <div class="px-3 pt-4 pb-5 text-center">
                  <div class="h3 fw-700"><?=$sub_category_select_query_from_db->num_rows?></div>
                    <a class="text-info" href="add-sub-category"><i class="fa fa-plus-circle tx-30" aria-hidden="true"></i></a>
                  <div class="h5 opacity-50">Sub-category</div>
                </div>
              </div>
          </div>

          <div class="col-md-3">
              <div class="bg-white text-info rounded-lg mb-4 overflow-hidden">
                <div class="px-3 pt-4 pb-5 text-center">
                  <div class="h3 fw-700">00</div>
                    <a class="text-info" href="add-category"><i class="fa fa-plus-circle tx-30" aria-hidden="true"></i></a>
                  <div class="h5 opacity-50">Add New Category</div>
                </div>
              </div>
          </div>

        <!-- Show Main Category Table -->

        <!-- <table class="table text-center">
            <div class="col-lg-6 m-auto">
              <?php
                if(isset($_SESSION['add_category_status'])):
              ?>
                <div class="alert alert-success">
                    <?php
                    echo $_SESSION['add_category_status']; 
                    unset($_SESSION['add_category_status']);
                    ?>
                </div>
              <?php endif; ?>

              <thead class="bg-primary">
                  <tr>
                      <td>Main Category</td>
                      <td>Category Banner Image</td>
                      <td>Status</td>
                      <td>Edit Option</td>
                  </tr>
              </thead>
              <tbody>

                  <?php
                    foreach($category_select_query_from_db as $category){
                      ?>
                        <tr>
                          <td><?=$category['c_name']?></td>
                          <td><img width="60" height="60" src="../img/category-img/<?=$category['c_image']?>" alt="img not found"></td>
                          <td>
                            <a class="badge badge-danger" href="#"><?=$category['c_status']?></a>
                          </td>
                          <td text-center>
                            <a class="btn btn-sm btn-outline-info" href="#">Edit</a>
                            <a class="btn btn-sm btn-outline-danger" href="#">remove</a>
                          </td>
                        </tr>
                      <?php
                    }
                  ?>

              </tbody>
            </div>
        </table> -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->

<?php
  require_once 'footer.php';
?>
