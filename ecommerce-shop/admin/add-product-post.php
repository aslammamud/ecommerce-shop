<?php
include '../connection.inc.php';
include '../functions.inc.php';
    $main_category_name = $_POST['category_name'];

    $select_query = "SELECT id FROM categories WHERE category_name = '$main_category_name'";
    $category_id = mysqli_fetch_assoc(mysqli_query($con, $select_query))['id'];

    $sub_category_name = $_POST['sub_category_name'];

    // $sub_sub_category_name = $_POST['sub_sub_category_name'];
    $product_title = $_POST['product_name'];
    $product_short_description = mysqli_real_escape_string($con,$_POST['product_short_description']);
    $product_long_description = mysqli_real_escape_string($con,$_POST['product_long_description']);

    // Thumbnail image uploaded start
    $product_image = ($_FILES['product_thumbnail_image']['name']);
    $product_image_after_explode = explode(".", $product_image);
    $product_image_after_explode_extention = end($product_image_after_explode);
    $product_thumbnail_image = time() . "-" . rand(111, 999) . "." . $product_image_after_explode_extention;

    $product_image_tmp_location = ($_FILES['product_thumbnail_image']['tmp_name']);
    $product_image_new_location = "images/product_image/" . $product_thumbnail_image;
    move_uploaded_file($product_image_tmp_location, $product_image_new_location);
    // Thumbnail image uploaded code End

    // Featured image uploaded start
    $product_image = ($_FILES['product_featured_image']['name']);
    $product_image_after_explode = explode(".", $product_image);
    $feature_image_extention = end($product_image_after_explode);
    $product_featured_image = time() . "-" . rand(111, 999) . "." . $feature_image_extention;

    $product_image_tmp_location = ($_FILES['product_featured_image']['tmp_name']);
    $product_image_new_location = "images/product_image/" . $product_featured_image;
    move_uploaded_file($product_image_tmp_location, $product_image_new_location);
    // Featured image uploaded code End

    // Featured image TWO uploaded start
    $feature_image_two = ($_FILES['product_featured_image_two']['name']);
    $feature_image_two_explode = explode(".", $feature_image_two);
    $feature_image_two_extention = end($feature_image_two_explode);
    $feature_image_two = time() . "-" . rand(111, 999) . "." . $feature_image_two_extention;

    $feature_image_two_tmp_location = ($_FILES['product_featured_image_two']['tmp_name']);
    $feature_image_two_new_location = "images/product_image/" . $feature_image_two;
    move_uploaded_file($feature_image_two_tmp_location, $feature_image_two_new_location);
    // Featured image Two uploaded code End
    
    // Featured image three uploaded start
    $feature_image_three = ($_FILES['product_featured_image_three']['name']);
    $feature_image_three_explode = explode(".", $feature_image_three);
    $feature_image_three_extention = end($feature_image_three_explode);
    $feature_image_three = time() . "-" . rand(111, 999) . "." . $feature_image_three_extention;

    $feature_image_three_tmp_location = ($_FILES['product_featured_image_three']['tmp_name']);
    $feature_image_three_new_location = "images/product_image/" . $feature_image_three;
    move_uploaded_file($feature_image_three_tmp_location, $feature_image_three_new_location);
    // Featured image Two uploaded code End

    $regular_price = $_POST['product_regular_price'];
    $meta_title = $_POST['product_meta_title'];
    $meta_description = mysqli_real_escape_string($con,$_POST['product_meta_description']);
    $video_link = $_POST['product_video_link'];
    $product_stock = $_POST['product_stock'];
    $product_brand = $_POST['product_brand'];
    $sale_price = $_POST['product_sale_price'];
    $product_code = substr( "STY" . time() . "LI" . rand(1, 999) . "SH",0,8);
    $product_tag = $_POST['product_tag'];

    $product_insert_query = "INSERT INTO products (category_id, sub_category_id, product_name, product_thumbnail_image, product_featured_image, product_short_description, product_long_description, product_tag, product_meta_title, product_meta_description, product_video_link, product_regular_price, product_sale_price, product_stock, product_code, product_brand, product_featured_image_two, product_featured_image_three, product_status) VALUES ('$category_id', '$sub_category_name', '$product_title', '$product_thumbnail_image', '$product_featured_image', '$product_short_description', '$product_long_description', '$product_tag', '$meta_title', '$meta_description', '$video_link', '$regular_price', '$sale_price', '$product_stock', '$product_code', '$product_brand', '$feature_image_two', '$feature_image_three', '1')";
    $product_insert_result = mysqli_query($con, $product_insert_query);
    $_SESSION['product_upload_status'] = "This Product successfully uploaded!";
    echo  reloader('add-product',0);
	//header('location: add-product.php');
?>