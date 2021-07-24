<?php
include 'header.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item">Our Coupon list</a>
        <a class="btn btn-success ml-4" href="add-coupon">Create New Coupon</a>
      </nav>
        <div class="col-lg-12 sl-pagebody m-auto">
            <div class="card-body">
                <div class="col-lg-12 m-auto">
                    <table class="table table-bordered">
                        <thead class="text-center bg-info">
                            <tr>
                            <th class="text-center" scope="col">Sr.</th>
                            <th class="text-center" scope="col">Coupon</th>
                            <th class="text-center" scope="col">Code</th>
                            <th class="text-center" scope="col">User limit</th>
                            <th class="text-center" scope="col">Status</th>
                            <th class="text-center" scope="col">Discount</th>
                            <th class="text-center" scope="col">Experie At</th>
                            <th class="text-center" scope="col">Created At</th>
                            <th class="text-center" scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                $select_query = "SELECT * FROM coupon ORDER BY id DESC";
                                $coupon_info = mysqli_query($con, $select_query);
                                $serial_no = 1;
                                foreach($coupon_info as $coupon):
                                    ?>
                                    <tr>
                                        <th class="text-center"><?=  $serial_no ++ ?></th>
                                        <td><?= $coupon['coupon_name'] ?></td>
                                        <td class="text-warning"><?= $coupon['coupon_code'] ?></td>
                                        <td><?= $coupon['user_limit'] ?></td>
                                        <td><?= $coupon['already_used'] ?></td>
                                        <td><?= $coupon['coupon_discount'] ?> 
                                        <?php 
                                            if($coupon['coupon_type'] == 'Fixed'){
                                                echo '৳';
                                            }else{
                                                echo '%';
                                            }
                                        ?>
                                        </td>
                                        <td><?= $coupon['experied_date'] ?></td>
                                        <td><?= $coupon['created_at'] ?></td>
                                        <td>
                                            <!--<a class="btn btn-sm btn-outline-info mt-2" href=""><i class="fa fa-pencil tx-24"></i></a>-->
                                            <button id="delete_btn<?= $coupon['id'] ?>" class="btn btn-sm btn-outline-danger mt-2"><i class="fa fa-trash-o tx-24"></i></button>
                                        </td>
                                    </tr>
                                        <!-- before delete sweetalert code start -->
                                        <script>
                                        $(document).ready(function(){
                                            $('#delete_btn<?= $coupon['id'] ?>').click(function(){
                                            
                                            Swal.fire({
                                                title: 'Are you sure?',
                                                text: "Coupon will be deleted permenantly!",
                                                icon: 'question',
                                                showCancelButton: true,
                                                confirmButtonColor: '#d33',
                                                cancelButtonColor: '#3085d6',
                                                confirmButtonText: 'Yes, delete it'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    if(window.location.href = "remove-coupon?id=<?= $coupon['id'] ?>"){
                                                    Swal.fire({
                                                        position: 'top-end',
                                                        icon: 'success',
                                                        title: 'This Coupon has been deleted!',
                                                        showConfirmButton: false,
                                                        timer: 2000,
                                                    })
                                                    }
                                                }
                                            });

                                            });
                                        });
                                        </script>
                                        <!-- before delete sweetalert code End -->
                                    <?php
                                endforeach;
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-outline-success" href="add-coupon">Create New Coupon</a>
            </div>
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->

<?php
  require_once 'footer.php';
?>