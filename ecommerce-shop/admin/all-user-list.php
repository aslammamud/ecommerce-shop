<?php
include 'header.php';

$user_select_query = "SELECT * FROM user";
$admin_select_query = "SELECT * FROM user WHERE user_type = 'admin'";
$customer_select_query = "SELECT * FROM user WHERE `user_type` = 'customer'";
$user_info = mysqli_query($con, $user_select_query);
$admin_info = mysqli_query($con, $admin_select_query);
$customer_info = mysqli_query($con, $customer_select_query);

?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="customer-list">Customer List</a>
      </nav>
      <div class="col-lg-12 sl-pagebody m-auto">
        
        <table class="table table-bordered text-center">
          
          <div class="row gutters-10">
            <div class="col-md-3">
                <div class="bg-info text-white rounded-lg mb-4 overflow-hidden">
                  <div class="px-3 pt-3 text-center">
                    <div class="h3 fw-700"><?= $user_info->num_rows; ?></div>
                    <div class="h5 opacity-50">Total Accounts</div>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                      <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L26.7,192C53.3,192,107,192,160,202.7C213.3,213,267,235,320,218.7C373.3,203,427,149,480,117.3C533.3,85,587,75,640,90.7C693.3,107,747,149,800,149.3C853.3,149,907,107,960,112C1013.3,117,1067,171,1120,202.7C1173.3,235,1227,245,1280,213.3C1333.3,181,1387,107,1413,69.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
                  </svg>
                </div>
            </div>

            <div class="col-md-3">
                <div class="bg-info text-white rounded-lg mb-4 overflow-hidden">
                    <div class="px-3 pt-3 text-center">
                        <div class="h3 fw-700"><?= $admin_info->num_rows; ?></div>
                        <div class="h5 opacity-50">Admins</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
			<div class="col-md-3">
                <div class="bg-info text-white rounded-lg mb-4 overflow-hidden">
                    <div class="px-3 pt-3 text-center">
                        <div class="h3 fw-700"><?= $customer_info->num_rows; ?></div>
                        <div class="h5 opacity-50">Customers</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                    </svg>
                </div>
            </div>

          </div>

            <thead class="bg-primary">
                <tr>
                    <td>User ID</td>
                    <td>User Name</td>
                    <td>User Phone</td>
                    <td>User Email</td>
                    <td>Created At</td>
                    <td>User City</td>
                    <td>User Type</td>
                    <!--td>User Level</td-->
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                  foreach($user_info as $user){
                    ?>
                      <tr>
                        <td><?=$user['user_id']?></td>
                        <td><?=$user['user_name']?></td>
                        <td><?=$user['user_phone']?></td>
                        <td><?=$user['user_email']?></td>
                        <td><?=$user['user_join_date']?></td>
                        <td><?=$user['user_city']?></td>
                        <td><?=$user['user_type']?></td>
                        <!--td>
                          <a class="btn btn-sm btn-outline-warning" href="#">new buyer</a>
                          <a class="badge badge-primary" href="#">top buyer</a>
                        </td-->
                        <td>
                          <!--a class="btn btn-sm mt-2 btn-outline-info" href="#">Edit</a-->
                          <a class="btn btn-sm mt-2 btn-outline-danger" href="remove-a-user?id=<?php echo $user['user_id']; ?>" onclick="return confirm('Are you sure want to clear your cart?');">Delete</a>
                        </td>
                      </tr>
                    <?php
                  }
                ?>
                
                <!--tr class="">
                  <td colspan="50"><a href="">See More Accounts</a></td>
                </tr-->
            </tbody>
        </table>

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->       
    <!-- ########## END: MAIN PANEL ########## -->

<?php
  require_once 'footer.php';
?>