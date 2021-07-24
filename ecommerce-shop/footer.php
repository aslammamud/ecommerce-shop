<?php
// session have already started
$select_query = "SELECT * FROM footer_settings";
$footer_settings_info = mysqli_fetch_assoc(mysqli_query($con, $select_query));
?>
<!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3 col-xs-12">
          <div class="footer-logo"><a href="index.html"><img src="images/logo.png" alt="fotter logo"></a> </div>
          <p><?=$footer_settings_info['description']?></p>
          <div class="social">
            <ul class="inline-mode">
              <?php
                if($footer_settings_info['fb_link'] != ''){
                  ?>
                  <li class="social-network fb"><a title="Connect us on Facebook" href="<?=$footer_settings_info['fb_link']?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <?php
                }

                if($footer_settings_info['google_plus_link'] != ''){
                  ?>
                  <li class="social-network googleplus"><a title="Connect us on Google+" href="<?=$footer_settings_info['google_plus_link']?>" target="_blank"><i class="fa fa-google"></i></a></li>
                  <?php
                }

                if($footer_settings_info['tw_link'] != ''){
                  ?>
                  <li class="social-network tw"><a title="Connect us on Twitter" href="<?=$footer_settings_info['tw_link']?>"><i class="fa fa-twitter" target="_blank"></i></a></li>
                  <?php
                }

                if($footer_settings_info['pinterest_link'] != ''){
                  ?>
                  <li class="social-network linkedin"><a title="Connect us on Pinterest" href="<?=$footer_settings_info['pinterest_link']?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                  <?php
                }

                if($footer_settings_info['insta_link'] != ''){
                  ?>
                  <li class="social-network rss"><a title="Connect us on Instagram" href="<?=$footer_settings_info['insta_link']?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <?php
                }
              ?>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-2 col-xs-12 collapsed-block">
          <div class="footer-links">
            <h5 class="links-title">Information<a class="expander visible-xs" href="#TabBlock-1">+</a></h5>
            <div class="tabBlock" id="TabBlock-1">
              <ul class="list-links list-unstyled">
                <li><a href="delivery_policy">Delivery Policy</a></li>
                <li><a href="privacy_policy">Privacy Policy</a></li>
                <li><a href="faq_page">FAQs</a></li>
                <li><a href="privacy_policy">Terms &amp; Condition</a></li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-sm-3 col-md-2 col-xs-12 collapsed-block">
          <div class="footer-links">
            <h5 class="links-title">Insider<a class="expander visible-xs" href="#TabBlock-3">+</a></h5>
            <div class="tabBlock" id="TabBlock-3">
              <ul class="list-links list-unstyled">
             <?php 
             
                 if(isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == true){
                 echo '<li><a href="wishlist">Wishlist</a></li>
                    <li><a href="orders_list">My Orders</a></li>';
                 }
            ?>
                
                <li><a href="cart">Shopping Cart</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-2 col-xs-12 collapsed-block">
          <div class="footer-links">
            <h5 class="links-title">Service<a class="expander visible-xs" href="#TabBlock-4">+</a></h5>
            <div class="tabBlock" id="TabBlock-4">
              <ul class="list-links list-unstyled">
                <li><a href="about_us">About Us</a></li>
                <li><a href="contact_us">Contact Us</a></li>
                <li><a href="refund_policy">Return Policy</a></li>
                <li><a href="special_offer">Special Offers</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 collapsed-block">
          <div class="footer-links">
            <h5 class="links-title">Working hours<a class="expander visible-xs" href="#TabBlock-5">+</a></h5>
            <div class="tabBlock" id="TabBlock-5">
              <div class="footer-description"><?=$footer_settings_info['description']?></div>
              <div class="footer-description"> <b><?=$footer_settings_info['working_start_time']?></b><br>
                <b><?=$footer_settings_info['working_end_time']?></b><br>
                <b><?=$footer_settings_info['off_day']?></b> Closed </div>
              <div class="payment">
                <ul>
                  <li><a href="#"><img title="Paypal" alt="Paypal" src="images/paypal.png"></a></li>
                  <li><a href="#"><img title="Discover" alt="Discover" src="images/discover.png"></a></li>
                  <li><a href="#"><img title="Master Card" alt="Master Card" src="images/master-card.png"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-coppyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 coppyright"> Copyright © <?php echo date('Y'); ?> <a href="http://stylishvalley.com"> <?=$footer_settings_info['copyright']?> </a>. All Rights Reserved. </div>
          <div class="col-sm-6 col-xs-12">
            <ul class="footer-company-links">
              <li><a href="about_us.php">About Us</a></li>
              <li><a href="privacy_policy.php">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
 <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
  
  <!-- End Footer --> 
</div>

<!-- JS --> 

<!-- jquery js --> 
<script src="js/jquery.min.js"></script> 

