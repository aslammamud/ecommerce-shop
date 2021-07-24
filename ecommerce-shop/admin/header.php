<?php
include '../connection.inc.php';
include '../functions.inc.php';

if(!isset($_SESSION['eb_lgn']) AND $_SESSION['eb_lgn'] == false){   
  echo reloader('../',0);
  die();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    
    <!-- meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content=""> 
    <meta name="category" content=""> 
    <meta name="coverage" content=""> 
    <meta name="DC.title" lang="en" content=""> 
    
    <meta property="og:type" content=""> 
    <meta property="og:url" content=""> 
    <meta property="og:site_name" content=""> 
    <meta property="og:title" content=""> 
    <meta property="og:image" content=""> 
    <meta property="og:description" content=""> 
    <meta property="fb:page_id" content="">     
    <meta property="fb:app_id" content=""> 
    <meta property="fb:pages" content="" --> 
    
    <title><?php if(isset($dynamic_title)){echo $dynamic_title;}else{echo 'Admin Panel | Stylishvalley';} ?></title>
	
	<link rel="icon" href="images/site-icon.jpg" type="image/gif" sizes="16x16">
    <!-- vendor css -->
    <link href="lib-admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib-admin/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib-admin/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib-admin/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="lib-admin/morris.js/morris.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
    <link rel="stylesheet" href="css/custom-admin.css">
    
    <!-- jquery CND version:3.6.0 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Sweet alert js cdn -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
  </head>

  <body>
  
<?php
include 'nav.php';
?>