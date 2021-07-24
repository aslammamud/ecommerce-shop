<?php
$page = 'single';
$active_nav = 'wishlist';
include ('header.php');
include ('single_nav.php');

if(!isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == false){   
  echo reloader('login_page.php',0);
  die();
}else{
$select_query = "SELECT * FROM wishlist WHERE user_id = '$eb_user_id' ORDER BY id DESC LIMIT 10";
$products = mysqli_query($con, $select_query);
$count = mysqli_num_rows($products);
}
?>

 <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="/">Home</a><span>&raquo;</span></li>
            <li><strong>Wishlist</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <section class="main-container col2-right-layout">

    <div class="main container">
      
      <div class="row">
	  <div id="message"> </div>

        <?php
        include ('student_asidebar.php');
        ?>

        <div style="background: #f1f1f1; margin-left: 40px;" class="col-main col-sm-8 col-xs-10">
          <div class="my-account">
            <div class="page-title">
              <h2 style="margin-top: 20px;">My Wishlist</h2>
            </div>
            <div class="wishlist-item table-responsive">
              <table class="col-md-12">
                <thead>
                  <tr>
                    <th class="th-product">Images</th>
                    <th class="th-details">Product Name</th>
                    <th class="th-price">Unit Price</th>
                    <th class="th-add-to-cart">Add to Cart </th>
                    <th class="th-edit">Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
					if($count>0){
                    foreach($products as $product){
                      ?>
                      <form class="form-submit">
                        <tr>
                          <td class="th-product"><a href="single_product?id=<?=$product['product_id']?>"><img src="admin/images/product_image/<?=$product['product_image']?>" alt="cart"></a></td>
                          <td style="text-align:center;" class="th-details"><h2><a href="single_product?id=<?=$product['id']?>"><?=$product['product_name']?></a></h2></td>
                          <td class="th-price"><h5>৳ <?=$product['product_price']?></h5></td>
                          <td class="pro-action">
                            <a href="single_product?id=<?=$product['product_id']?>"><button type="button" class="btn btn-success add-to-cart"><span> Add to cart</span> </button><a/>
                          </td>
						  <td>
							<!-- a style="color:red;" href="wishlist-remove-item?id=<?php echo $product['id'] ?>" onclick="confirmremove()">Remove</a -->
							<input type="hidden" class="item_delete_id" value="<?php echo $product['id'] ?>">
							<input type="hidden" class="item_delete_name" value="<?php echo $product['product_name'] ?>">
							<a style="color:red;" href="javascript:void(0)" class="item_delete_button">Remove</a>
						  </td>
						   
                        </tr>
                      </form>
                    <?php
						}
					}
                  ?>
                </tbody>
              </table>
          </div>
        </div>

      </div>
    </div>
  </section>

 
   <!-- service section -->
  <div class="jtv-service-area">
    <div class="container">
      <div class="row">
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper ship">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
              <div class="service-wrapper">
                <h3>World-Wide Shipping</h3>
                <p>On order over ৳ 99</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12 ">
          <div class="block-wrapper return">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
              <div class="service-wrapper">
                <h3>30 Days Return</h3>
                <p>Moneyback guarantee </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper support">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
              <div class="service-wrapper">
                <h3>Support 24/7</h3>
                <p>Call us: ( +123 ) 456 789</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper user">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
              <div class="service-wrapper">
                <h3>Member Discount</h3>
                <p>25% on order over ৳ 199</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
<?php
include ('footer.php');
?>



