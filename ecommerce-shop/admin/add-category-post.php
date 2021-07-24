<?php
include '../connection.inc.php';

$category_name = $_POST['category_name'];
$category_description = $_POST['category_description'];


// image uploaded code start
$category_image = ($_FILES['category_image']['name']);
$category_image_after_explode = explode(".", $category_image);
$category_image_after_explode_extention = end($category_image_after_explode);
$category_image_new_name = time() . "-" . rand(111, 999) . "." . $category_image_after_explode_extention;

$category_image_tmp_location = ($_FILES['category_image']['tmp_name']);
$category_image_new_location = "images/category_image/" . $category_image_new_name;
move_uploaded_file($category_image_tmp_location, $category_image_new_location);
// image uploaded code End 

$insert_query = "INSERT INTO categories (category_name, category_image, category_description) VALUES ('$category_name', '$category_image_new_name', '$category_description')";
$insert_query_from_db = mysqli_query($con, $insert_query);

$_SESSION['add_category_status'] = "Category Added Successfully!";
header('location: add-category.php');

?>