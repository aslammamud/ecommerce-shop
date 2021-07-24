<?php
include 'header.php';
$select_query = "SELECT * FROM products ORDER BY id DESC";
$product_info_from_db = mysqli_query($con, $select_query);

?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="category">All Product</a>
      </nav>
      <div class="sl-pagebody"> 
        <div class="card">

          <div class="row gutters-10 mt-3 ml-2">
            <div class="col-md-3">
              <div class="bg-info text-white rounded-lg mb-4 overflow-hidden">
                <div class="px-3 pt-4 pb-5 text-center">
                  <div class="h3 fw-700"><?php echo $product_info_from_db->num_rows ?></div>
                    <a class="text-white"><i class="fa fa-upload tx-30" aria-hidden="true"></i></a>
                  <div class="h5 opacity-50">Stock In Products</div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="bg-info text-white rounded-lg mb-4 overflow-hidden">
                <div class="px-3 pt-4 pb-5 text-center">
                  <div class="h3 fw-700">0</div>
                    <a class="text-white" href="add-product"><i class="fa fa-plus-circle tx-30" aria-hidden="true"></i></a>
                  <div class="h5 opacity-50">Add New Product</div>
                </div>
              </div>  
            </div>

          </div>

            <div class="card-header pd-20 bg-transparent bd-b bd-gray-200">
              <h6 class="card-title tx-uppercase tx-22 mg-b-0 mb-2">All Products</h6>
              <?php
                  if(isset($_SESSION['product_edit_status'])):
                ?>
                  <div class="alert alert-success">
                      <?php
                      echo $_SESSION['product_edit_status']; 
                      unset($_SESSION['product_edit_status']);
                      ?>
                  </div>
              <?php endif; ?>
              <div class="search search-bar text-right">
                <!-- Create a search bar  -->
              </div>

            </div><!-- card-header -->
            <table class="table table-bordered table-white table-responsive mg-b-0 tx-12">
              
              <thead>
                <tr class="tx-10">
                  <th class="pd-y-6 text-center">Serial No</th>
                  <th class="pd-y-6 text-center">Category Name</th>
                  <th class="pd-y-5 text-center">Product Name</th>
                  <th class="pd-y-5 text-center">Product Image</th>
                  <!-- <th class="pd-y-5 text-center">Product Description</th> -->
                  <th class="pd-y-5 text-center">Product In Stock</th>
                  <th class="pd-y-5 text-center">Regular Price</th>
                  <th class="pd-y-5 text-center">Sale Price</th>
                  <th class="pd-y-5 text-center">Edit</th>
                </tr>
              </thead>
              <tbody>

                <?php
                  $serial_no = 1;
                  foreach($product_info_from_db as $product_info):
                      $category_id_for_name = $product_info['category_id'];
                      $select_query = "SELECT category_name FROM categories WHERE id = '$category_id_for_name'";
                      $category_name = mysqli_fetch_assoc(mysqli_query($con, $select_query));
                  ?>
                    <tr>
                      <td class="pd-l-20 text-center text-dark"><?= $serial_no++ ?></td>
                      <td class="text-center">
                        <a class="tx-inverse tx-12 tx-medium d-block"><?=$category_name['category_name'];?></a>
                      </td>
                      <td class="text-center">
                        <a class="tx-inverse tx-12 tx-medium d-block"><?=$product_info['product_name']?></a>
                      </td>
                      <td class="pd-l-20 text-center">
                        <img src="images/product_image/<?=$product_info['product_thumbnail_image']?>" class="wd-60" alt="Image">
                      </td>
                      
                      <td>
                        <a class="tx-inverse tx-12 tx-medium d-block text-center"><?=$product_info['product_stock']?></a>
                      </td>
                      <td>
                        <a class="tx-inverse tx-12 tx-medium d-block text-center"><?=$product_info['product_regular_price']?></a>
                      </td>
                      <td class="text-center">
                        <a class="tx-inverse tx-12 tx-medium d-block"><?=$product_info['product_sale_price']?></a>
                      </td>

                      <td class="valign-middle tx-center">
                        <a href="edit_product.php?id=<?=$product_info['id']?>" class="btn btn-sm btn-outline-info mt-2"><i class="fa fa-pencil tx-24"></i></a>
                        <button id="delete_btn<?=$product_info['id']?>" class="btn btn-sm btn-outline-danger mt-2"><i class="fa fa-trash-o tx-24"></i></button>
                      </td>
                    </tr>
                    
                    <!-- before delete sweetalert code start -->
                    <script>
                        $(document).ready(function(){
                            $('#delete_btn<?=$product_info['id']?>').click(function(){
                                Swal.fire({
                                    title: 'Are you sure?',
                                    text: "You won't to delete this product!",
                                    icon: 'question',
                                    showCancelButton: true,
                                    confirmButtonColor: '#d33',
                                    cancelButtonColor: '#3085d6',
                                    confirmButtonText: 'Yes, delete it'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        if(window.location.href = "remove-product.php?id=<?=$product_info['id']?>"){
                                            Swal.fire({
                                                position: 'top-end',
                                                icon: 'success',
                                                title: 'This Product Deleted!',
                                                showConfirmButton: false,
                                                timer: 2000,
                                            })
                                        }
                                    }
                                });
                            });
                        });
                    </script>
                    <!-- before delete sweetalert code End -->

                    <?php
                  endforeach;
                ?>
                
              </tbody>
            </table>

            <div class="card-footer tx-12 pd-y-15 bg-transparent bd-t bd-b-200">
              <ul class="pagination">
                <ul class="pagination ml-auto">
                  <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                    <span class="page-link" aria-hidden="true">‹</span>
                  </li>
                  <li      
                      class="page-item active" aria-current="page"><span class="page-link">1</span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
                  </li>
                  </ul>                   

                  </ul>
            </div><!-- card-footer -->
            
          </div><!-- card -->
      </div>
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->

  <?php
  require_once 'footer.php';
?>
