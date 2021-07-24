<?php
include 'header.php';
$select_query = "SELECT * FROM sub_categories";
$sub_category_select_from_db = mysqli_query($con, $select_query);

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a href="add-category.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Main Category</a> 
    <a class="breadcrumb-item ml-4">Sub Category</a>
  </nav>
  <div class="col-lg-12 sl-pagebody m-auto">
    <div class="row">
      <div class="col-lg-7">
        <table class="table text-center">
            <?php
              if(isset($_SESSION['sub-category_edited_status'])):
              ?>
              <div class="alert alert-success">
                  <?php
                  echo $_SESSION['sub-category_edited_status']; 
                  unset($_SESSION['sub-category_edited_status']);
                  ?>
              </div>
            <?php endif; ?>
            <thead class="bg-primary">
                <tr>
                    <td>Serial No</td>
                    <td>Parent Category Name</td>
                    <td>Sub Category Name</td>
                    <td>Sub Category Image</td>
                    <td>Created at</td>
                    <td>Option</td>
                </tr>
            </thead>
            <tbody>

                <?php
                  $serial_no = 1;
                  foreach($sub_category_select_from_db as $sub_category){
                    ?>
                      <tr>
                      <td><?= $serial_no++ ?></td>
                        <td>
                          <?php
                            $category_id = $sub_category['category_id'];
                            $select_query = "SELECT category_name FROM categories WHERE id = '$category_id'";
                            $category_name = mysqli_fetch_assoc(mysqli_query($con, $select_query));
                            echo $category_name['category_name'];
                          ?>
                        </td>
                        <td><?=$sub_category['sub_category_name']?></td>
                        <td><img width="60" height="60" src="images/sub_category_image/<?=$sub_category['sub_category_image']?>" alt="img not found"></td>
                        <td><?= $sub_category['created_at'] ?></td>
                        <td text-center>
                          <a class="btn btn-sm btn-outline-info mt-2" href="edit-sub-category.php?id=<?=$sub_category['id']?>">Edit</a>
                          <button id="subcategory_delete<?=$sub_category['id']?>" class="btn btn-sm btn-outline-danger mt-2">remove</button>
                        </td>
                      </tr>
                      
                        <!-- before delete sweetalert code start -->
                        <script>
                          $(document).ready(function(){
                            $('#subcategory_delete<?=$sub_category['id']?>').click(function(){
                              
                              Swal.fire({
                                title: 'Are you sure?',
                                text: "Note: Subcategory and subcategory products will be deleted!",
                                icon: 'question',
                                showCancelButton: true,
                                confirmButtonColor: '#d33',
                                cancelButtonColor: '#3085d6',
                                confirmButtonText: 'Yes, delete it'
                              }).then((result) => {
                                if (result.isConfirmed) {
                                    if(window.location.href = "remove-sub-category.php?id=<?=$sub_category['id']?>"){
                                      Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'This Subcategory Deleted!',
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
          <form action="add-sub-category-post.php" method="POST" enctype="multipart/form-data">
            <div class="login-wrapper wd-430 wd-xs-430 pd-xs-30 bg-white m-auto">
                <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Add Sub-Category</div>
                <div class="tx-center mg-b-60"> Fillup All input fields</div>

                <?php
                  if(isset($_SESSION['add_sub_category_status'])):
                  ?>
                  <div class="alert alert-success">
                      <?php
                      echo $_SESSION['add_sub_category_status']; 
                      unset($_SESSION['add_sub_category_status']);
                      ?>
                  </div>
                <?php endif; ?>

                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="inputState"><h6>Select Main Category</h6></label>
                      <select id="inputState" class="form-control" name="parent_category">
                        <option class="selected">-- Select Category- -</option>
                        <?php
                          $category_select_query = "SELECT * FROM categories";
                          $category_select_query_from_db = mysqli_query($con, $category_select_query);

                          $category_count = mysqli_num_rows($category_select_query_from_db);

                          if($category_count>0){
                              foreach($category_select_query_from_db as $category){
                              echo '<option>'.$category['category_name'].'</option>';
                              } 
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>      

                <div class="form-group">
                  <label><h6>Sub-category Name:</h6></label>
                  <input type="text" class="form-control" placeholder="sub-category name" value="" name="sub_category_name" required>
                </div><!-- form-group -->
                
                <div class="form-group">
                  <label><h6>Sub-category Image</h6></label>
                  <input type="file" class="form-control" name="sub_category_image" required>
                </div><!-- form-group -->
                
                <div class="form-group">
                    <label><h6>Sub-category Description:</h6></label>
                    <textarea type="text" rows="4" class="form-control" placeholder="Sub-category description" name="sub_category_description" required></textarea>
                  </div><!-- form-group -->

                <div class="text-center mt-5">
                  <button type="submit" name="submit" class="btn btn-success">Save Category</button>
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
  require_once 'footer.php';
?>
