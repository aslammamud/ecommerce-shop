<?php
include '../connection.inc.php';

    $product_id = $_POST['product_id'];
    $main_category_name = $_POST['category_name'];
    $select_query = "SELECT id FROM categories WHERE category_name = '$main_category_name'";
    $category_id = mysqli_fetch_assoc(mysqli_query($con, $select_query))['id'];

    if($_FILES['product_thumbnail_image']['name']){
        // Thumbnail image uploaded start
        $product_image = ($_FILES['product_thumbnail_image']['name']);
        $product_image_after_explode = explode(".", $product_image);
        $product_image_after_explode_extention = end($product_image_after_explode);
        $product_thumbnail_image = time() . "-" . rand(111, 999) . "." . $product_image_after_explode_extention;

        $product_image_tmp_location = ($_FILES['product_thumbnail_image']['tmp_name']);
        $product_image_new_location = "images/product_image/" . $product_thumbnail_image;
        // old image deleted code
        $old_thumbnail_image_query = "SELECT product_thumbnail_image FROM products WHERE id = '$product_id'";
        $old_thumbnail_image_name = mysqli_fetch_assoc(mysqli_query($con, $old_thumbnail_image_query))['product_thumbnail_image'];
        unlink("images/product_image/" . $old_thumbnail_image_name);

        move_uploaded_file($product_image_tmp_location, $product_image_new_location);
        // Thumbnail image uploaded code End
        $product_update_query = "UPDATE products SET product_thumbnail_image = '$product_thumbnail_image' WHERE id = '$product_id'";
        $product_insert_result = mysqli_query($con, $product_update_query);
    }
    
    if($_FILES['product_featured_image']['name']){
        // Featured image uploaded start
        $product_image = ($_FILES['product_featured_image']['name']);
        $product_image_after_explode = explode(".", $product_image);
        $product_image_after_explode_extention = end($product_image_after_explode);
        $product_featured_image = time() . "-" . rand(111, 999) . "." . $product_image_after_explode_extention;

        $product_image_tmp_location = ($_FILES['product_featured_image']['tmp_name']);
        $product_image_new_location = "images/product_image/" . $product_featured_image;

        // old image deleted code
        $old_featured_image_query = "SELECT product_featured_image FROM products WHERE id = '$product_id'";
        $old_featured_image_name = mysqli_fetch_assoc(mysqli_query($con, $old_featured_image_query))['product_featured_image'];
        unlink("images/product_image/" . $old_featured_image_name);

        move_uploaded_file($product_image_tmp_location, $product_image_new_location);
        // Featured image uploaded code End
        $product_update_query = "UPDATE products SET product_featured_image = '$product_featured_image' WHERE id = '$product_id'";
        $product_insert_result = mysqli_query($con, $product_update_query);
    }

    $sub_category_name = "";
    // $sub_sub_category_name = $_POST['sub_sub_category_name'];
    $product_title = $_POST['product_name'];
    $product_short_description = $_POST['product_short_description'];
    $product_long_description = $_POST['product_long_description'];
    $regular_price = $_POST['product_regular_price'];
    $meta_title = $_POST['product_meta_title'];
    $meta_description = $_POST['product_meta_description'];
    $video_link = $_POST['product_video_link'];
    $product_stock = $_POST['product_stock'];
    $product_brand = $_POST['product_brand'];
    $sale_price = $_POST['product_sale_price'];
    $product_code = "STY" . time() . "LI" . rand(111, 999) . "SH";
    $product_tag = $_POST['product_tag'];

    $product_update_query = "UPDATE products SET category_id = '$category_id', sub_category_id = '', product_name = '$product_title', product_short_description = '$product_short_description', product_long_description = '$product_long_description', product_tag = '$product_tag', product_meta_title = '$meta_title', product_meta_description = '$meta_description', product_video_link = '$video_link', product_regular_price = '$regular_price', product_sale_price = '$sale_price', product_stock = '$product_stock', product_code = '$product_code', product_brand = '$product_brand' WHERE id = '$product_id'";

    $product_insert_result = mysqli_query($con, $product_update_query);
    $_SESSION['product_edit_status'] = "This Product successfully Edited!";
    header('location: /admin/products.php');

?>