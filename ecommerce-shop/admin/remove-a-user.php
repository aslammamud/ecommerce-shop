<?php
require '../connection.inc.php';  
require '../functions.inc.php';  

$user_id = $_GET['id'];

$delete = "DELETE FROM user WHERE user_id = '$user_id'";
$result =  mysqli_query($con, $delete);

echo reloader('all-user-list.php',0);
die();
exit();

?>