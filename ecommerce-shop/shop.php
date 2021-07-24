<?php
$page='single';
$page_title="shop-page";
include ('dynamic-meta.inc.php');
$dynamic_title="Shop | Stylishvalley.com";
include ('header.php');
include ('single_nav.php');


if (isset($_GET['page'])) {
            $page = $_GET['page'];
	} else {
		$page = 1;
	}


if (isset($_POST['search-submit'])) {
           $search = htmlspecialchars($_POST['searchkey']);
	}

?>
<style>
  #search button {
    line-height: 24px;
    border: none;
    padding-top: 10px;
    padding-bottom: 19px;
    padding-right: 17px;
    padding-left: 17px;
  }
</style>
<!-- Slideshow  -->
<div class="main-slider" id="home">
  <section style="margin-top: 0;" id="shop-page-banner">
    <div>
      <div class='rev_slider_wrapper fullwidthbanner-container' >
        <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
          <ul>
            <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''>
              <img src='images/slider/slide-3.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
              <div class="caption-inner">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='200'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#fff; text-shadow:none;'>Shopping Here</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>  
</div>
  <!-- All products-->
  <!-- add to card seession cdn file -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<div class="inner-box">
    <div class="container">
    <div class="row">
        <div class="featured-products">
            <div class="main-container col1-layout">
                <div class="container">
                    <div style="margin-bottom: 20px;" id="message">

                    </div>
					  
                    <div class="row">
		           <!-- <div class="col-sm-12">
						<center><form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
							<label class="form-control h4">Search Any Product &nbsp </label><input class="form-control" type="search" name="searchkey" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success" name="search-submit" type="submit">Search</button>
						</form></center>
					  </div> -->
                        <div class="col-main col-sm-12 col-xs-12">
                            <div class="shop-inner">
                                <div class="page-title">
                                <h3 class="deal-title">Stylishvalley All Products</h3>
                                </div>
                                <div class="product-grid-area">
                                    <ul class="products-grid">
                                        <?php
											$no_of_records_per_page = 8;
											$offset = ($page-1) * $no_of_records_per_page;
 
											$total_pages_sql = "SELECT COUNT(*) FROM products";
											$result = mysqli_query($con,$total_pages_sql);
											$total_rows = mysqli_fetch_array($result)[0];
											$total_pages = ceil($total_rows / $no_of_records_per_page);
											
											if(isset($search)){
													$sql = "SELECT * FROM `products` WHERE `product_name` LIKE '%fan%' OR `product_brand` LIKE '%fan%' OR `product_tag` LIKE '%fan%'  OR `product_meta_title` LIKE '%$search%' ";
												}else{
													$sql = "SELECT * FROM products LIMIT $offset, $no_of_records_per_page";
												}

											$products_info = mysqli_query($con,$sql);
											
                                        foreach($products_info as $product){
                                            ?>

                                            <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                            <form class="form-submit">
                                            <div class="product-item">
                                                <div class="item-inner">
                                                <div class="product-thumbnail">
                                                    <div class="icon-sale-label sale-left">Sale</div>
                                                    <div class="icon-new-label new-right">New</div>
                                                    <div class="pr-img-area">
                                                    <a title="Ipsums Dolors Untra" href="single_product.php">
                                                    <a title="product title here" href="single_product.php?id=<?=$product['id']?>">
                                                        <figure> <img width="236px" height="260px" class="first-img" src="admin/images/product_image/<?= $product['product_thumbnail_image'] ?>" alt="HTML template"> <img width="236px" height="260px" class="hover-img" src="admin/images/product_image/<?= $product['product_featured_image'] ?>" alt="HTML template"></figure>
                                                    </a> </div>
                                                    <div class="pr-info-area">
                                                    <div class="pr-button">
                                                       <?php
                											  if(isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == true){
                													echo '<div class="mt-button add_to_wishlist"><a class="addWishBtn"> <i class="fa fa-heart-o"></i> </a> </div>';
                												  }
                										?> 
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                    <div class="item-title">
                                                        <a title="Product title here" href="single_product.php?id=<?=$product['id']?> "><?=$product['product_name']?></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price"> ৳ <?=$product['product_sale_price']?> </span> </span> </div>
                                                        </div>

                                                        <input type="hidden" class="pid" value="<?php echo $product['id'] ?>">
                                                        <input type="hidden" class="pname" value="<?php echo $product['product_name'] ?>">
                                                        <input type="hidden" class="pqty" value="1">
                                                        <input type="hidden" class="pprice" value="<?php echo $product['product_regular_price'] ?>">
                                                        <input type="hidden" class="pimage" value="<?php echo $product['product_thumbnail_image'] ?>">
                                                        <input type="hidden" class="pcode" value="<?php echo $product['product_code'] ?>">

                                                        <div class="pro-action">
                                                        <button type="button" class="add-to-cart addItemBtn"><span> Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </form>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
	
                            </div>
                        </div>
                    </div>
					<div>
					    
					    <br>
					    <br>
					    <br>
						<?php
						
						function pagination($page, $total_pages){
						
						
							echo '<nav>
								 <ul class="pagination">';
								    
								    if($page > 5){
									echo '<li><a href="?page=1">First</a></li>';
						            }

									if($page > 1){
										echo '<li>					
										<a href="'.($page - 1).'">Prev</a>										
										</li>';
										
										}
										
									$i = 1;
									for($i=1 ; $i<= $total_pages ; $i++){
										echo '<li class="';
										
										if($page == $i ){ echo 'active'; }
										
										echo'">
										<a href="?page='.$i.'">'.$i.'</a></li>';
										}
										
									if($page < $total_pages){
										echo '<li>					
										<a href="?page='.($page + 1).'">Next</a>										
										</li>';
										}
									
									if($page > 5){
									echo'<li><a href="?page='.$total_pages.'">Last</a></li>';
									}
								echo '</ul>
							</nav>';
							
						}
						
						echo pagination($page, $total_pages);
							
						?>
					</div>
                </div>
            </div>
        </div>
    </div>  
</div>
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
              <p>On order over $99</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col col-md-3 col-sm-6 col-xs-12 ">
        <div class="block-wrapper return">
          <div class="text-des">
            <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
            <div class="service-wrapper">
              <h3>100% secure payments</h3>
              <p>Credit/ Debit Card/ Banking </p>
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
              <p>25% on order over $199</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- service section -->
<?php include('footer.php')?>
