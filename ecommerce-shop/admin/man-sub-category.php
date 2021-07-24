<?php 
include 'header.php';
?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="category.php">Product Category</a>
      </nav>
      <div class="col-lg-12 sl-pagebody m-auto">
        
        <table class="table text-center">
            <!-- table product upload card -->

            <div class="row gutters-10">
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
                      <div class="h3 fw-700">08</div>
                        <a class="text-info" href="add-category.php"><i class="fa fa-plus-circle tx-30" aria-hidden="true"></i></a>
                      <div class="h5 opacity-50">Add Product</div>
                    </div>
                  </div>
              </div>

            </div>
            

            <thead class="bg-primary">
                <tr>
                    <td>Product Code</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Category</td>
                    <td>Published</td>
                    <td>Option</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>WEQ2342</td>
                    <td>Snaker</td>
                    <td>45 $</td>
                    <td>Man</td>
                    <td>
                        <a class="badge badge-success" href="#">active</a>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-outline-info" href="#">Edit</a>
                        <a class="btn btn-sm btn-outline-danger" href="#">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td>WEQX342</td>
                    <td>School bag</td>
                    <td>34 $</td>
                    <td>Man</td>
                    <td>
                        <a class="badge badge-success" href="#">active</a>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-outline-info" href="#">Edit</a>
                        <a class="btn btn-sm btn-outline-danger" href="#">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td>WEQ34342</td>
                    <td>Bycycle</td>
                    <td>235 $</td>
                    <td>Man</td>
                    <td>
                        <a class="badge badge-success" href="#">active</a>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-outline-info" href="#">Edit</a>
                        <a class="btn btn-sm btn-outline-danger" href="#">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td>WEQ2342</td>
                    <td>Ceiling Light</td>
                    <td>10 $</td>
                    <td>Man</td>
                    <td>
                        <a class="badge badge-success" href="#">active</a>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-outline-info" href="#">Edit</a>
                        <a class="btn btn-sm btn-outline-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                  <td colspan="50" class="text-center">
                    <a class="btn btn-warning" href="add-category.php">Add New Product</a>
                  </td>
                </tr>
            </tbody>
        </table>

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->

<?php
  require_once 'footer.php';
?>
