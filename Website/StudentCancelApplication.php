<?php
session_start();
$pid=$_POST['pid'];
$enroll=$_POST['enroll'];
include('DbConnection.php');
$query='delete from applicants where post_id='.$pid.' and enrollment="'.$enroll.'"';
mysqli_query($con,$query);
header('location:StudentHome.php');
?>