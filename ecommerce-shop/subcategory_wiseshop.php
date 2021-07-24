<?php 
  $page='single';
  require_once ('header.php');
  require_once ('single_nav.php');

  $category_select_query = "SELECT * FROM categories";
  $categories = mysqli_fetch_assoc(mysqli_query($con, $category_select_query));
  $select_query = "SELECT * FROM sub_categories";
  $sub_categories = mysqli_query($con, $select_query);
  $sub_categories_assoc = mysqli_fetch_assoc(mysqli_query($con, $select_query));
  $subcategory_id = $_GET['scid'];

?>

<!-- Breadcrumbs -->
<!-- Copy Bootstrap CDN  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<style>
   .mega-menu-title::after{
       display: none im !important;
   }
</style>
<div class="breadcrumbs custom-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <ul>
                    <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
                    <li class="home"> <a title="Go to Category Page" href="category_wiseshop.php"> <?=$categories['category_name']?> </a><span>&raquo;</span></li>
                    <li><strong> <?=$sub_categories_assoc['sub_category_name']?> </strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Category Wise product -->
<div class="container">
    <div class="row">
        <div class="col-xs-3">
            <div class="mega-menu-category_custom">
                <ul class="nav">
                    <?php
                        foreach($sub_categories as $sub_category){
                            $subcategory_name = str_replace(' ', '', $sub_category['sub_category_name']);
                        ?>
                        <li <?php if($sub_category['id'] == $subcategory_id){ echo 'class="active"'; } ?> >
                            <a href="#<?= $subcategory_name ?>" data-toggle="tab" aria-expanded="false"><?=$sub_category['sub_category_name']?></a></li>
                        <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-xs-9">

            <div id="productTabContent" class="tab-content">
                <?php
                    foreach($sub_categories as $sub_category){
                    $subcategory_name = str_replace(' ', '', $sub_category['sub_category_name']);
                ?>
                <div class="tab-pane <?php if($sub_category['id'] == $subcategory_id){ echo 'active'; } ?> in" id="<?=$subcategory_name?>">

                    <div class="col-main col-sm-12 col-xs-12">
                        <div class="shop-inner">
                            <div class="page-title">
                            <h3 style="text-align: left;" class="deal-title"><?=$sub_category['sub_category_name']?></h3>
                            </div>
                            <div class="product-grid-area">
                                <ul class="products-grid">

                                    <?php
                                       $subcategory_id_for_select = $sub_category['id'];
                                        $select_query = "SELECT * FROM products WHERE category_id = '$subcategory_id_for_select'";
                                        $products_info = mysqli_query($con, $select_query);
                                        $count_products = mysqli_num_rows($products_info);

                                        if($count_products>0){
                                        foreach($products_info as $product){
                                        ?>
                                        <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                            <form action="form-submit">
                                                <div class="product-item">
                                                    <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="icon-new-label new-left">New</div>

                                                        <div class="pr-img-area"> 
                                                            <a title="Product Name Here" href="single_product.php?id=<?=$product['id']?>">
                                                                <figure>
                                                                    <img  width="182px" height="180px" class="first-img" src="admin/images/product_image/<?= $product['product_thumbnail_image'] ?>" alt="HTML template">
                                                                    <img  width="182px" height="180px" class="hover-img" src="admin/images/product_image/<?= $product['product_featured_image'] ?>" alt="HTML template">
                                                                </figure>
                                                            </a> 
                                                        </div>
                                                        <div class="pr-info-area">
                                                        <div class="pr-button">
                                                            <div class="mt-button add_to_wishlist"><a href="#"> <i class="fa fa-heart"></i> </a> </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                        <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.php?id=<?=$product['id']?>"><?=$product['product_name']?> </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                            <div class="price-box">
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> ৳ <?=$product['product_sale_price']?> </span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ৳ <?=$product['product_regular_price']?> </span> </p>
                                                            </div>
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
                                     
                                         if($count_products>10){
                                         echo '
                                            <div class="pagination-area ">
                                            <BR>
                                            <a href="#" class="buy-btn" style="min-height: 0px; min-width: 189.561px; line-height: 19px; border-width: 0px; margin: 0px 7.9815px 0px 0px; padding: 12px 22px; letter-spacing: 0px; font-size: 13px; max-width: 189.561px;">SEE ALL PRODUCTS</a>
                                            </div>';
                                            
                                         }
                                    
                                            
                                        }else{
                                            echo '
                                                 <li style="margin: 80px 50px;" class="text-center">
                                                <div class="alert alert-danger sm"><h5>No Products Available Right Now</h5></div>
                                            </li>';
                                        }
                                    ?>

                                </ul>
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
<!-- Related Product Slider End -->

<!-- Upsell Product Slider -->
<!-- Upsell Product Slider End -->
<!-- service section -->
<div class="jtv-service-area">
    <div style="margin-top: 40px;" class="container">
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

