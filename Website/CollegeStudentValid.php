<?php
include('CollegeHeader.php');
if(isset($_SESSION['username'])){
    include('DbConnection.php');
    $enroll=$_POST['enroll'];
$query='Select * from student where enrollment="'.$enroll.'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
?>
<br/><br/>
<h1 style="text-align:center;color:white;"><?php echo $arr['sname']; ?>'s Profile</h1>
<br/>
<div class="container">
<div class="row" style="border:5px solid white;padding:15px;font-weight:bold;font-size:20px;">
<div class="col-md-4"><br/>
<img style="border:2px solid white;" src="Students/Profile/<?php echo $arr['photo']; ?>" width="100%"></br></br>
<li class="list-group-item"><span style="color:red;">Enrollment no.</span> : <span style="color:blue"><?php echo $arr['enrollment']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Name</span> : <span style="color:blue"><?php echo $arr['sname']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Gender</span> : <span style="color:blue"><?php echo $arr['gender']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Date Of Birth</span> : <span style="color:blue"><?php echo $arr['dob']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">College Name</span> : <span style="color:blue"><?php echo $arr['collegeName']; ?></span></li><br/>

</div>
<div class="col-md-8">
<ul class="list-group list-group-flush">
<li class="list-group-item"><span style="color:red;">Address</span> : <span style="color:blue"><?php echo $arr['address']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Email</span> : <span style="color:blue"><?php echo $arr['semail']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Contact Number</span> : <span style="color:blue"><?php echo $arr['phone']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">College Id</span> : <span style="color:blue"><?php echo $arr['collegeid']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Branch</span> : <span style="color:blue"><?php echo $arr['Branch']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">10th Percentage</span> : <span style="color:blue"><?php echo $arr['tenthMarks']; ?>%</span></li><br/>
<li class="list-group-item"><span style="color:red;">12th Percentage</span> : <span style="color:blue"><?php echo $arr['twelethMark']; ?>%</span></li><br/>
<li class="list-group-item"><span style="color:red;">Average Cgpa</span> : <span style="color:blue"><?php echo $arr['AvgCGPA']; ?> cgpa</span></li><br/>
<li class="list-group-item"><span style="color:red;">Passing Year</span> : <span style="color:blue"><?php echo $arr['passingYear']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Experience</span> : <span style="color:blue"><?php echo $arr['Exp']; ?> year</span></li><br/>
<li class="list-group-item"><span style="color:red;">Resume</span> : <a href="Students/Resume/<?php echo $arr['pdf']; ?>" style="color:blue"><?php echo $arr['pdf']; ?></a></li><br/>

<form method="post" action="CollegeStudentValidate.php">
<input type="text" value="<?php echo $arr['enrollment'] ?>" name="enroll" hidden>
<button style="float:right;padding:8px;font-size:14px;" type="submit" class="btn btn-success">Validate Request</button>
</form>

<form method="post" action="CollegeStudentReject.php">
<input type="text" value="<?php echo $arr['enrollment'] ?>" name="enroll" hidden>
<button style="float:right;padding:8px;font-size:14px;" type="submit" class="btn btn-danger">Reject Request</button>
</form>

<ul>
</div>
</div>
</div>
<br/><br/>
<?php
}
else{
    $_SESSION['message']='You have been Logged Out, Login Again';
    header('location:index.php');
}
?>