<!-- bootstrap js --> 
<script src="js/bootstrap.min.js"></script> 

<!-- owl.carousel.min js --> 
<script src="js/owl.carousel.min.js"></script> 

<!-- jquery.mobile-menu js --> 
<script src="js/mobile-menu.js"></script> 

<!--jquery-ui.min js --> 
<script src="js/jquery-ui.js"></script> 

<!-- main js --> 
<script src="js/main.js"></script> 

<!-- countdown js --> 
<script src="js/countdown.js"></script> 

<!-- Slider Js --> 
<script src="js/revolution-slider.js"></script> 

<!-- owl.carousel.min js --> 
<script src="js/owl.carousel.min.js"></script> 

<!--cloud-zoom js --> 
<script src="js/cloud-zoom.js"></script> 

<!-- flexslider js --> 
<script src="js/jquery.flexslider.js"></script> 

<!-- jquery.mobile-menu js --> 
<script src="js/mobile-menu.js"></script> 

<!--jquery-ui.min js --> 
<script src="js/jquery-ui.js"></script> 

<!-- main js --> 
<script src="js/main.js"></script> 

<!-- countdown js --> 
<script src="js/countdown.js"></script>

<script src="js/sweetalert.min.js"></script>

<script>
jQuery(document).ready(function(){
    $('.item_delete_button').click(function (e){
          e.preventDefault(e);
        var deletename =  $(this).closest("tr").find('.item_delete_name').val();
        var deleteid = $(this).closest("tr").find('.item_delete_id').val();
          
          swal({
		  title: "Are you sure?",
		  text: deletename + " will be removed from your wishlist!",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
		      
		       $.ajax({
            	type: 'POST',
            	url: 'wishlist-remove-item.php',
            	data: {
            	  "del_item_set": 1,
            	  "id": deleteid
            	},
            	success: function(response) {
            	  swal(deletename + " has been removed from your wishlist!", {
        			  icon: "success",
        			  
        			}).then((result) => {
        			    location.reload();
        			});
            	}
              });

		  } 
		});
	});

    $('.cart_item_delete_button').click(function (e){
          e.preventDefault(e);
        var deletename =  $(this).closest("tr").find('.cart_item_delete_name').val();
        var deleteid = $(this).closest("tr").find('.cart_item_delete_id').val();
          
          swal({
		  title: "Are you sure?",
		  text: deletename + " will be removed from your cart!",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
		      
		       $.ajax({
            	type: 'POST',
            	url: 'cart_action.php',
            	data: {
                "remove": deleteid
            	},
            	success: function(response) {
            	  swal(deletename + " has been removed from your cart!", {
        			  icon: "success",
        			  
        			}).then((result) => {
        			    location.reload();
        			});
            	}
              });

		  } 
		});
	});
	
	
	$('.apply_coupon_btn').click(function (e){
          e.preventDefault(e);
          var couponname =  $(this).closest("div").find('.coupon_item_input').val();
        
        $.ajax({
        	type: 'POST',
        	url: 'coupon_action.php',
        	data: {
        	  "couponname": couponname
        	},
        	success: function(response) {
        	  //console.log(couponname);
        	  //console.log(response);
        	  
        	  if(response == true){
        	      
        			asAlertMsg({
    					  type: "success",
    					  title: "Coupon Applied Successfully!",
    					  message: couponname + " has been applied for discount.",
    					  });
    					  
                $("#couponmsg").html('<br><p style="font-size:14px;color: #14b04f; margin: 0px !important;">&nbsp Coupon successfully applied.</p><p style="font-size:14px;color: #14b04f; margin: 0px !important;">&nbsp Discount added to your purchase.</p>');
                $('#input_coupon').prop('readonly', true);
                $("#true_coupon").val(couponname);
                
                $(".apply_coupon_btn").attr("disabled", true);
                $(".apply_coupon_btn").attr("style", "display:none;");
                $(".input-group-btn").html(' <a style="color:white;" class="btn btn-success">Coupon Applied</a>');
                $("#shipping").prop('disabled', true);
                $("#inputGetway").prop('disabled', true);
                
        	  }else if(response == false){
        	      asAlertMsg({
    					  type: "error",
    					  title: "Invalid Coupon!",
    					  message: couponname + " is not a valid coupon.",
    					  });
    			$("#couponmsg").html('<br><p style="font-size:14px;color: #ee284b">&nbsp Coupon not valid!</p>');
 
        	  }

        	}
         });
         
         var finalprice =  $('#grand_total_price').val();
         $.ajax({
        	type: 'POST',
        	url: 'coupon_discount_action.php',
        	data: {
        	  "couponname": couponname,
        	  "finalprice": finalprice
        	},
        	success: function(data) {
	        console.log(data);
            $("#grand_t_p").html(data+' ৳');
            $("#grand_total_price").val(data);
        	}
         });
        
	});
	
    
