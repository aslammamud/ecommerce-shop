
<!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->

      <div class="row ml-auto">
        <div class="col-lg-4">
            <div class="visit-website">
                <a class="btn btn-outline-info text-white" href="/" target="_blank">Visite Website</a>
            </div>
        </div>
        <div class="col-lg-8">
          <div class="input-group input-group-search">
            <input type="search" name="search" class="form-control" placeholder="Search">
              <span class="input-group-btn">
                <button class="btn"><i class="fa fa-search"></i></button>
              </span><!-- input-group-btn -->
          </div><!-- input-group -->
        </div>
      </div>

      <div class="sl-header-right">
	  <?php if(isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == true){
      echo		  
            '<nav class="nav">
              <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                  <span class="logged-name">'.$eb_user_name.'</span>
                  <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                  <ul class="list-unstyled user-profile-nav">
                    <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                    <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                    <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                    <li><a href="logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
                  </ul>
                </div><!-- dropdown-menu -->
              </div><!-- dropdown -->
            </nav>';
        
        }else {
          
        }
      ?>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->