<?php 
include ('dynamic-meta.inc.php');
include ('header.php');
include ('single_nav.php');

$select_query = "SELECT * FROM categories LIMIT 6 ";
$categories = mysqli_query($con, $select_query);
// Banner part daynamic
$select_query = "SELECT * FROM banner_settings WHERE id = 1";
$banner_setting = mysqli_fetch_assoc(mysqli_query($con, $select_query));

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
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12 banner-left hidden-xs"><img width="258px" height="448px" src="images/banner/banner-img1.jpg" alt="banner"></div>
        <div class="col-sm-9 col-md-9 col-lg-9 col-xs-12 jtv-slideshow">
          <div id="jtv-slideshow">
            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
              <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                <ul>
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='admin/images/banner_image/<?=$banner_setting['banner_image_one']?>' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="caption-inner left">
                      <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='50'  data-y='110'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><?=$banner_setting['product_name_one']?></div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='50'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><?=$banner_setting['heading_one']?></div>
                      <div class='tp-caption' data-x='72'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><?=$banner_setting['short_description_one']?></div>
                      <div class='tp-caption sfb  tp-resizeme ' data-x='72'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='shop' class="buy-btn">EXPLORE NOW</a> </div>
                    </div>
                  </li>
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='admin/images/banner_image/<?=$banner_setting['banner_image_two']?>' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="caption-inner">
                      <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='250'  data-y='110'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><?=$banner_setting['product_name_two']?></div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='200'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#fff; text-shadow:none;'><?=$banner_setting['heading_two']?></div>
                      <div class='tp-caption' data-x='310'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#f8f8f8;'><?=$banner_setting['short_description_two']?></div>
                      <div class='tp-caption sfb  tp-resizeme ' data-x='370'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='shop' class="buy-btn">Get Started</a> </div>
                    </div>
                  </li>
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='admin/images/banner_image/<?=$banner_setting['banner_image_three']?>' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="caption-inner left">
                      <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='350'  data-y='100'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><?=$banner_setting['product_name_three']?></div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='185'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><?=$banner_setting['heading_three']?></div>
                      <div class='tp-caption' data-x='375'  data-y='245'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><?=$banner_setting['short_description_three']?></div>
                      <div class='tp-caption sfb  tp-resizeme ' data-x='375'  data-y='290'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='shop' class="buy-btn">Start Buying </a> </div>
                    </div>
                  </li>
                </ul>
                <div class="tp-bannertimer"></div>
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
  
  <!-- All products-->
  <!-- add to card seession cdn file -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<div class="container">
    <div class="row">
		<div id="message"></div>
	</div>
