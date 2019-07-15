<?php
session_start();
$name=$_POST['name'];
$feedback=$_POST['feedback'];
include('DbConnection.php');
$query='insert into feedback values ("'.$name.'","'.$feedback.'")';
echo $query;
mysqli_query($con,$query);
$_SESSION['message']='Your feedback has been posted';
header('location:index.php');
?>