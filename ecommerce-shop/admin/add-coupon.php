<?php
   include 'header.php';
   
       if(isset($_POST['submit'])){

           if(isset($_POST['coupon_code']) && strlen($_POST['coupon_code'])>16){

              $err_msg_1 = "Coupon code shouldn't be more than 16 letters";
 
           } else{
                
                if($_POST['coupon_type'] == 'Percentage'){

                   if($_POST['coupon_discount'] >= 100){
                       $err_msg_2 = "Discount should not be more than 100% !";
                     }else{
                           $coupon_name = htmlspecialchars($_POST['coupon_name']);
                           $coupon_code = strtoupper(htmlspecialchars($_POST['coupon_code']));
                           $coupon_type = htmlspecialchars($_POST['coupon_type']);
                           $coupon_discount = htmlspecialchars($_POST['coupon_discount']);
                           $expire_date = htmlspecialchars($_POST['expire_date']);
                           $user_limit = htmlspecialchars($_POST['user_limit']);
                           $based_on = htmlspecialchars($_POST['based_on']);
                           if(isset($_POST['free_shipping']) == "on"){
                             $free_shipping = 1;
                           }else{
                             $free_shipping = 0;
                           }
                           
                           $insert_query = "INSERT INTO coupon (coupon_name, coupon_code, coupon_type, coupon_discount, experied_date, user_limit, based_on, free_shipping) VALUES ('$coupon_name', '$coupon_code', '$coupon_type', '$coupon_discount', '$expire_date', '$user_limit', '$based_on', '$free_shipping')";
                           $coupon = mysqli_query($con, $insert_query);
                           $_SESSION['coupon_create_status'] = "Successfully created a Coupon";
                     }
                     
               }else{
                           $coupon_name = htmlspecialchars($_POST['coupon_name']);
                           $coupon_code = strtoupper(htmlspecialchars($_POST['coupon_code']));
                           $coupon_type = htmlspecialchars($_POST['coupon_type']);
                           $coupon_discount = htmlspecialchars($_POST['coupon_discount']);
                           $expire_date = htmlspecialchars($_POST['expire_date']);
                           $user_limit = htmlspecialchars($_POST['user_limit']);
                           $based_on = htmlspecialchars($_POST['based_on']);
                           if(isset($_POST['free_shipping']) == "on"){
                             $free_shipping = 1;
                           }else{
                             $free_shipping = 0;
                           }
                           
                           $insert_query = "INSERT INTO coupon (coupon_name, coupon_code, coupon_type, coupon_discount, experied_date, user_limit, based_on, free_shipping) VALUES ('$coupon_name', '$coupon_code', '$coupon_type', '$coupon_discount', '$expire_date', '$user_limit', '$based_on', '$free_shipping')";
                           $coupon = mysqli_query($con, $insert_query);
                           $success_msg = "Successfully created a Coupon";
                     }
               
           }
           
       }
   ?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="add-copon">Create New Coupon</a>
   </nav>
   <table class="table">
      <div class="col-lg-12 sl-pagebody m-auto">
        <h1 class="p-2 tx-center">Create New Coupon</h1>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

               <div class="row mt-5">
                  <div class="col-sm-10 m-auto">
                           <?php if(isset($success_msg)){
                                echo '<div class="alert alert-success">'.$success_msg.'</div>';
                             }
                            ?>
                     <div class="row">
                        <div class="col-sm-3 text-left text-dark h6 mt-2">
                           Coupon Name :
                        </div>
                        <div class="col-sm-6">
                           <input type="text" class="form-control" placeholder="coupon name" name="coupon_name" required>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-sm-3 text-left text-dark h6 mt-2">
                           Coupon Code :
                        </div>
                        <div class="col-sm-6">
                           <input type="text" placeholder="coupon code" class="form-control" name="coupon_code" required>
                            <?php if(isset($err_msg_1)){
                                echo '<p class="text-danger">&nbsp&nbsp'.$err_msg_1.'</p>';
                             }
                            ?>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-sm-3 text-left text-dark h6 mt-2">Coupon Type :</div>
                        <div class="col-sm-6">
                              <select class="form-control" name="coupon_type" required>
                                 <option value="Fixed" selected>Fixed (BDT)</option>
                                 <option value="Percentage">Percentage ( % )</option>
                              </select>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-sm-3 text-left text-dark h6 mt-2">Coupon Discount :</div>
                        <div class="col-sm-6">
                           <input type="number" class="form-control" placeholder="coupon discount (BDT / %)" name="coupon_discount" required>
                           <?php if(isset($err_msg_2)){
                                echo '<p class="text-danger">&nbsp&nbsp'.$err_msg_2.'</p>';
                             }
                            ?>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-sm-3 text-left text-dark h6 mt-2">Coupon Expiry Date : </div>
                        <div class="col-sm-6">
                           <input type="datetime-local" value="expire_date" class="form-control" name="expire_date" required>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-sm-3 text-left text-dark h6 mt-2">
                           User Limit :
                        </div>
                        <div class="col-sm-6">
                           <input type="number" class="form-control" placeholder="How to maximum users use this coupon" name="user_limit" required>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-sm-3 text-left text-dark h6 mt-2">
                           Based on (If needed) :
                        </div>
                        <div class="col-sm-6">
                           <select class="form-control" name="based_on" id="Discount" onchange="selectDiscount()" required>
                                 <option value="Everyone" selected>Discount For Everyone</option>
                                 <?php
                                      $select_category = "SELECT * FROM categories";
                                      $categories = mysqli_query($con, $select_category);
                                      foreach($categories as $category){
                                    ?>
                                      <option value="<?=$category['id']?>">Category: <?=$category['category_name']?> </option>
                                    <?php } ?>
                                    
                              </select>
                        </div>
                     </div>

                  <script type="text/javascript">
                    function selectDiscount(){
                        
                    }
                    
                  </script>
                     
                     
                     <br>
                     <div class="row">
                        <div class="col-sm-3 text-left text-dark h6 mt-1">
                           Allow free shipping :
                        </div>
                        <div class="col-sm-6">
                           <input class="ml-1 form-check-input" type="checkbox" id="exampleCheck1" value="1" name="free_shipping">
                           <p class="ml-4 text-info">Who wants to give free shipping to those who buy using this coupon? Fill in the checkbox if you want to give free shipping. </p>
                        </div>
                     </div>
                     <div class="row mb-2">
                      <div class="col-sm-3 text-left text-dark h6 mt-1">&nbsp</div>
                      <div class="col-sm-6">
                         <a  class="btn bg-danger text-white mt-2" href="coupon-list"> Cancel </a>
                         <button class="ml-3 btn btn-success text-white mt-2" type="submit" name="submit">Save Copon</button>
                      </div>
                   </div>
                  </div>
               </div>
 
         </form>
      </div>
      <!-- sl-pagebody -->
   </table>
</div>
<!-- sl-mainpanel -->      
<!-- ########## END: MAIN PANEL ########## -->
<?php
   require_once 'footer.php';
   ?>