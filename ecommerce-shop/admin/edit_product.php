<?php
include 'header.php';
$single_product_id = $_GET['id'];
$select_query = "SELECT * FROM products WHERE id = '$single_product_id'";
$products_assoc_info = mysqli_fetch_assoc(mysqli_query($con, $select_query));
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="mr-2" href="products.php"> <i class="fa fa-arrow-left"></i> Show All Products</a>
      <a class="bradecrump-item">Add product</a>
    </nav>
  <div class="sl-pagebody">

    <form action="edit_product_post.php" method="POST" enctype="multipart/form-data">
        <div class="d-flex align-items-center  bg-sl-white ht-50v">
          <div class="login-wrapper wd-500 wd-xs-1000 pd-25 pd-xs-50 bg-white m-auto custom-class">
          <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Edit Product Information</div>
          <div class="tx-center mg-b-60">Product Information</div>

          <div class="row">
            <div class="col-sm-6 mt-2">

              <div class="form-group">
                <label class="text-dark h6" for="main_category">Select Category</label>
                <select class="form-control" id="main_category" name="category_name">
                  <option>
                    <?php
                        $category_id_for_name = $products_assoc_info['category_id'];
                        $select_query = "SELECT category_name FROM categories WHERE id = '$category_id_for_name'";
                        $category_name = mysqli_fetch_assoc(mysqli_query($con, $select_query));
                        echo $category_name['category_name'];
                    ?>
                  </option>

                  <!-- onchange="get_category('main_category','1','sub_category')" -->

                  <?php
                    $select_category = "SELECT * FROM categories";
                    $categories = mysqli_query($con, $select_category);

                    foreach($categories as $category){

                  ?>
                    <option value="<?=$category['category_name']?>"> <?=$category['category_name']?> </option>
                  <?php } ?>

                </select>
              </div>
              
              <div class="form-group" id="sub_category" class="form-group">
          
              </div>

              <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
              <script type="text/javascript">

                function get_category(em1,em2,rtn){
                var element = document.getElementById(em1).value;
                document.getElementById(rtn).innerHTML = '<center><img src="img/loader.gif" alt="Uploading...."/></center>';
                if(em1.length==0){return;}if(window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();}
                else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()
                {if(xmlhttp.readyState==4&&xmlhttp.status==200)
                {document.getElementById(rtn).innerHTML=xmlhttp.responseText;}}
                xmlhttp.open("GET","get-category.php?cid="+element+"&cmd="+em2,true);
                xmlhttp.send();}
            
              </script>
              <br> -->
              <!-- This is Editor code for discription   -->

              <script src="https://cdn.tiny.cloud/1/vigzuofqlllea0ve8vxs2ppmfw5n2m92h9l2bv4wlfj9c17y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
              <script>
                tinymce.init({
                  selector: '.mytextarea'
                });
              </script>

              <div class="form-group">
                <label class="text-dark h6">product Title</label>
                <input type="hidden" class="form-control" value="<?=$products_assoc_info['id']?>" name="product_id">
                <input type="text" class="form-control" placeholder="Enter Product Title" value="<?=$products_assoc_info['product_name']?>" name="product_name" required>
              </div><!-- form-group -->
              <br>

              <div class="form-group m-auto"> 
                <option class="text-dark h6">Short Description</option>
                <textarea rows="4" name="product_short_description" cols="58" class="mytextarea"><?=$products_assoc_info['product_short_description']?> </textarea>
              </div>
                <br>

              <div class="form-group m-auto"> 
                <option class="text-dark h6">Long Description</option>
              
                <textarea rows="5" name="product_long_description" cols="58" class="mytextarea"><?=$products_assoc_info['product_long_description']?> </textarea>

              </div>
                <br>

                <div class="form-group">
                  <label class="text-dark h6" ><h6>Add Thumbnail Image</h6></label>
                  <br>

                  <style>
                    article, aside, figure, footer, header, hgroup, 
                    menu, nav, section { display: block; }
                  </style>
                    <img width="107px" height="122px" src="images/product_image/<?=$products_assoc_info['product_thumbnail_image']?>" alt="current image">
                    <img id="imgone" class="img-sm mt-2 mb-2 ml-2" style="height:124px !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://demo.activeitzone.com/shop/uploads/product_image/default.jpg" alt="your image" /><br>
                    <input class="form-control" type='file' onchange="setThumbnail_Image(this); " name="product_thumbnail_image" />

                  <script>
                    function setThumbnail_Image(input) {
                      if (input.files && input.files[0]) {
                          var reader = new FileReader();

                          reader.onload = function (e) {
                              $('#imgone')
                                .attr('src', e.target.result)
                                .width(110)
                                .height(120);
                          };
                          reader.readAsDataURL(input.files[0]);
                      }
                    }
                  </script>
                  <!-- When select image than show this image Code End -->
                </div><!-- form-group -->
                <br>
      
                <div class="form-group">
                <label class="text-dark h6"><h6>Reguler Price</h6></label>
                <input type="text" class="form-control" placeholder="regular price TK" value="<?=$products_assoc_info['product_regular_price']?>"  name="product_regular_price" required>
                </div>
                
            </div>

            <div class="col-sm-6 mt-2">
              <div class="form-group">
                <label class="text-dark h6">Meta Title</label>
                <input type="text" class="form-control " placeholder="write a meta title" value="<?=$products_assoc_info['product_meta_title']?>" name="product_meta_title" required>
              </div><!-- form-group -->

              <div class="form-group m-auto">
                <label class="text-dark h6 mt-4">Meta Desciption</label>
                <textarea rows="4" name="product_meta_description" cols="58"><?=$products_assoc_info['product_meta_description']?> </textarea>
              </div><!-- form-group -->
                      
                  
              <div class="form-group ">
                <label class="text-dark h6 mt-4" >Video Link</label><br>

                <input type="video/mp4" class="form-control" name="product_video_link" value="<?=$products_assoc_info['product_video_link']?>" placeholder="Video link http//:">
                <!-- <iframe class="mt-2" width="434" height="230" src="https://www.youtube.com/embed/gyGsPlt06bo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

              </div><!-- form-group -->

              <div class="form-group">
                <label class="text-dark h6 mt-4"><h6>Product Stock</h6></label>
                <input type="text" class="form-control" placeholder="Enter product stock Amount" value="<?=$products_assoc_info['product_stock']?>" name="product_stock" required>
              </div><!-- form-group -->

              <!-- <div class="form-group">
                <label class="text-dark h6 mt-4"><h6>New product Code</h6></label>
                <input type="text" class="form-control" placeholder="Enter Brand" name="product_code" required>
              </div> -->

              <div class="form-group">
                  <label class="text-dark h6" ><h6>Add Featured Image</h6></label>
                  <br>
                  <!-- When select image than show this image Code start -->
                  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

                  <style>
                    article, aside, figure, footer, header, hgroup, 
                    menu, nav, section { display: block; }
                  </style>
                    <img width="107px" height="122px" src="images/product_image/<?=$products_assoc_info['product_featured_image']?>" alt="current image">
                    <img id="imgtwo" class="img-sm mt-2 mb-2 ml-2" style="height:124px !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://demo.activeitzone.com/shop/uploads/product_image/default.jpg" alt="your image" /><br>
                    <input class="form-control" type='file' onchange="setFeaturedImage(this); " name="product_featured_image" />

                  <script>
                    function setFeaturedImage(input) {
                      if (input.files && input.files[0]) {
                          var reader = new FileReader();

                          reader.onload = function (e) {
                              $('#imgtwo')
                                .attr('src', e.target.result)
                                .width(110)
                                .height(120);
                          };
                          reader.readAsDataURL(input.files[0]);
                      }
                    }
                  </script>
                  <!-- When select image than show this image Code End -->
                </div><!-- form-group -->
                <br>

              <div class="form-group">
                <label class="text-dark h6 mt-4"><h6>Product Brand</h6></label>
                <input type="text" class="form-control" placeholder="Product brand name" value="<?=$products_assoc_info['product_brand']?>" name="product_brand" required>
              </div><!-- form-group -->

              <div class="form-group">
                <label class="text-dark h6 mt-4"><h6>Sale price </h6></label>
                <input type="text" class="form-control" placeholder="Product_sale_price" value="<?=$products_assoc_info['product_sale_price']?>" name="product_sale_price" required>
              </div>

              <div class="form-group">
                  <label class="text-dark h6 mt-4"><h6>Product Tag</h6></label>
                  <input type="text" class="form-control" placeholder="Product tag" value="<?=$products_assoc_info['product_tag']?>" name="product_tag" required>
                </div>

            </div>  
          </div>
      
          <div class="text-center">
            <button id="edit_product_info" type="submit" name="submit" value="submit" class="btn btn-success mt-4">Save Now </button>
            
          </div>

    </div><!-- login-wrapper -->
  </div><!-- d-flex -->
  </form>

  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->      
<!-- ########## END: MAIN PANEL ########## -->


<?php
include 'footer.php';

?>
