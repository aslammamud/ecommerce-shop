<?php 
  $page='single';
  require_once ('dynamic-meta.inc.php');
  require_once ('header.php');
  require_once ('single_nav.php');

  $product_id = $_GET['id'];

  $select_query = "SELECT * FROM products WHERE id = '$product_id'";
  $product_info = mysqli_fetch_assoc(mysqli_query($con, $select_query));

  $product_category_id = $product_info['category_id'];


?>

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
                    <li class=""> <a title="Go to Home Page" href="shop_grid.php">Fashion</a><span>&raquo;</span></li>
                    <li><strong>Product Details</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->
<!-- use Ajax CDN file  -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Item added your cart message -->
<div id="message">

</div>
<!-- Main Container -->
<div class="main-container col1-layout">
    <div class="container">
        <div class="row">
            <div class="col-main">
                <div class="product-view-area">
                    <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                        <div class="icon-sale-label sale-left">Sale</div>


                        <div class="large-image"><a href="admin/images/product_image/<?= $product_info['product_thumbnail_image'] ?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img style="width: 470px; height: 460px;" class="zoom-img" src="admin/images/product_image/<?= $product_info['product_thumbnail_image'] ?>" alt="products"> </a> </div>

                        <div class="flexslider flexslider-thumb">
                            <ul class="previews-list slides">
                                <li><a href='admin/images/product_image/<?= $product_info['product_thumbnail_image'] ?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/images/product_image/<?= $product_info['product_thumbnail_image'] ?>' "><img style="width: 98px; height: 98px;" src="admin/images/product_image/<?= $product_info['product_thumbnail_image'] ?>" alt="Thumbnail" /></a></li>
                                <?php
                                if($product_info['product_featured_image']){
                                    ?>
                                        <li><a href='admin/images/product_image/<?= $product_info['product_featured_image'] ?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/images/product_image/<?= $product_info['product_featured_image'] ?>' "><img style="width: 98px; height: 98px;" src="admin/images/product_image/<?= $product_info['product_featured_image'] ?>" alt="Featured 1" /></a></li>
                                    <?php
                                }
                                ?>
                                <?php
                                if($product_info['product_featured_image_two']){
                                    ?>
                                        <li><a href='admin/images/product_image/<?= $product_info['product_featured_image_two'] ?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/images/product_image/<?= $product_info['product_featured_image_two'] ?>' "><img style="width: 98px; height: 98px;" src="admin/images/product_image/<?= $product_info['product_featured_image_two'] ?>" alt="Featured 2" /></a></li>
                                    <?php
                                }
                                ?>
                                <?php
                                if($product_info['product_featured_image_three']):
                                    ?>
                                        <li><a href='admin/images/product_image/<?= $product_info['product_featured_image_three'] ?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/images/product_image/<?= $product_info['product_featured_image_three'] ?>' "><img style="width: 98px; height: 98px;" src="admin/images/product_image/<?= $product_info['product_featured_image_three'] ?>" alt="Featured 3" /></a></li>
                                    <?php
                                endif;
                                ?>
                            </ul>
                        </div>

                        <!-- end: more-images -->

                    </div>
                    <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
                        <form class="form-submit">
                            <div class="product-name">
                                <h1><?=$product_info['product_name']?></h1>
                            </div>
                            <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> ৳ <?=$product_info['product_sale_price']?></span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ৳ <?=$product_info['product_regular_price']?> </span> </p>
                            </div>
                            <div class="ratings">
                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span><a href="#">Add Your Review</a> </p>
                                <p class="availability in-stock pull-right">Availability: <span>In Stock <?=$product_info['product_stock']?></span></p>
                            </div>
                            <div class="short-description">
                                <h2>Quick Overview</h2>
                                
								<?php
									$short_desc = reverse_mysqli_real_escape_string($product_info['product_short_description']);
									
									echo '<p>'.$short_desc.'</p>';
									?>
									
                            </div>
                            
                            <div class="product-color-size-area">
                                <div class="color-area">
                                    <!-- <h2 class="saider-bar-title">Color</h2>
                                    <div class="color">
                                        <ul>
                                            <li><a value="black" href="#"></a></li>
                                            <li><a value="red" href="#"></a></li>
                                            <li><a value="yellow" href="#"></a></li>
                                            <li><a value="red" href="#"></a></li>
                                            <li><a value="pink" href="#"></a></li>
                                            <li><a value="white" href="#"></a></li>
                                        </ul>
                                    </div> -->
                                </div>
                                <div class="size-area">
                                    <!-- <h2 class="saider-bar-title">Size</h2>
                                    <div class="size">
                                        <ul>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">XXL</a></li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>

                            <div class="product-variation">
                            <div class="cart-plus-minus">

                                <label for="qty">Quantity:</label>
                                    <div class="numbers-row">
                                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                                        <input type="text" class="qty pqty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                                    </div>
                                </div>

                                    <input type="hidden" class="pid" value="<?=$product_info['id']?>">
                                    <input type="hidden" class="pname" value="<?=$product_info['product_name']?>">

                                    <input type="hidden" class="pprice" value="<?=$product_info['product_sale_price']?>">
                                    <input type="hidden" class="pimage" value="<?= $product_info['product_thumbnail_image'] ?>">
                                    <input type="hidden" class="pcode" value="<?= $product_info['product_code'] ?>">

                                <button type="button" title="Add to Cart" class="button pro-add-to-cart addItemBtn"><span><i class="fa fa-shopping-basket"></i> Add to Cart</span> </button>
                            </div>
                            
                                    <?php
											  if(isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == true){
													echo '<div class="product-cart-option">
                                                    <ul><li><a class="pointer addWishBtn"><i class="fa fa-heart-o"></i><span>Add to Wishlist</span></a></li></ul>
                                                    </div>';
												  }
										?>
                                
                            <!--<div class="pro-tags">-->
                            <!--    <div class="pro-tags-title">Tags:</div>-->
                            <!--    <a href="#"> </a>, <a href="#"></a>, <a href="#"></a>, <a href="#"></a>, <a href="#"></a>-->
                            <!--</div>-->
                            <div class="share-box">
                                <div class="title">Share in social media</div>
                                <div class="socials-box">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://stylishvalley.com/single_product?id=<?=$product_info['id']?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/intent/tweet?text=https://stylishvalley.com/single_product?id=<?=$product_info['id']?>;via=theartofweb" target="_blank"><i class="fa fa-twitter"></i></a>
                               <!-- <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a> </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="product-overview-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="product-tab-inner">
                                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                    <li class="active"><a href="#description" data-toggle="tab"> Description </a></li>
                                    <li><a href="#reviews" data-toggle="tab">Reviews</a></li>


                                </ul>
                                <div id="productTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="description">
                                        <div class="std">
                                            <p> <?=$product_info['product_long_description']?></p>
                                        </div>
                                    </div>
                                    <div id="reviews" class="tab-pane fade">
                                        <div class="col-sm-5 col-lg-5 col-md-5">
                                            <div class="reviews-content-left">
                                                <h2>Customer Reviews</h2>
                                                <div class="review-ratting">
                                                    <p><a href="#">Amazing</a> Review by Company</p>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th>Price</th>
                                                                <td>
                                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Value</th>
                                                                <td>
                                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Quality</th>
                                                                <td>
                                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p class="author"> Angela Mack<small> (Posted on 16/12/2015)</small> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-lg-7 col-md-7">
                                            <div class="reviews-content-right">
                                                <h2>Write Your Own Review</h2>
                                                <form>
                                                    <h3>You're reviewing: <span>Donec Ac Tempus</span></h3>
                                                    <h4>How do you rate this product?<em>*</em></h4>
                                                    <div class="table-responsive reviews-table">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>1 star</th>
                                                                    <th>2 stars</th>
                                                                    <th>3 stars</th>
                                                                    <th>4 stars</th>
                                                                    <th>5 stars</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Quality</td>
                                                                    <td><input type="radio"></td>
                                                                    <td><input type="radio"></td>
                                                                    <td><input type="radio"></td>
                                                                    <td><input type="radio"></td>
                                                                    <td><input type="radio"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Price</td>
                                                                    <td><input type="radio"></td>
                                                                    <td><input type="radio"></td>
                                                                    <td><input type="radio"></td>
                                                                    <td><input type="radio"></td>
                                                                    <td><input type="radio"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Value</td>
                                                                    <td><input type="radio"></td>
                                                                    <td><input type="radio"></td>
                                                                    <td><input type="radio"></td>
                                                                    <td><input type="radio"></td>
                                                                    <td><input type="radio"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="form-area">


                                                        <div class="form-element">
                                                            <label>Review <em>*</em></label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                        <div class="buttons-set">
                                                            <button class="button submit" title="Submit Review" type="submit"><span><i class="fa fa-thumbs-up"></i> &nbsp;Review</span></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Container End -->

