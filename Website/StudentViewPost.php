<?php
include('StudentHeader.php');
if(isset($_SESSION['username'])){
    include('DbConnection.php');
    $pid=$_POST['pid'];
$query='select * from companyposts where post_id='.$pid;
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
?>
<br/><br/>
<div class="container">
<div class="row">
<div class="col-md-10">
<h1 style="color:white;">Job Requirements</h1>
</div>
<div class="col-md-2">
<?php
$query='select enrollment from student where username="'.$_SESSION['username'].'"';
$res1=mysqli_query($con,$query);
$arr1=mysqli_fetch_array($res1);
$enrollment=$arr1['enrollment'];
?>
<form method="post" action="StudentCancelApplication.php">
<input type="number" value="<?php echo $pid; ?>" name="pid" hidden>
<input type="text" value="<?php echo $enrollment; ?>" name="enroll" hidden>
<button type="submit" class="btn btn-danger">Cancel Application</button>
</form>
</div>
</div>
</div>
<br/>
<div class="container">
<div class="row" style="border:5px solid white;padding:15px;font-weight:bold;font-size:20px;">
<div class="col-md-6">
<ul class="list-group list-group-flush">
<li class="list-group-item"><span style="color:red;">Title</span> : <span style="color:blue"><?php echo $arr['title']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Specification</span> : <span style="color:blue"><?php echo $arr['specification']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Vacancies</span> : <span style="color:blue"><?php echo $arr['vacancies']; ?> Students Required</span></li><br/>
<li class="list-group-item"><span style="color:red;">Package</span> : <span style="color:blue"><?php echo $arr['package']; ?> LPA</span></li><br/>
<li class="list-group-item"><span style="color:red;">Last Date</span> : <span style="color:blue"><?php echo $arr['ExpDated']; ?></span></li>
<ul>
<br/>
</div>
<div class="col-md-6">
<ul class="list-group list-group-flush">
<li class="list-group-item"><span style="color:red;">Grade of College</span> : <span style="color:blue"><?php echo $arr['gradeOfClg']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Minimum CGPA</span> : <span style="color:blue"><?php echo $arr['MinCGPA']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Active Backlogs</span> : <span style="color:blue"><?php echo $arr['Backlog']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Gap in Academics</span> : <span style="color:blue"><?php echo $arr['MaxDrop']; ?> years maximum</span></li><br/>
<li class="list-group-item"><span style="color:red;">College Name</span> : <span style="color:blue"><?php echo $arr['clgname']; ?></span></li>
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