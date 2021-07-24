<?php
session_start();

$_SESSION['eb_lgn'] == false;
unset($_SESSION['eb_lgn']);


header('Location: /');
exit();
?>