jQuery('#rev_slider_4').show().revolution({
	dottedOverlay: 'none',
	delay: 5000,
	startwidth: 865,
	startheight: 450,

	hideThumbs: 200,
	thumbWidth: 200,
	thumbHeight: 50,
	thumbAmount: 2,

	navigationType: 'thumb',
	navigationArrows: 'solo',
	navigationStyle: 'round',

	touchenabled: 'on',
	onHoverStop: 'on',
	
	swipe_velocity: 0.7,
	swipe_min_touches: 1,
	swipe_max_touches: 1,
	drag_block_vertical: false,

	spinner: 'spinner0',
	keyboardNavigation: 'off',

	navigationHAlign: 'center',
	navigationVAlign: 'bottom',
	navigationHOffset: 0,
	navigationVOffset: 20,

	soloArrowLeftHalign: 'left',
	soloArrowLeftValign: 'center',
	soloArrowLeftHOffset: 20,
	soloArrowLeftVOffset: 0,

	soloArrowRightHalign: 'right',
	soloArrowRightValign: 'center',
	soloArrowRightHOffset: 20,
	soloArrowRightVOffset: 0,

	shadow: 0,
	fullWidth: 'on',
	fullScreen: 'off',

	stopLoop: 'off',
	stopAfterLoops: -1,
	stopAtSlide: -1,

	shuffle: 'off',

	autoHeight: 'off',
	forceFullWidth: 'on',
	fullScreenAlignForce: 'off',
	minFullScreenHeight: 0,
	hideNavDelayOnMobile: 1500,

	hideThumbsOnMobile: 'off',
	hideBulletsOnMobile: 'off',
	hideArrowsOnMobile: 'off',
	hideThumbsUnderResolution: 0,
		

	hideSliderAtLimit: 0,
	hideCaptionAtLimit: 0,
	hideAllCaptionAtLilmit: 0,
	startWithSlide: 0,
	fullScreenOffsetContainer: ''
});

// Send cart product details in the server

$(".addItemBtn").click(function(e) {
  e.preventDefault();
  var $form = $(this).closest(".form-submit");
  var pid = $form.find(".pid").val();
  var pname = $form.find(".pname").val();
  var pprice = $form.find(".pprice").val();
  var pimage = $form.find(".pimage").val();
  var pcode = $form.find(".pcode").val();

  var pqty = $form.find(".pqty").val();

  $.ajax({
	url: 'cart_action.php',
	method: 'post',
	data: {
	  pid: pid,
	  pname: pname,
	  pprice: pprice,
	  pqty: pqty,
	  pimage: pimage,
	  pcode: pcode
	},
	success: function(response) {
	  $("#message").html(response);
	  //window.scrollTo(0, 0);
	  load_cart_item_number();
	  load_return_cart_items();
	}
  });
});

// Load total no.of items added in the cart and display in the navbar

load_cart_item_number();
load_return_cart_items();

function load_cart_item_number() {
  $.ajax({
	url: 'cart_action.php',
	method: 'get',
	data: {
	  cartItem: "cart_item"
	},
	success: function(response) {
	  $(".cart-total").html(response);
	}
  });
}

function load_return_cart_items() {
  $.ajax({
	url: 'cart_action.php',
	method: 'get',
	data: {
	  returnitems: "returnitems"
	},
	success: function(response) {
	  $("#cart-items-return").html(response);
	}
  });
}


// Send wishlist product details in the server

$(".addWishBtn").click(function(e) {
  e.preventDefault();
  var $form = $(this).closest(".form-submit");
  var pid = $form.find(".pid").val();
  var pname = $form.find(".pname").val();
  var pprice = $form.find(".pprice").val();
  var pimage = $form.find(".pimage").val();
  var pcode = $form.find(".pcode").val();

  var pqty = $form.find(".pqty").val();

  $.ajax({
	url: 'wish_action.php',
	method: 'post',
	data: {
	  pid: pid,
	  pname: pname,
	  pprice: pprice,
	  pqty: pqty,
	  pimage: pimage,
	  pcode: pcode
	},
	success: function(response) {
	  $("#message").html(response);
	  //window.scrollTo(0, 0);
	  load_wish_item_number();
	  load_return_wish_items();
	}
  });
});

// Load total items added in the wishlist and display in the navbar
load_wish_item_number();
load_return_wish_items();

function load_wish_item_number() {
  $.ajax({
	url: 'wish_action.php',
	method: 'get',
	data: {
	  wishItem: "wishItem"
	},
	success: function(response) {
	  $(".wish-total").html(response);
	}
  });
}

function load_return_wish_items() {
  $.ajax({
	url: 'wish_action.php',
	method: 'get',
	data: {
	  returnwishitems: "returnwishitems"
	},
	success: function(response) {
	  $("#wish-items-return").html(response);
	}
  });
}

});
</script>

</body>
</html>