</div>

  <div class="container">
    <div class="home-tab">
      <div class="tab-title text-left">
        <h2>Best selling</h2>
        <ul class="nav home-nav-tabs home-product-tabs">
          <?php
            foreach($categories as $category){
              $category_name = str_replace(' ', '', $category['category_name']);
              ?>
              <li <?php if($category['id'] == 5){ echo "class='active'"; } ?>><a href="#<?= $category_name ?>" data-toggle="tab" aria-expanded="false"><?=$category['category_name']?></a></li>
              <?php
            }
          ?>
        </ul>
      </div>
      <div id="productTabContent" class="tab-content">
        <?php
          foreach($categories as $category){
            $category_name = str_replace(' ', '', $category['category_name']);
            ?>
              <div class="tab-pane <?php if($category['id'] == 5){ echo 'active'; } ?> in" id="<?=$category_name?>">
                <div class="featured-pro">
                  <div class="slider-items-products">
                    <div id="computer-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">

                        <?php
                          $category_id = $category['id'];
                          $select_query = "SELECT * FROM products WHERE category_id = '$category_id'";
                          $products_info = mysqli_query($con, $select_query);

                          foreach($products_info as $product){
                            ?>
                            <form class="form-submit">
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="icon-new-label new-left">Best selling</div>
                  
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product?id=<?=$product['id']?>">
                                      <figure> <img width="236px" height="262px" class="first-img" src="admin/images/product_image/<?= $product['product_thumbnail_image'] ?>" alt="HTML template"> <img width="236px" height="262px" class="hover-img" src="admin/images/product_image/<?= $product['product_featured_image'] ?>" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
										<?php
											  if(isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == true){
													echo '<div class="mt-button add_to_wishlist"><a class="pointer addWishBtn"> <i class="fa fa-heart-o"></i> </a> </div>';
												  }
										?>
                                        <!--div class="mt-button add_to_compare"><a href="compare"> <i class="fa fa-link"></i> </a> </div-->
                                        
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product?id=<?=$product['id']?> "><?=$product['product_name']?> </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price"> <span class="price">৳ <?=$product['product_sale_price']?></span> </span> </div>
                                        </div>

                                          <input type="hidden" class="pid" value="<?php echo $product['id'] ?>">
                                          <input type="hidden" class="pname" value="<?php echo $product['product_name'] ?>">
                                          <input type="hidden" class="pqty" value="1">
                                          <input type="hidden" class="pprice" value="<?php echo $product['product_sale_price'] ?>">
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

            <?php
          }
        ?>
        

      </div>
    </div>
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
                                <a title="<?=$product['product_name']?>" href="single_product?id=<?=$product['id']?>">
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
                                  <!--div class="mt-button add_to_compare"><a href="compare"> <i class="fa fa-link"></i> </a> </div-->
                                  
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <a title="Product title here" href="single_product?id=<?=$product['id']?> "><?=$product['product_name']?></a>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">৳ <?=$product['product_sale_price']?></span> </span> </div>
                                  </div>

                                    <input type="hidden" class="pid" value="<?php echo $product['id'] ?>">
                                    <input type="hidden" class="pname" value="<?php echo $product['product_name'] ?>">
                                    <input type="hidden" class="pqty" value="1">
                                    <input type="hidden" class="pprice" value="<?php echo $product['product_sale_price'] ?>">
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

  <div class="banner-section">
    <div class="container">
      <div class="row">
        <?php
        // gallery selltins query daynamic 
        $select_query = "SELECT * FROM gallery_settings WHERE id = '1'";
        $gallery_info = mysqli_fetch_assoc(mysqli_query($con, $select_query));
        ?>

        <div class="col-sm-6">
          <figure><a href="#" target="_self" class="image-wrapper"><img width="552px;" height="180px;" src="admin/images/banner_image/<?=$gallery_info['gallery_banner_image_one']?>" alt="banner laptop"></a></figure>
        </div>
        <div class="col-sm-6">
          <figure><a href="#" target="_self" class="image-wrapper"><img  width="552px;" height="180px;" src="admin/images/banner_image/<?=$gallery_info['gallery_banner_image_two']?>" alt="banner moblie"></a></figure>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Blog -->
 <div class="featured-products">
     <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-12 col-xs-12">
          <div class="shop-inner">
            <div class="page-title">
             <h3 class="deal-title">Latest Products</h3>
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
                              <a title="Ipsums Dolors Untra" href="single_product">
                              <a title="product title here" href="single_product?id=<?=$product['id']?>">
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
                                <a title="Product title here" href="single_product?id=<?=$product['id']?> "><?=$product['product_name']?>
                              </div>
                              <div class="item-content">
                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price"> ৳ <?=$product['product_sale_price']?> </span> </span> </div>
                                </div>

                                  <input type="hidden" class="pid" value="<?php echo $product['id'] ?>">
                                  <input type="hidden" class="pname" value="<?php echo $product['product_name'] ?>">
                                  <input type="hidden" class="pqty" value="1">
                                  <input type="hidden" class="pprice" value="<?php echo $product['product_sale_price'] ?>">
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
            <a href="shop" class="buy-btn" style="min-height: 0px; min-width: 189.561px; line-height: 19px; border-width: 0px; margin: 0px 7.9815px 0px 0px; padding: 12px 22px; letter-spacing: 0px; font-size: 13px; max-width: 189.561px;">SEE ALL PRODUCTS</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  
  </div>
  
  <!-- our clients Slider -->
  
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="our-clients">
          <div class="slider-items-products">
            <div id="our-clients-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col6">
                <?php
                  $select_query = "SELECT * FROM partners";
                  $partners_info = mysqli_query($con, $select_query);
                    
                  foreach($partners_info as $partner){
                    ?>
                    <div class="item"><a href="#"><img width="150px" height="70px" src="admin/images/partner_image/<?=$partner['company_logo']?>" alt="Partner Image"></a> </div>
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
  
  <!-- BANNER-AREA-START -->
  <section class="banner-area">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
              <div class="banner-block"><a href="/"> <img width="357px;" height="408px;" src="admin/images/banner_image/<?=$gallery_info['gallery_image_one']?>" alt="gallery image"> </a>
                <div class="text-des-container">
                  <div class="text-des">
                    <h2><?=$gallery_info['gallery_header_one']?></h2>
                    <p><?=$gallery_info['gallery_offer_one']?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
              <div class="banner-block"><a href="/p"> <img width="358px;" height="188px;" src="admin/images/banner_image/<?=$gallery_info['gallery_image_two']?>"> </a>
                <div class="text-des-container">
                  <div class="text-des">
                    <h2><?=$gallery_info['gallery_header_two']?></h2>
                    <p><?=$gallery_info['gallery_offer_two']?></p>
                  </div>
                </div>
              </div>
              <div class="banner-block"><a href="/"> <img width="358px;" height="188px;" src="admin/images/banner_image/<?=$gallery_info['gallery_image_three']?>"> </a>
                <div class="text-des-container">
                  <div class="text-des">
                    <h2><?=$gallery_info['gallery_header_three']?></h2>
                    <p><?=$gallery_info['gallery_offer_three']?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
          <div class="banner-block"><a href="i/"> <img width="357px;" height="408px;" src="admin/images/banner_image/<?=$gallery_info['gallery_image_four']?>" alt="gallery image"> </a>
            <div class="text-des-container">
              <div class="text-des">
                <h2><?=$gallery_info['gallery_header_four']?></h2>
                <p><?=$gallery_info['gallery_offer_four']?></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- BANNER-AREA-END -->
  
  <div class="footer-newsletter">
    <div class="container">
      <div class="row"> 
        <!-- Newsletter -->
        <div class="col-md-6 col-sm-6">
          <form id="newsletter-validate-detail" method="post" action="#">
            <h3>Join Our Newsletter</h3>
            <div class="title-divider"><span></span></div>
            <span class="sub-text">Enter your emali address to</span>
            <p class="sub-title text-center">Get 25% off</p>
            <span class="sub-text1">On your next Purchase</span>
            <div class="newsletter-inner">
              <input class="newsletter-email" name='Email' placeholder='Enter Your Email'/>
              <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
            </div>
          </form>
        </div>
        <!-- Customers Box -->
        <div class="col-sm-6 col-xs-12 testimonials">
          <div class="page-header">
            <h2>What Our Customers Say</h2>
            <div class="title-divider"><span></span></div>
          </div>
          <div class="slider-items-products">
            <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
              <div class="slider-items slider-width-col4 ">
                <?php
                $select_query = "SELECT * FROM customer_reviews";
                $customers_reviews = mysqli_query($con, $select_query);
                  foreach($customers_reviews as $review){
                    ?>
                      <div class="holder">
                        <blockquote><?=$review['customer_review']?></blockquote>
                        <div class="thumb"> <img width="70px;" height="70px;" src="admin/images/partner_image/<?=$review['customer_image']?>" alt="customer img"> </div>
                        <div class="holder-info"> <strong class="name"><?=$review['customer_name']?></strong> <strong class="designation"><?=$review['company_name']?></strong></div>
                      </div>
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
  
<?php include('footer.php')?>