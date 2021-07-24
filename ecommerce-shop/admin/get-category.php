<?php
require_once '../connection.inc.php';

$get_category = $_GET['cid'];
$id_select_query = "SELECT id FROM categories WHERE category_name = '$get_category'";
$category_id = mysqli_fetch_assoc(mysqli_query($con, $id_select_query))['id'];

$select_query = "SELECT id, sub_category_name FROM sub_categories WHERE category_id = '$category_id'";
$sub_category = mysqli_query($con, $select_query);


echo '<label class="text-secondary h6" for="exampleInputEmail1">Select Sub Category : </label><br><select class="form-control" name="sub_category_name">';
echo '<option>-- Select Sub-Category --</option>';
foreach($sub_category as $row){
	echo '<option value="'. $row['id'].'">'.$row['sub_category_name'].'</option>';
}
echo '</select>';
?>