<?php
session_start();
$pid=$_POST['pid'];
$enroll=$_POST['enrollment'];
include('DbConnection.php');
$query='insert into applicants values ('.$pid.',"'.$enroll.'")';
mysqli_query($con,$query);
header('location:StudentHome.php');
?>