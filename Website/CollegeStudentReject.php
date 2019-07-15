<?php
include('DbConnection.php');
$enroll=$_POST['enroll'];
$query='Delete from studentvalidaterequest where enrollment="'.$enroll.'"';
$res=mysqli_query($con,$query);

$query='Delete from student where enrollment="'.$enroll.'"';
$res=mysqli_query($con,$query);
header('location:CollegeHome.php');

?>