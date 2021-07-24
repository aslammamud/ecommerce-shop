<?php
include 'header.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item">Our guest message</a>
      </nav>
        <div class="col-lg-12 sl-pagebody m-auto">
            <div class="card-body">
                <div class="col-lg-12 m-auto">
                    <table class="table table-bordered">
                        <thead class="text-center bg-info">
                            <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Guest Name</th>
                            <th scope="col">Guest Phone</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Message</th>
                            <th scope="col">Send Answer</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                $select_query = "SELECT * FROM guest_info ORDER BY id DESC";
                                $guest_info = mysqli_query($con, $select_query);
                                $serial_no = 1;
                                foreach($guest_info as $guest):
                                    ?>
                                    <tr>
                                        <th><?=  $serial_no ++ ?></th>
                                        <td><?= $guest['name'] ?></td>
                                        <td><?= $guest['phone'] ?></td>
                                        <td><?= $guest['email'] ?></td>
                                        <td><?= $guest['message'] ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-outline-info mt-2" target="blank" href="https://gmail.com<?= $guest['email'] ?>"><i class="fa fa-paper-plane tx-24"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                endforeach;
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->

<?php
  require_once 'footer.php';
?>