<?php 

$image_upload = ($_FILES['image']['name']);
$image_after_explode = explode(".", $image_upload);
$image_after_explode_extention = end($image_after_explode);
$image_new_name = uniqid() . "." . $image_after_explode_extention;

$image_tmp_location = ($_FILES['image']['tmp_name']);
$image_new_location = "images/new-page/". $image_new_name;
move_uploaded_file($image_tmp_location, $image_new_location);

echo 'images/new-page/'.$image_new_name;  
?>