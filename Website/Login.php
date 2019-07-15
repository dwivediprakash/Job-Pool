<?php
session_start();
include('DbConnection.php');
$table=$_POST['aswhat'];
$username=$_POST['username'];
$password=$_POST['password'];
if($table=='student')
    $query='select username,password from '.$table.' where username="'.$username.'" and status="Valid"';
else
    $query='select username,password from '.$table.' where username="'.$username.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
if($n==0){
    $_SESSION['message']='Invalid Username or your ID is not active';
    header('location:index.php');
}
else{
    $row=mysqli_fetch_array($res);
    if($row['password']==$password){
        $_SESSION['username']=$username;
        if($table=='student')
            header('location:StudentHome.php');
        else if($table=='college')
            header('location:CollegeHome.php');
        else
            header('location:CompanyHome.php');
    }
    else{
        $_SESSION['message']='Invalid Password';
        header('location:index.php');
    }
}
?>