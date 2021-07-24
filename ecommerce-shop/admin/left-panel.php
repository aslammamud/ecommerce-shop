<!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="/admin"><i class="icon ion-android-star-outline"></i> Stylishvalley</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="/admin" class="sl-menu-link <?php echo ($page == "home" ? "active" : "")?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Home</span>
          </div>
        </a>
        
       <a href="dynamic-meta" class="sl-menu-link <?php echo ($page == "dynamic-meta" ? "active" : "")?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-book-outline tx-22"></i>
            <span class="iconify" data-icon="ion:book-outline" data-inline="false"></span>
            <span class="menu-item-label">Dynamic Meta</span>
          </div>
        </a>

        <a href="orders" class="sl-menu-link <?php echo ($page == "orders" ? "active" : "")?>">
          <div class="sl-menu-item">
            <i class="fa fa-first-order tx-20"></i>
            <span class="menu-item-label">Orders</span>
          </div>
        </a>

        <a href="category" class="sl-menu-link <?php echo ($page == "category" ? "active" : "")?>">
          <div class="sl-menu-item">
            <i class="fab fa-product-hunt icon ion-ios-reader-outline tx-24"></i>
            <span class="menu-item-label">Category</span>
          </div>
        </a>

        <a href="products" class="sl-menu-link <?php echo ($page == "products" ? "active" : "")?>">
          <div class="sl-menu-item">
            <i class="fab fa-product-hunt ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Products</span>
          </div>
        </a>
		
		<a href="all-user-list" class="sl-menu-link <?php echo ($page == "all-user" ? "active" : "")?>">
          <div class="sl-menu-item">
           <i class="fa fa-users" aria-hidden="true tx-24"></i>
            <span class="menu-item-label">All User List</span>
          </div>
        </a>
        
        <a href="coupon-list" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-circle-o" aria-hidden="true tx-20"></i>
            <span class="menu-item-label">Coupon List</span>
          </div>
        </a>
        
        <a href="guest_info" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-envelope-o" aria-hidden="true tx-20"></i>
            <span class="menu-item-label">Guest Message</span>
          </div>
        </a>


        <a href="partner_brand" class="sl-menu-link <?php echo ($page == "partner-brand" ? "active" : "")?>">
          <div class="sl-menu-item">
            <i class="fa fa-user tx-20"></i>
            <span class="menu-item-label">Partnership Brand</span>
          </div>
        </a>
        
        <a href="customer_review" class="sl-menu-link <?php echo ($page == "customer-review" ? "active" : "")?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Customer Reviews</span>
          </div>
        </a>
        <a href="#" class="sl-menu-link <?php echo ($page == "website-settings" ? "active" : "")?>">
          <div class="sl-menu-item">
            <i class="fa fa-cog" aria-hidden="true tx-24"></i>
            <span class="menu-item-label">Website Settings</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="header_seeting" class="nav-link">Header settings</a></li>
              <li class="nav-item"><a href="gallery_setting" class="nav-link">Gallery settings</a></li>
              <li class="nav-item"><a href="banner_setting" class="nav-link">Banner settings</a></li>
              <li class="nav-item"><a href="footer_setting" class="nav-link">Footer settings</a></li>
            </ul>
        </a>
        <a href="#" class="sl-menu-link <?php echo ($page == "singel-page-settings" ? "active" : "")?>">
          <div class="sl-menu-item">
            <i class="fa fa-cog" aria-hidden="true tx-24"></i>
            <span class="menu-item-label">Single Page Settings</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="#" class="nav-link">FAQ page</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Refund Policy Page</a></li>
              <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
              <li class="nav-item"><a href="#" class="nav-link">privacy Policy</a></li>
            </ul>
        </a>
		
		<!--<a href="create-new-page" class="sl-menu-link <?php echo ($page == "create-new-page" ? "active" : "")?>">
			<div class="sl-menu-item">
				<span class="menu-item-label">Create New Page</span>
			</div>
		 </a>-->
		 
		 <!--<a href="page-settings.php" class="sl-menu-link">-->
			<!--<div class="sl-menu-item">-->
			<!--	<span class="menu-item-label">Page Settings</span>-->
			<!--</div>-->
		 <!--</a>-->

        <!-- <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Send notifications</span>
          </div>
        </a>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Location</span>
          </div>
        </a>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Reports</span>
          </div>
        </a>

        <a href="sms-manage.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">SMS Manage</span>
          </div>
        </a>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">SEO Settings</span>
          </div>
        </a>
        <a href="analytics.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Analytics</span>
          </div>
        </a>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Contact Information</span>
          </div>
        </a> -->
        
        <a href="logout" class="sl-menu-link" onclick="return confirm('Are you sure want to logout?');">
          <div class="sl-menu-item">
		  <i class="fa fa-sign-out tx-20" aria-hidden="true"></i>
            <span class="menu-item-label">Log Out</span>
          </div>
        </a>
       </div>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->
