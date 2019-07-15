<?php
session_start();
unset($_SESSION['username']);
$_SESSION['message']='Logged Out';
header('location:index.php');
?>