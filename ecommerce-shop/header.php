<?php
// $site_link="http://stylishvalley.com/";
require 'connection.inc.php';
require 'functions.inc.php';

if(empty($_SESSION['CurrentCartSession'])){
	   $_SESSION['CurrentCartSession'] = generateRandomString();
	  }
	  
$select_query = "SELECT * FROM header_settings";
$header_settings_info = mysqli_fetch_assoc(mysqli_query($con, $select_query));


if (isset($_POST['search-submit'])) {
           $_session['searchkey'] = htmlspecialchars($_POST['searchkey']);
           
           echo  reloader('search',0);
    		exit();
    		die(); 
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs -->

<title> <?php echo $dynamic_title; ?> </title>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="description" content="<?php echo $dynamic_description; ?>">
<meta name="keywords" content="<?php echo $dynamic_category; ?>">
<meta name="author" content="<?php echo $dynamic_author; ?>"> 
<meta name="category" content="E-Commerce"> 
<meta name="coverage" content="Bangladesh"> 
<meta name="DC.title" lang="en" content=""> 

<meta property="og:type" content="<?php echo $dynamic_og_type; ?>"> 
<meta property="og:url" content="<?php echo $dynamic_og_url; ?>"> 
<meta property="og:site_name" content="stylishvalley.com"> 
<meta property="og:title" content="<?php echo $dynamic_og_title; ?>"> 
<meta property="og:image" content="<?php echo $dynamic_og_img; ?>"> 
<meta property="og:description" content="<?php echo $dynamic_og_description; ?>"> 
<meta property="fb:page_id" content="">     
<meta property="fb:app_id" content=""> 
<meta property="fb:pages" content="https://www.facebook.com/stylishvalley786"> 



<link rel="icon" href="images/site-icon.jpg" type="image/gif" sizes="16x16">

<!-- Favicons Icon -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<!-- CSS Style -->
<link type="text/css" rel="stylesheet" href="style.css">
<link type="text/css" rel="stylesheet" href="css/custom.css">

<link rel="stylesheet" href="css/as-alert-message.min.css" />
<script src="js/as-alert-message.min.js"></script>

<!-- jquery CND version:3.6.0 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Sweet alert js cdn -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<style>

/* curso type */
.pointer {cursor: pointer;}

</style>

</head>

<body>

<!-- mobile menu -->
<div id="mobile-menu">
  <ul>
    <li><a href="/" class="home1">Home Pages</a>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="#">Sub Menu </a>
         </li>
        <li><a href="#">Static Pages </a>
          <ul>
            <li><a href="about_us"><span>About Us</span></a></li>
            <li><a href="contact_us"><span>Contact Us</span></a></li>
            <li><a href="orders_list"><span>Orders List</span></a></li>
            <li><a href="order_details"><span>Order Details</span></a></li>
            <li><a href="404error"><span>404 Error</span> </a></li>
            <li><a href="faq"><span>FAQ Page</span></a></li>
            <li><a href="manufacturers"><span>Manufacturers</span></a></li>
            <li><a href="quick_view"><span>Quick View</span></a></li>
            <li><a href="dashboard"><span>Account Dashboard</span></a></li>
            <li><a href="shortcodes"><span>Shortcodes</span> </a></li>
            <li><a href="typography"><span>Typography</span></a></li>
          </ul>
        </li>
        <li><a href="#"> Blog Pages </a>
          <ul>
            <li><a href="blog_right_sidebar">Blog – Right sidebar </a></li>
            <li><a href="blog_left_sidebar">Blog – Left sidebar </a></li>
            <li><a href="blog_full_width">Blog - Full width</a></li>
            <li><a href="blog_single_post">Single post </a></li>
          </ul>
        </li>
      </ul>
    </li>
   
  </ul>
</div>
<!-- end mobile menu -->
<div id="page"> 
  
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-xs-12"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg hidden-xs hidden-sm"><?=$header_settings_info['welcome_msg']?> </div>
              <!-- Language &amp; Currency wrapper -->
            </div>
            
            <!-- top links -->
            <div class="headerlinkmenu col-md-8 col-sm-8 col-xs-12"> <span class="phone  hidden-xs hidden-sm">Call Us: <?=$header_settings_info['phone_number']?></span>
              <ul class="links">
                <li><a class="pointer" href="mailto:<?=$header_settings_info['email_address']?>" target="_blank" title="Email address"><span>Email : <?=$header_settings_info['email_address']?></span></a></li>
                <li class="hidden-xs"><a title="Help Center" href="contact_us"><span>Help Center</span></a></li>
                <?php
                  if(isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == true){
                          echo '<li>
                            <div class="dropdown"><a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>'.$eb_user_name.'</span> <i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu">';
                               
                            if($eb_user_type = $data['user_type']=='admin'){
                                echo '<li><a href="admin">Admin Panel</a></li>
                                  <li><a href="dashboard">Dashboard</a></li>';
                            }else{
                                echo '<li><a href="dashboard">Dashboard</a></li>';
                              }
                              echo'
                                <li><a href="wishlist">Wishlist</a></li>
                                <li><a href="orders_list">Order Details</a></li>
                                <li class="divider"></li>
                                <li><a href="logout">Log out</a></li>
                              </ul>
                            </div>
                          </li>';
                  }else{
                    echo '
                    <!--li>
                            <div class="dropdown"><a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>More</span> <i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="orders_list">Order Tracking</a></li>
                                <li><a href="about_us">About us</a></li>
                              </ul>
                            </div>
                          </li-->
                    <li>
                        <a title="login" href="login_page"><span>Login/Register</span></a>
                      </li>';
                  }				
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- header inner -->
      <div class="header-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12 jtv-logo-block"> 
              
              <!-- Header Logo -->
              <div class="logo"><a title="e-commerce" href="/"><img alt="Famous" title="Famous logo" src="images/logo.png"></a> </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-6 jtv-top-search"> 
              
              <!-- Search -->
              
              <div class="top-search">
                <div id="search">
                  <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="input-group">
                      <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                        <option>All Categories</option>
                        <option>women</option>
                        <option>&nbsp;&nbsp;&nbsp;Chair </option>
                        <option>&nbsp;&nbsp;&nbsp;Decoration</option>
                        <option>&nbsp;&nbsp;&nbsp;Lamp</option>
                        <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                        <option>&nbsp;&nbsp;&nbsp;Sofas </option>
                        <option>&nbsp;&nbsp;&nbsp;Essential </option>
                        <option>Men</option>
                        <option>Electronics</option>
                        <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                        <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                      </select>
                      <input type="text" class="form-control" name="searchkey" placeholder="Enter your search..." name="search">
                      <button class="btn-search" name="search-submit"  type="submit"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- End Search --> 
              
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 top-cart">
              <!-- top cart -->
              <div class="top-cart-contain">
                <div class="mini-cart">
                  <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="checkout">
                    <div class="cart-icon"><i class="icon-basket-loaded icons"></i><span class="cart-total"></span></div>
                    <div class="shoppingcart-inner hidden-xs"><span class="cart-title">My Cart</span> </div>
                    </a>
				  </div>
                  <div id = "cart-items-return"></div>
                </div>
              </div>
             <!-- top wishlist -->
          	<?php
              if(isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == true){
					echo '
                      <div class="top-cart-contain">
                        <div class="mini-cart">
                          <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="wishlist">
                            <div class="cart-icon"><i class="icon-heart icons"></i><span class="cart-total wish-total"></span></div>
                            <div class="shoppingcart-inner hidden-xs"><span class="cart-title">Wishlist</span> </div>
                            </a>
        				  </div>
                          <div id = "wish-items-return"></div>
                        </div>
                      </div>';
				  }
		        ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->


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