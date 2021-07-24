<?php
$page='single';
$page_title="shop-page";
include ('dynamic-meta.inc.php');
$dynamic_title="Special Offer | Stylishvalley.com";
include ('header.php');
include ('single_nav.php');
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

<div class="main-slider" id="home">
  <section style="margin-top: 0;" id="shop-page-banner">
    <div>
      <div class='rev_slider_wrapper fullwidthbanner-container' >
        <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
          <ul>
            <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''>
              <img src='images/slider/slide-3.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
              <div class="caption-inner">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='200'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#fff; text-shadow:none;'>Special Offers</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>  
</div>

<div class="inner-box">
    <div class="container">
      <div class="row"> 
        <!-- Banner -->
        <div class="col-md-3 top-banner hidden-sm">
          <div class="jtv-banner3">
            <div class="jtv-banner3-inner"><a href="#"><img src="images/sub1.jpg" alt="HTML template"></a>
              <div class="hover_content">
                <div class="hover_data">
                  <div class="title"> Big Sale </div>
                  <div class="desc-text">Up to 50% off</div>
                  <span>Camera, Laptop & Mobile</span>
                  <p><a href="#" class="shop-now">Get it now!</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Best Sale -->
        <div class="col-sm-12 col-md-9 jtv-best-sale special-pro">
          <div class="jtv-best-sale-list">
            <div class="wpb_wrapper">
              <div class="best-title text-left">
                <h2>Special Offers</h2>
              </div>
            </div>
            <div class="slider-items-products">
              <div id="jtv-best-sale-slider" class="product-flexslider">
                <div class="slider-items">
                  <?php
                    $select_query = "SELECT * FROM products";
                    $products_info = mysqli_query($con, $select_query);
                    
                    foreach($products_info as $product){
                      ?>
    
                      <form class="form-submit">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-new-label new-left">New</div>
            
                              <div class="pr-img-area">
                                <a title="<?=$product['product_name']?>" href="single_product.php?id=<?=$product['id']?>">
                                  <figure> <img width="172px" height="172px" class="first-img" src="admin/images/product_image/<?= $product['product_thumbnail_image'] ?>" alt="HTML template"> <img width="172px" height="172px" class="hover-img" src="admin/images/product_image/<?= $product['product_featured_image'] ?>"></figure>
                                </a> 
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
    							<?php
    										  if(isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == true){
    												echo '<div class="mt-button add_to_wishlist"><a class="addWishBtn"> <i class="fa fa-heart-o"></i> </a> </div>';
    											  }
    									?>
                                  <!--div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div-->
                                  
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <a title="Product title here" href="single_product.php?id=<?=$product['id']?> "><?=$product['product_name']?></a>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">৳ <?=$product['product_sale_price']?></span> </span> </div>
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
    
                      <?php
                    }
                  ?>
    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="featured-products">
    <div class="main-container col1-layout">
        <div class="container">
          <div class="row">
            <div class="col-main col-sm-12 col-xs-12">
              <div class="shop-inner">
                <div class="page-title">
                 <h3 style="text-align: left;" class="deal-title">Special Offers</h3>
                </div>
                <div class="product-grid-area">
                  <ul class="products-grid">
                    <?php
                      $select_query = "SELECT * FROM products ORDER BY id DESC LIMIT 12";
                      $products_info = mysqli_query($con, $select_query);
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
                                    <a title="Product title here" href="single_product.php?id=<?=$product['id']?> "><?=$product['product_name']?>
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
                <div class="pagination-area ">
    			<BR>
                <a href="#" class="buy-btn" style="min-height: 0px; min-width: 189.561px; line-height: 19px; border-width: 0px; margin: 0px 7.9815px 0px 0px; padding: 12px 22px; letter-spacing: 0px; font-size: 13px; max-width: 189.561px;">SEE ALL PRODUCTS</a>
                </div>
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

