<?php
include('CollegeHeader.php');
if(isset($_SESSION['username'])){
include('DbConnection.php');
$query='select cid,cname from college where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
$cname=$arr['cname'];
$cid=$arr['cid'];
$ids='(';
$query='select post_id from companyposts where company_id="'.$cid.'"';
$idres=mysqli_query($con,$query);
$n1=mysqli_num_rows($idres);
$query="select * from companyposts where (clgname='".$cname."' or clgname='All')";
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
?>
<br/><br/>
<div class="container-fluid">
<div class="row">
<div class="col-md-9">
<div style="border:5px solid white;padding:15px;">
<h3 style="text-align:center;color:white;">Job Available For The College</h3>
<?php 
for($i=1;$i<=$n;$i++){
    $arr= mysqli_fetch_array($res);
    $kid=$arr['company_id'];
    $query='select kname from company where kid='.$kid;
    $arr1=mysqli_query($con,$query);
    $arr2=mysqli_fetch_array($arr1);
    $kname=$arr2['kname'];
    ?>
<p data-toggle="collapse" href='#collapseExample<?php echo $arr['post_id']; ?>' role="button" aria-expanded="false" aria-controls="collapseExample">
<ul class="list-group list-group-flush">
<li class="list-group-item">
<div class="spinner-grow text-primary"></div>
<a class="btn btn-light" data-toggle="collapse" href="#collapseExample<?php echo $arr['post_id']; ?>" role="button" aria-expanded="false" aria-controls="collapseExample"
  style="color:blue"><b><?php echo $arr['title']; ?></b></a>&emsp;&emsp;
<span style="color:red;">Specification</span> : <span style="color:blue"><?php echo $arr['specification']; ?></span>&emsp;
<span style="color:red;">Package</span> : <span style="color:blue"><?php echo $arr['package']; ?> LPA</span>&emsp;&emsp;
<span style="color:red;">Last Date</span> : <span style="color:blue"><?php echo $arr['ExpDated']; ?></span>
</li>
</ul>
</p>
<div class="collapse" id="collapseExample<?php echo $arr['post_id']; ?>" style="background:cover;">
  <div class="card card-body">
  <ul class="list-group list-group-flush">
  <li class="list-group-item"><span style="color:red;">Grade of College</span> : <span style="color:blue"><?php echo $arr['gradeOfClg']; ?></span>&emsp;&emsp;&emsp;
  <span style="color:red;">Minimum CGPA</span> : <span style="color:blue"><?php echo $arr['MinCGPA']; ?></span>&emsp;&emsp;&emsp;
  <span style="color:red;">Active Backlogs</span> : <span style="color:blue"><?php echo $arr['Backlog']; ?></span>&emsp;&emsp;&emsp;</br></br>
  <span style="color:red;">Vacancies</span> : <span style="color:blue"><?php echo $arr['vacancies']; ?> Students Required</span><br/><br/>
  <span style="color:red;">Gap in Academics</span> : <span style="color:blue"><?php echo $arr['MaxDrop']; ?> years maximum</span>&emsp;&emsp;&emsp;</br></br>
  <span style="color:red;">Company Name</span> : <span style="color:blue"><?php echo $kname; ?></span>&emsp;&emsp;&emsp;</br></br>
  <span style="color:red;">College Name</span> : <span style="color:blue"><?php echo $arr['clgname']; ?></span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  <form method="post" action="Apply.php">
  <input type="number" value="<?php echo $arr['post_id']; ?>" name="pid" hidden>
  <input type="text" value="<?php echo $enrollment ?>" name="enrollment" hidden>
   </form>
</ul>
</div> 
</div>
<?php
}
?>
</div>
</div>

<div class="col-md-3">
<div  style="border:5px solid white;padding:15px;font-size:18px;">
<h3 style="text-align:center;color:white;padding:15px;">Registered Students</h3><br/>
<ul class="list-group list-group-flush">
<?php
$query='select enrollment from studentvalidaterequest where collegeid ='.$cid;
$res=mysqli_query($con,$query);
$n2=mysqli_num_rows($res);
if($n2>0){
for($j=1;$j<=$n2;$j++){ 
$arr3=mysqli_fetch_array($res);  
?>
<form method="post" action="CollegeStudentValid.php">
<li class="list-group-item"><span style="color:blue;font-weight:bold;"><?php echo $arr3['enrollment']; ?></span>
<input type="text" value="<?php echo $arr3['enrollment'] ?>" name="enroll" hidden>
<button style="float:right;padding:3px;font-size:14px;" type="submit" class="btn btn-success">View Profile</button>
</form>
<?php }
?>
</ul>
<?php }
else{
  echo '<h1 style="color:white;text-align:center;">No Pending Requests</h1>';
}
?>
</div>
</div>
</div>
</div>
<?php 
}
else{
    $_SESSION['message']='You have been Logged Out, Login Again';
    header('location:index.php');
}
?>