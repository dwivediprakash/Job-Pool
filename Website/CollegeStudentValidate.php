<?php
include('DbConnection.php');
$enroll=$_POST['enroll'];
$query='Update student set status="Valid" where enrollment="'.$enroll.'"';
$res=mysqli_query($con,$query);
$query='Delete from studentvalidaterequest where enrollment="'.$enroll.'"';
$res=mysqli_query($con,$query);
header('location:CollegeHome.php');

?>