<?php
// already have connection code & session start

    // select user information query 
    $select_query = "SELECT * FROM user WHERE user_id = '$eb_user_id'";
    $user_info = mysqli_fetch_assoc(mysqli_query($con, $select_query));

?>

<aside class="left sidebar col-sm-3 col-xs-12" style="background:#f2f9f3">
    <div class="sidebar-account block">
        <div class="card-body">
            <img src="images/profile_image/<?=$user_info['user_image']?>" class = "img-circle center" width="100" height="100" style="margin-left: 80px;
                margin-top: 24px;
                margin-bottom: 15px;">
            <h3 style="color:#0f0f0e;  text-align:center;"><?=$user_info['user_name']?></h3>
        </div>
        <div class="sidebar-bar-title">
        </div>
        <div class="block-content">
            <ul>
                <li class="<?php echo ($active_nav == "dashboard" ? "current" : "")?>"><a href="dashboard">Account Dashboard</a></li>
                <li class="<?php echo ($active_nav == "wishlist" ? "current" : "")?>"><a href="wishlist">My Wishlist</a></li>
                <li class="<?php echo ($active_nav == "order_list" ? "current" : "")?>"><a href="orders_list">My orders</a></li>
                <li class="<?php echo ($active_nav == "profile" ? "current" : "")?>"><a href="profile">My Profile</a></li>
                <li class="<?php echo ($active_nav == "profile_setting" ? "current" : "")?>"><a href="profile_settings">Profile Settings</a></li>
                <li class="<?php echo ($active_nav == "product_review" ? "current" : "")?>"><a href="product_review">My Product Review</a></li>
                <li><a href="logout">Log out</a></li>

                <!-- <li><a href="#">Address Book</a></li>
                <li><a href="#">My Orders</a></li>
                <li><a href="#">Billing Agreements</a></li>
                <li><a href="#">Recurring Profiles</a></li>
                <li><a href="#">My Product Reviews</a></li>
                <li><a href="#">My Tags</a></li>
                <li><a href="#">My Downloadable</a></li>
                <li class="last"><a href="#">Newsletter Subscriptions</a></li> -->

            </ul>
        </div>
    </div>

    <!-- <div class="compare block">
    <div class="sidebar-bar-title">
        <h3>Compare Products (2)</h3>
    </div>
    <div class="block-content">
        <ol id="compare-items">
        <li class="item"><a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a><a href="#" class="product-name">Vestibulum porta tristique porttitor.</a></li>
        <li class="item"><a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a><a href="#" class="product-name">Lorem ipsum dolor sit amet</a></li>
        </ol>
        <div class="ajax-checkout">
        <button type="submit" title="Submit" class="button button-compare"> <span> Compare</span></button>
        <button type="submit" title="Submit" class="button button-clear"> <span> Clear All</span></button>
        </div>
    </div>
    </div> -->

</aside>