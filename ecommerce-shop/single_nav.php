<?php
  $select_query = "SELECT * FROM categories ORDER BY id ASC LIMIT 10";
  $categories_result = mysqli_query($con, $select_query);
?>

<nav>
    <div class="container">
      <div class="row">
        <div class="mm-toggle-wrap">
          <div class="mm-toggle"><i class="fa fa-align-justify"></i> </div>
          <span class="mm-label">All Categories</span> </div>
        <div class="col-md-3 col-sm-3 mega-container hidden-xs">
          <div class="navleft-container">
            <div class="mega-menu-title">
              <h3><span>All Categories</span></h3>
            </div>
            
            <!-- Shop by category -->
          <?php
            if(isset($page) && $page=='single'){
              echo '<div class="mega-menu-category" style="display: none;">';
            }else{
              echo '<div class="mega-menu-category">';
            }				
            ?>            
              <ul class="nav">

                <?php
                foreach($categories_result as $category):
                ?>
                  <li><a href="category_wiseshop.php?cid=<?=$category['id']?>"><?=$category['category_name']?></a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          <div class="col-md-4 col-sm-6">
                            <h3><?=$category['category_name']?></h3>
                              <ul class="nav">
                                <?php
                                  $category_id = $category['id'];
                                  $select_query = "SELECT * FROM sub_categories WHERE category_id = '$category_id'";
                                  $subcategories_name = mysqli_query($con, $select_query);
                                  foreach($subcategories_name as $subcategory){
                                    $sub_category_id = $subcategory['id'];
                                  ?>
                                    <li><a href="subcategory_wiseshop.php?scid=<?=$subcategory['id']?>"><?=$subcategory['sub_category_name']?></a></li>
                                  <?php
                                }
                                ?>
                              </ul>
                            <br>
                          </div>

                        </div>
                      </div>
                    </div>
                  </li>
                <?php
                endforeach
                ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-sm-9 jtv-megamenu">
          <div class="mtmegamenu">
            <ul class="hidden-xs">
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="special_offer">
                  <div class="title title_font"><span class="title-text">Special Offer</span></div>
                  </a></div>
              </li>
              
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="shop">
                  <div class="title title_font"><span class="title-text">Shop</span></div>
                  </a></div>
              </li>

              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="faq_page">
                  <div class="title title_font"><span class="title-text">FAQ</span></div>
                  </a></div>
              </li>

              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="refund_policy">
                  <div class="title title_font"><span class="title-text">Refund Policy</span></div>
                  </a></div>
              </li>
              
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="about_us">
                  <div class="title title_font"><span class="title-text">About Us</span></div>
                  </a></div>
              </li>
              
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="contact_us">
                  <div class="title title_font"><span class="title-text">Contact Us</span></div>
                  </a></div>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  