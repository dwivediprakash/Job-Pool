<?php
include('StudentHeader.php');
if(isset($_SESSION['username'])){
  include('DbConnection.php');
  $query='select enrollment,collegeName from student where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
$collegeName=$arr['collegeName'];
$enrollment=$arr['enrollment'];
$date=date('Y-m-d');
$ids='(';
$query='select post_id from applicants where enrollment="'.$enrollment.'"';
$idres=mysqli_query($con,$query);
$laterid='';
if($idres){
$laterid=$idres;
$n1=mysqli_num_rows($idres);
for($j=1;$j<=$n1;$j++){
  $idarr=mysqli_fetch_array($idres);
  $ids=$ids.$idarr['post_id'];
  if($j!=$n1)
    $ids=$ids.',';
}
}
$ids=$ids.')';
if($ids=='()')
$query="select * from companyposts where (clgname='".$collegeName."' or clgname='All') and ExpDated>'".$date."'";
else
$query="select * from companyposts where (clgname='".$collegeName."' or clgname='All') and post_id not in ".$ids."and ExpDated>'".$date."'";
$res=mysqli_query($con,$query);
$n= mysqli_num_rows($res);
?>
<br/><br/>
<div class="container-fluid">
<div class="row" style="padding:15px;font-size:18px;">
<div class="col-md-9" >
<div style="border:5px solid white;padding:15px;">
<h3 style="text-align:center;color:white;">Job Available For You</h3>
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
  <form method="post" action="StudentApplication.php">
  <input type="number" value="<?php echo $arr['post_id']; ?>" name="pid" hidden>
  <input type="text" value="<?php echo $enrollment ?>" name="enrollment" hidden>
  <button style="float:right;" type="submit" class="btn btn-success">Apply Here</button></li>
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
<h3 style="text-align:center;color:white;">Applied Jobs</h3><br/>
<ul class="list-group list-group-flush">
<?php
if($ids=='()')
echo "<h1 style='text-align:center;color:white;'>You have not applied for any jobs yet</h1>";
else{
$query='select post_id,title,specification from companyposts where post_id in '.$ids.' and ExpDated>"'.$date.'"';
$res=mysqli_query($con,$query);
$n2=mysqli_num_rows($res);
for($j=1;$j<=$n2;$j++){ 
$arr3=mysqli_fetch_array($res);
?>
<form method="post" action="StudentViewPost.php">
<li class="list-group-item"><span style="color:blue;font-weight:bold;"><?php echo $arr3['title']; ?></span>
<input type="number" value="<?php echo $arr3['post_id'] ?>" name="pid" hidden>
<button style="float:right;padding:3px;font-size:14px;" type="submit" class="btn btn-success">View</button>
<br/><span style="color:red;">Specification : <span style="color:blue;"><?php echo $arr3['specification']; ?></span></span></li><br/>
</form>
<?php }
}
?>
</ul>
</div>
</div>
</div>
</div>
<?php } 
else{
    $_SESSION['message']='You have been Logged Out, Login Again';
    header('location:index.php');
}
?>