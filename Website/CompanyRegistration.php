<?php
session_start();
include('DbConnection.php');
$id=$_POST['kid'];
$name=$_POST['kname'];
$address=$_POST['kaddress'];
$phone=$_POST['kphone'];
$email=$_POST['kemail'];
$web=$_POST['web'];
$username=$_POST['username'];
$password=$_POST['password'];
$image=$_FILES['image'];
$query='insert into company values ('.$id.',"'.$name.'","'.$address.'","'.$phone.'","'.$email.'","'.$web.'","'.$username.'","'.$password.'","'.$image['name'].'")';
$res=mysqli_query($con,$query);
echo $res;
move_uploaded_file($image['tmp_name'],'Company/'.$image['name']);
$_SESSION['message']='Company Registration Successfull';
header('location:index.php');
?>