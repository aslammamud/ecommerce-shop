<?php
	
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!='')
	return mysqli_real_escape_string($con,$str);
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function reloader($link = '' ,$timer= 1000){ 
	global $actual_link;
	if($link == ''){$link = $actual_link;}
	return '<script>setTimeout(function(){window.location = "'.$link.'"},'.$timer.');</script>';
}


function reverse_mysqli_real_escape_string($str) {
    return strtr($str, [
        '\0'   => "\x00",
        '\n'   => "\n",
        '\r'   => "\r",
        '\\\\' => "\\",
        "\'"   => "'",
        '\"'   => '"',
        '\Z' => "\x1a"
    ]);
 }
 
?>