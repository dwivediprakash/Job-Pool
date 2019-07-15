<?php
session_start();
include('DbConnection.php');
$query='select kid from company where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
$title=$_POST['title'];
$spec=$_POST['specification'];
$vacancy=$_POST['noofvac'];
$package=$_POST['package'];
$expdate=$_POST['expdate'];
$grade=$_POST['grade'];
$cgpa=$_POST['cgpa'];
$back=$_POST['backlog'];
$drop=$_POST['drop'];
$openoff=$_POST['openoff'];
$clgname=$_POST['clgname'];
$query='insert into companyposts(company_id,title,specification,vacancies,package,ExpDated,gradeOfClg,MinCGPA,Backlog,MaxDrop,open_off,clgname) values ('.$arr['kid'].',"'.$title.'","'.$spec.'",'.$vacancy.','.$package.',"'.$expdate.'","'.$grade.'",'.$cgpa.','.$back.','.$drop.',"'.$openoff.'","'.$clgname.'")';
mysqli_query($con,$query);
header('location:CompanyHome.php');
?>