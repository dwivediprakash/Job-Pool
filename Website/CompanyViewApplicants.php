<?php
include('CompanyHeader.php');
$pid=$_POST['pid'];
include('DbConnection.php');
$query='select * from applicants where post_id='.$pid;
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
if($n>0){
?>
<br/><br/>
<div class="container">
<div class="row" style="border:5px solid white;padding:15px;font-weight:bold;">
<div class="col">
<h1 style="text-align:center;color:white;">Applications Recieved</h1><br/>
<ul class="list-group list-group-flush">
<?php
for($i=1;$i<=$n;$i++){
    $arr=mysqli_fetch_array($res);
    $query1='select sname,semail,phone,collegeName,Branch,pdf from student where enrollment="'.$arr['enrollment'].'"';
    $res1=mysqli_query($con,$query1);
    $arr1=mysqli_fetch_array($res1);
?>
<li class="list-group-item">
<span style="color:red;">Name</span> : <span style="color:blue;"><?php echo $arr1['sname']; ?></span>&emsp;
<span style="color:red;">Email</span> : <span style="color:blue;"><?php echo $arr1['semail']; ?></span>&emsp;
<span style="color:red;">Phone</span> : <span style="color:blue;"><?php echo $arr1['phone']; ?></span>&emsp;
<span style="color:red;">Resume</span> : <span style="color:blue;"><a href="Students/Resume/<?php echo $arr1['pdf']; ?>">Download File</a></span>&emsp;<br/>
<span style="color:red;">College</span> : <span style="color:blue;"><?php echo $arr1['collegeName']; ?></span>&emsp;
<span style="color:red;">Branch</span> : <span style="color:blue;"><?php echo $arr1['Branch']; ?></span>&emsp;
</li>
<br/>
<?php }
}
else{
    echo "<br/><br/>";
    echo "<h1 style='text-align:center;color:white;'>No Applications Recieved for this Post</h1>";
}
?>
</ul>
</div>
</div>
</div>