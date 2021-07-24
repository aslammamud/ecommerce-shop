<?php
require 'connection.inc.php';  
require 'functions.inc.php';  

if(isset($_POST['del_item_set'])){
$wish_id = $_POST['id'];

$delete = "DELETE FROM wishlist WHERE id = '$wish_id'";
$result =  mysqli_query($con, $delete);  
}

?>