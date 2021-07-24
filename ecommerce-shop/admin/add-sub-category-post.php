<?php
require_once '../connection.inc.php';

$sub_category_parent = $_POST['parent_category'];
$sub_category_description = $_POST['sub_category_description'];


// This two line code for send database main category id 
$main_category_id_selecet_query = "SELECT id FROM categories WHERE category_name = '$sub_category_parent'";
$main_category_id_from_db = mysqli_fetch_assoc(mysqli_query($con, $main_category_id_selecet_query))['id'];

$sub_category_name = $_POST['sub_category_name'];
// image uploaded code start
$sub_category_image = ($_FILES['sub_category_image']['name']);

$sub_category_image_after_explode = explode(".", $sub_category_image);
$sub_category_image_after_explode_extention = end($sub_category_image_after_explode);
$sub_category_image_new_name = time() . "-" . rand(111, 999) . "." . $sub_category_image_after_explode_extention;

$sub_category_image_tmp_location = ($_FILES['sub_category_image']['tmp_name']);
$sub_category_image_new_location = "images/sub_category_image/" . $sub_category_image_new_name;
move_uploaded_file($sub_category_image_tmp_location, $sub_category_image_new_location);
// image uploaded code End

$insert_query = "INSERT INTO sub_categories(category_id, sub_category_name, sub_category_image, sub_category_description) VALUES ('$main_category_id_from_db', '$sub_category_name', '$sub_category_image_new_name', '$sub_category_description')";
$insert_query_from_db = mysqli_query($con, $insert_query);

$_SESSION['add_sub_category_status'] = "Sub Category Added Successfully!";
header('location: add-sub-category.php');

?>