<!-- Related Product Slider -->

<div class="container">
    <div class="row">
        <div style="margin-top: 30px;" class="col-xs-12">
            <div class="related-product-area">
                <div class="page-header">
                    <h2>Related Products</h2>
                </div>
                <div class="related-products-pro">
                    <div class="slider-items-products">
                        <div id="related-product-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4 fadeInUp">
                                <?php
                                    $select_query = "SELECT * FROM products WHERE category_id = '$product_category_id'";
                                    $related_products_info = mysqli_query($con, $select_query);

                                    foreach($related_products_info as $related_product){
                                    ?>
                                        <div class="product-item">
                                            <div class="item-inner">
                                                <div class="product-thumbnail">
                                                    <div class="icon-sale-label sale-left">Sale</div>
                                                    <div class="icon-new-label new-right">New</div>
                                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.php?id=<?=$related_product['id']?>">
                                                            <figure> <img width="236px" height="260px" class="first-img" src="admin/images/product_image/<?= $related_product['product_thumbnail_image'] ?>" alt="HTML template"> <img width="236px" height="260px" class="hover-img" src="admin/images/product_image/<?= $related_product['product_featured_image'] ?>" alt="HTML template"></figure>
                                                        </a> </div>
                                                    <div class="pr-info-area">
                                                        <div class="pr-button">
                                                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.php?id=<?=$related_product['id']?>"><?=$related_product['product_name']?> </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price"> ৳ <?=$related_product['product_sale_price']?></span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <a href="single_product.php?id=<?=$related_product['id']?>"> <button type="submit" title="Add to Cart" class="add-to-cart"> <span> Add to Cart</span> </button> </a>
                                                            </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Related Product Slider End -->

<!-- Upsell Product Slider -->
<!-- Upsell Product Slider End -->
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
                            <p>25% on order over $199</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include ('footer.php');
?>

</body>

</html>
