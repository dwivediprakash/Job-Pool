<?php
session_start();
include('DbConnection.php');
$cid=$_POST['cid'];
$cname=$_POST['cname'];
$caddress=$_POST['address'];
$cphone=$_POST['cno'];
$cemail=$_POST['cemail'];
$grade=$_POST['cgrade'];
$univ=$_POST['cuniv'];
$web=$_POST['cwebsite'];
$username=$_POST['username'];
$password=$_POST['password'];
$photo=$_FILES['photo'];
$query='insert into college values ('.$cid.',"'.$cname.'","'.$caddress.'","'.$cphone.'","'.$cemail.'","'.$grade.'","'.$univ.'","'.$web.'","'.$username.'","'.$password.'","'.$photo['name'].'")';
mysqli_query($con,$query);
$_SESSION['message']='College Registration Successfull';
move_uploaded_file($photo['tmp_name'],"College/".$photo['name']);
header('location:index.php');
?>