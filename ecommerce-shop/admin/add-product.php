<?php
include 'header.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="mr-2" href="products"> <i class="fa fa-arrow-left"></i> Show All Products</a>
      <a class="bradecrump-item">Add product</a>
    </nav>
  <div class="sl-pagebody">

    <form action="add-product-post" method="POST" enctype="multipart/form-data">
        <div class="d-flex align-items-center  bg-sl-white ht-50v">
          <div class="login-wrapper wd-500 wd-xs-1000 pd-25 pd-xs-50 bg-white m-auto custom-class">
          <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Add New Product</div>
          <div class="tx-center mg-b-60">Product Information</div>

            <?php
              if(isset($_SESSION['product_upload_status'])):
              ?>
              <div class="alert alert-success">
                  <?php
                    echo $_SESSION['product_upload_status'];
                    unset($_SESSION['product_upload_status']);
                  ?>
              </div>
            <?php endif; ?>

            <div class="row">
                
              <div class="col-sm-6 mt-2">

                <div class="form-group">
                  <label class="text-dark h6" for="main_category">Select Category</label>
                  <select class="form-control" id="main_category" name="category_name" onchange="get_category('main_category','1','sub_category')">
                    <option>-- select category --</option>
                    <?php
                      $select_category = "SELECT * FROM categories";
                      $categories = mysqli_query($con, $select_category);
                      foreach($categories as $category){
                    ?>
                      <option value="<?=$category['category_name']?>"> <?=$category['category_name']?> </option>
                    <?php } ?>

                  </select>
                </div>
                
                <div class="form-group" id="sub_category">
            
                </div>

                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
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
                <br>

                <div class="form-group">
                  <label class="text-dark h6">product Title</label>
                  <input type="text" class="form-control" placeholder="Enter Product Title" name="product_name" required>
                </div><br>

                <div class="form-group">
                  <label class="text-dark h6"><h6>Reguler Price</h6></label>
                  <input type="text" class="form-control" placeholder="regular price TK" name="product_regular_price" required>
                </div><br>

                <div class="form-group">
                  <label class="text-dark h6"><h6>Sale price </h6></label>
                  <input type="text" class="form-control" placeholder="Product sale price" name="product_sale_price" required>
                </div><br>

                <div class="form-group">
                  <label class="text-dark h6">Meta Title</label>
                  <input type="text" class="form-control" placeholder="write a meta title" name="product_meta_title" required>
                </div><br>

                <div class="form-group m-auto">
                  <label class="text-dark h6">Meta Desciption</label>
                  <textarea rows="4" class="form-control" name="product_meta_description" cols="58"> </textarea>
                </div><br>

                <div class="form-group">
                  <label class="text-dark h6"><h6>Product Brand</h6></label>
                  <input type="text" class="form-control" placeholder="Product brand name" name="product_brand" required>
                </div><br>
                <div class="form-group">
                  <label class="text-dark h6"><h6>Product Tag</h6></label>
                  <input type="text" class="form-control" placeholder="Product tag" name="product_tag" required>
                </div><br>

                <div class="form-group ">
                  <label class="text-dark h6" >Video Link</label><br>
                  <input type="video/mp4" class="form-control" name="product_video_link" placeholder="Paste your video link">
                </div>

                <div class="form-group">
                  <label class="text-dark h6 mt-4"><h6>Product Stock</h6></label>
                  <input type="text" class="form-control" placeholder="Product stock amount" name="product_stock" required>
                </div>

                <!-- This is Editor code for discription   -->
                <script src="https://cdn.tiny.cloud/1/vigzuofqlllea0ve8vxs2ppmfw5n2m92h9l2bv4wlfj9c17y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                <script>
                  tinymce.init({
                    selector: '.mytextarea',
                    height: 300
                  });
                </script>
                  
              </div>

              <div class="col-sm-16">

                <div class="form-group">
                  <label class="text-dark h6" ><h6>Add Thumbnail Image <span class="text-secondary p"> (width: 268 X height: 262)</span></h6></label>
                  <br>
                  <style>
                    article, aside, figure, footer, header, hgroup, 
                    menu, nav, section { display: block; }
                  </style>
                    <img id="imgone" class="img-sm mt-2 mb-4" style="height:124px !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://demo.activeitzone.com/shop/uploads/product_image/default.jpg" alt="your image" /><br>
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
                </div>
                <br>

                <div class="form-group">
                  <label class="text-dark h6" ><h6>Add Featured Image One <span class="text-secondary p"> (width: 268 X height: 262)</span></h6></label>
                  <br>
                  <!-- When select image than show this image Code start -->
                  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

                  <style>
                    article, aside, figure, footer, header, hgroup, 
                    menu, nav, section { display: block; }
                  </style>

                    <img id="imgtwo" class="img-sm mt-2 mb-4" style="height:124px !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://demo.activeitzone.com/shop/uploads/product_image/default.jpg" alt="your image" /><br>
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
                </div>
                <br>

                <div class="form-group">
                  <label class="text-dark h6" ><h6>Add Featured Image Two <span class="text-secondary p"> (width: 268 X height: 262)</span></h6></label>
                  <br>
                  <!-- When select image than show this image Code start -->
                  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

                  <style>
                    article, aside, figure, footer, header, hgroup, 
                    menu, nav, section { display: block; }
                  </style>

                    <img id="imgthree" class="img-sm mt-2 mb-4" style="height:124px !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://demo.activeitzone.com/shop/uploads/product_image/default.jpg" alt="your image" /><br>
                    <input class="form-control" type='file' onchange="setFeaturedImageTwo(this); " name="product_featured_image_two" />

                  <script>
                    function setFeaturedImageTwo(input) {
                      if (input.files && input.files[0]) {
                          var reader = new FileReader();

                          reader.onload = function (e) {
                              $('#imgthree')
                                .attr('src', e.target.result)
                                .width(110)
                                .height(120);
                          };
                          reader.readAsDataURL(input.files[0]);
                      }
                    }
                  </script>
                  <!-- When select image than show this image Code End -->
                </div>

                <div class="form-group">
                  <label class="text-dark h6" ><h6>Add Featured Image Three <span class="text-secondary p"> (width: 268 X height: 262)</span></h6></label>
                  <br>
                  <!-- When select image than show this image Code start -->
                  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

                  <style>
                    article, aside, figure, footer, header, hgroup, 
                    menu, nav, section { display: block; }
                  </style>

                    <img id="imgfour" class="img-sm mt-2 mb-4" style="height:124px !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://demo.activeitzone.com/shop/uploads/product_image/default.jpg" alt="your image" /><br>
                    <input class="form-control" type='file' onchange="setFeaturedImageThree(this); " name="product_featured_image_three" />

                  <script>
                    function setFeaturedImageThree(input) {
                      if (input.files && input.files[0]) {
                          var reader = new FileReader();

                          reader.onload = function (e) {
                              $('#imgfour')
                                .attr('src', e.target.result)
                                .width(110)
                                .height(120);
                          };
                          reader.readAsDataURL(input.files[0]);
                      }
                    }
                  </script>
                  <!-- When select image than show this image Code End -->
                </div>

              </div>
              <div class="col-sm-12 mt-3">
                <div class="form-group m-auto"> 
                  <option class="text-dark h6">Product Short Description</option>
                  <textarea rows="4" name="product_short_description" cols="58" class="mytextarea"> </textarea>
                </div><br><br>

                <div class="form-group m-auto"> 
                  <option class="text-dark h6">Product Long Description</option>
                  <textarea rows="5" name="product_long_description" cols="58" class="mytextarea"> </textarea>
                </div><br><br>

              </div>
            </div>
      
            <div class="text-center">
              <button type="submit" name="submit" value="submit" class="btn btn-success mt-4">Upload Product </button>
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

