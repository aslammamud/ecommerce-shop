<?php
include 'header.php';
$category_select_query = "SELECT * FROM categories";
$category_select_query_from_db = mysqli_query($con, $category_select_query);

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="pl-2 pr-4 tx-16" href="category"><i class="fa fa-arrow-left" aria-hidden="true"></i> Category </a>
    <a class="btn btn-sm btn-outline-success ml-4" href="add-sub-category">Add Sub-Category</a>
  </nav>
    <div class="col-lg-12 sl-pagebody m-auto">

      <div class="row">
        <div class="col-lg-7">
          <table class="table text-center">

            <?php
              if(isset($_SESSION['category_edited_status'])):
            ?>
              <div class="alert alert-success">
                  <?php
                  echo $_SESSION['category_edited_status']; 
                  unset($_SESSION['category_edited_status']);
                  ?>
              </div>
            <?php endif; ?>
            <thead class="bg-primary">
                <tr>
                    <td>Serial No</td>
                    <td>Category Name</td>
                    <td>Category Image</td>
                    <td>Option</td>
                </tr>
            </thead>
            <tbody>
                
                <?php
                  $serial_no = 1;
                  foreach($category_select_query_from_db as $category){
                    ?>
                      <tr>
                        <td><?= $serial_no++ ?></td>
                        <td><?= $category['category_name'] ?></td>
                        <td><img width="60" height="60" src="images/category_image/<?=$category['category_image']?>" alt="img not found"></td>
                        <td text-center>
                          <a class="btn btn-sm btn-outline-info" href="edit-category?id=<?=$category['id']?>">Edit</a>
                          <button id="category_delete<?=$category['id']?>" class="btn btn-sm btn-outline-danger">remove</button>
                        </td>
                      </tr>
                      
                      <!-- before delete sweetalert code start -->
                        <script>
                          $(document).ready(function(){
                            $('#category_delete<?=$category['id']?>').click(function(){
                              
                              Swal.fire({
                                title: 'Are you sure?',
                                text: "Note: Deleting a category will delete subcategories and subcategory products!",
                                icon: 'question',
                                showCancelButton: true,
                                confirmButtonColor: '#d33',
                                cancelButtonColor: '#3085d6',
                                confirmButtonText: 'Yes, delete it'
                              }).then((result) => {
                                if (result.isConfirmed) {
                                    if(window.location.href = "remove-category?id=<?=$category['id']?>"){
                                      Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'This Category Deleted!',
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
                  }
                ?>

            </tbody>
          </table>
        </div>

        <div class="col-lg-5">
          <table class="table table-bordered text-center">

            <form action="add-category-post.php" method="POST" enctype="multipart/form-data">
              <div class="login-wrapper wd-430 wd-xs-430 pd-25 pd-xs-50 bg-white">
                  <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Add New Category</div>
                  <div class="tx-center mg-b-40"> Given Information</div>

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

                  <div class="form-group">
                    <label><h6>Category Name:</h6></label>
                    <input type="text" class="form-control" placeholder="Category name" value="" name="category_name" required>
                  </div><!-- form-group -->
                  
                  <div class="form-group">
                    <label><h6>Category Banner Image</h6></label>
                    <input type="file" class="form-control" name="category_image" required>
                  </div><!-- form-group -->
                  
                  <div class="form-group">
                    <label><h6>Category Description:</h6></label>
                    <textarea type="text" rows="4" class="form-control" placeholder="Category description" name="category_description" required></textarea>
                  </div><!-- form-group -->

                  <div class="text-center mt-5">
                    <button class="btn btn-success" >Save Category</button>
                  </div>
              </div>
            </form>

          </table>
        </div>
      </div>

  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->      
<!-- ########## END: MAIN PANEL ########## -->


<?php
include 'footer.php';
?>