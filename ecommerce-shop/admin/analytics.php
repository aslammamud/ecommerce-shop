<?php
include 'header.php';
?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="analytics.php">Analytics</a>
      </nav>
      <div class="sl-pagebody m-auto">
        <div class="market-updates">
          <div class="row">
            <div class="col-md-12 d-flex">
            
              <div class="col-md-4">
                <label class="text-dark h6" for="">Total Registered User</label>
                <div class="market-update-block clr-block-1">
                  <div class="col-md-8 market-update-left">
                    <h3>83</h3>
                    <h4>Registered User</h4>
                    <p>Other hand, we denounce</p>
                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>

              <div class="col-md-4">
                <label class="text-dark h6" for="">Today Visitors</label>
                <div class="market-update-block clr-block-2">
                <div class="col-md-8 market-update-left">
                  <h3>135</h3>
                  <h4>Daily Visitors</h4>
                  <p>Other hand, we denounce</p>
                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-eye"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
              
              <div class="col-md-4">
                <label class="text-dark h6" for="">Total Page Views</label>
                <div class="market-update-block clr-block-3">
                  <div class="col-md-8 market-update-left">
                    <h3>23</h3>
                    <h4>New Message</h4>
                    <p>Other hand, we denounce</p>
                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-envelope-o"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        
        <div class="row m-auto">
          <div class="col-xl-10 mt-4">
            <div class="card pd-20 pd-sm-25 mg-t-20">
              <h6 class="card-body-title tx-13">Sales Analytics</h6>
              <!-- This input field tottaly unused,, this use for svg remove -->
              <input class="border border-0" type="hide" id="rickshaw2"></input>
              <canvas id="chartBar4" height="300"></canvas>
            </div><!-- card -->
          </div><!-- col-8 -->

            <!-- <div class="col-lg-4 mt-4">
              <div class="card mt-4">
                <div class="card-header bg-secondary">
                  <b class="fs-15 text-white">Sales Ammount</b>
                    </div>
                    <div class="card-body pb-0">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="w-50 fw-600">Subtotal
                                    </td><td class="text-right">
                                        <span class="strong-600">$330.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Shipping
                                    </td><td class="text-right">
                                        <span class="text-italic">$0.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Tax</td>
                                    <td class="text-right">
                                        <span class="text-italic">$10.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Coupon
                                    </td><td class="text-right">
                                        <span class="text-italic">$0.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Total
                                    </td><td class="text-right">
                                        <strong>
                                            <span>$340.00
                                            </span>
                                        </strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

          </div>
      
      
        <div class="row mt-4">
          <div class="col-md-12">
            <div class="row mt-4">
              <div class="col-md-4">
                <table class="table table-bordered">
                  <thead class="bg-info">
                    <label class="text-dark h6" for="">Today Registered Member</label>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Eamil-address</th>
                      <th scope="col">Phone No</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark Due</td>
                      <td>mark@gamil.com</td>
                      <td>01334534534</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jone Due</td>
                      <td>jone@gamil.com</td>
                      <td>01923434534</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Alan mask</td>
                      <td>alan@gamil.com</td>
                      <td>0133423434</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="col-md-4">
                <table class="table table-bordered">
                  <thead class="bg-info">
                    <label class="text-dark h6" for="">This Month Registered Member</label>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Eamil-address</th>
                      <th scope="col">Phone No</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark Due</td>
                      <td>mark@gamil.com</td>
                      <td>01334534534</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jone Due</td>
                      <td>jone@gamil.com</td>
                      <td>01923434534</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Laila sultana</td>
                      <td>laila@gamil.com</td>
                      <td>0133423434</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Margin alone</td>
                      <td>alan@gamil.com</td>
                      <td>0133423434</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="col-md-4">
                <table class="table aiz-table mb-0 footable footable-1 breakpoint-lg table-bordered" style="">
                  <label class="text-dark h6" for="">Monthly Pageviews</label>
                    <tbody>
                      <tr class="bg-info">
                        <th class="text-white">Month</th>
                        <th class="text-white">Viewer</th>
                        <th class="text-white">Order</th>
                      </tr>
                      <tr>
                        <td class="footable-first-visible text-header h6" style="display: table-cell;">January:</td>
                        <td class="footable-last-visible text-center" style="display: table-cell;">4357</td>
                        <td class="footable-last-visible text-center" style="display: table-cell;">76</td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible text-header h6" style="display: table-cell;">February:</td>
                        <td class="footable-last-visible text-center" style="display: table-cell;">23424</td>
                        <td class="footable-last-visible text-center" style="display: table-cell;">56</td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible text-header h6" style="display: table-cell;">March:</td>
                        <td class="footable-last-visible text-center" style="display: table-cell;">2434</td>
                        <td class="footable-last-visible text-center" style="display: table-cell;">54</td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible text-header h6" style="display: table-cell;">April:</td>
                        <td class="footable-last-visible text-center" style="display: table-cell;">4564</td>
                        <td class="footable-last-visible text-center" style="display: table-cell;">56</td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible text-header h6" style="display: table-cell;">May:</td>
                        <td class="footable-last-visible text-center" style="display: table-cell;">4564</td>
                        <td class="footable-last-visible text-center" style="display: table-cell;">47</td>
                      </tr>
                      <tr>
                        <td class="footable-first-visible text-header h6" style="display: table-cell;">June:</td>
                        <td class="footable-last-visible text-center" style="display: table-cell;">2344</td>
                        <td class="footable-last-visible text-center" style="display: table-cell;">32</td>
                      </tr>
                      
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->

<?php
  require_once 'footer.php';
?>
            
