<?php
require 'connection.inc.php';
require 'functions.inc.php';

// Add products into the wishlist table
if (isset($_POST['pid'])) {
  if(isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == true){
  $pid = $_POST['pid'];
  $pname = $_POST['pname'];
  $pprice = $_POST['pprice'];
  $pimage = $_POST['pimage'];
  $pcode = $_POST['pcode'];
  $pqty = $_POST['pqty'];
  
  $total_price = (int)$pprice * (int)$pqty;
  

	  $stmt = $con->prepare("SELECT product_code FROM wishlist WHERE  product_code = ?");		  
	  $stmt->bind_param('s',$pcode);
	  $stmt->execute();
	  $res = $stmt->get_result();
	  $r = $res->fetch_assoc();
	  $code = $r['product_code'] ?? '';

		  if (!$code) {
			$query = $con->prepare('INSERT INTO wishlist (user_id,product_id,product_name,product_price,product_image,qty,total_price,product_code) VALUES (?,?,?,?,?,?,?,?)');
			$query->bind_param('ssssssss',$eb_user_id,$pid,$pname,$pprice,$pimage,$pqty,$total_price,$pcode);
			$query->execute();

			echo '<script>asAlertMsg({
					  type: "success",
					  title: "Item added to your wishlist!",
					  message: "Thanks For Visiting.",
					});</script>';
		  }else {
			echo '<script>asAlertMsg({
					  type: "warning",
					  title: "This product already exists in your wish!",
					  message: "Check your wishlist to see your favourite product.",
					});</script>';
		  }
		  
  }
 
}

	// Get no.of items available in the cart
	if (isset($_GET['wishItem']) && isset($_GET['wishItem']) == 'wishItem') {

		  $wish_items_query = "SELECT * FROM wishlist WHERE user_id = '$eb_user_id'";
		  $wish_items_result = mysqli_query($con,$wish_items_query);
          $count_wish_items = mysqli_num_rows($wish_items_result);

            if($count_wish_items>0){
                echo $count_wish_items;
            }else{
    		  echo "0";
    	  }

	}
	
    // Get all the items available in the cart
	if (isset($_GET['returnwishitems']) && isset($_GET['returnwishitems']) == 'returnwishitems') {

		  $wish_items_query = "SELECT * FROM wishlist WHERE user_id = '$eb_user_id' ORDER BY id DESC LIMIT 3";
		  $wish_items_result = mysqli_query($con,$wish_items_query);
          $count_wish_items = mysqli_num_rows($wish_items_result);

        echo ' <div class="top-cart-content">
        <div class="block-subtitle hidden">Recently added items</div>
        <ul id="cart-sidebar" class="mini-products-list">';
         if($count_wish_items>0){
             
					  
					  foreach($wish_items_result as $row){
					      echo '
                              <li class="item odd"><a title="Product title here" class="product-image"><img src="admin/images/product_image/'.$row['product_image'].'" alt="html Template" width="65"></a>
                                   <div class="product-details">
                                   <p class="product-name"><a>'.$row['product_name'].'</a> </p>
                                   <strong>1</strong> x <span class="price">৳'.$row['product_price'].'</span> </div>
                              </li>';
					  }
					  
					  echo '</ul><div class="actions">
                                <button class="view-cart" type="button" onClick="location.href=\'wishlist\'"><i style="font-size:12px;" class="fa fa-heart"></i><span>&nbspCheck Wishlist</span></button>
                              </div>';
         }else{
             echo '</ul><div class="actions">
                                <h5 style="color:red; text-align: center;">Wishlist is empty.</h5>
                              </div>';
         }

    }

?>