<?php
include('CompanyHeader.php');
if(isset($_SESSION['username'])){
?>
<br/><br/>
<div class="container-fluid">
<div class="row">
<div class="col-md-8">
<form method="post" action="CompanyCreatePost.php" style="border:5px solid white;padding:15px;">
<div class="row"><div class="col"><h1 style="color:white;text-align:center;">Job Requirement</h1></div></div><br/>
<div class="row"><div class="col"><div class="form-group"><input type="text" class="form-control" placeholder="Title" name="title"></div></div></div><br/>
<div class="row"><div class="col"><div class="form-group"><input type="text" class="form-control" placeholder="Specification" name="specification"></div></div></div><br/>
<div class="row"><div class="col"><div class="form-group"><input type="number" class="form-control" placeholder="Number Of Vacinies" name="noofvac"></div></div></div><br/>
<div class="row"><div class="col"><div class="form-group"><input type="text" class="form-control" placeholder="Package" name="package"></div></div></div><br/>
<div class="row"><div class="col"><div class="form-group"><input type="date" class="form-control" placeholder="Expired Date" name="expdate"></div></div></div><br/>
<div class="row"><div class="col"><div class="form-group"><input type="text" class="form-control" placeholder="Grade Of Collage" name="grade"></div></div></div><br/>
<div class="row"><div class="col"><div class="form-group"><input type="number" class="form-control" placeholder="CGPA" name="cgpa"></div></div></div><br/>
<div class="row"><div class="col"><div class="form-group"><input type="number" class="form-control" placeholder="Maximum Back Log" name="backlog"></div></div></div><br/>
<div class="row"><div class="col"><div class="form-group"><input type="number" class="form-control" placeholder="Maximum Drop Year" name="drop"></div></div></div><br/>
<div class="row"><div class="col"><div class="form-group"><select class="form-control" name="openoff"><option value="open">Open to All</option><option value="close">Close</option></select></div></div></div><br/>
<div class="row"><div class="col"><div class="form-group">
<select class="form-control" name="clgname">
<option value="All">All Colleges</option>
<?php
include('DbConnection.php');
$query='select * from list_college';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=1;$i<=$n;$i++){
    $arr=mysqli_fetch_array($res);
    echo '<option value="'.$arr['clgname'].'">'.$arr['clgname'].'</option>';
}
?>
</select>
</div></div></div><br/>
<div class="row"><div class="col"><div class="form-group"><center><button type="submit" class="btn btn-primary" style="width:200px;">Submit</button></center></div></div></div>
</form>
</div>
<div class="col-md-4">
<div style="border:5px solid white;padding:15px;">
<div class="row">
<div class="col">
<h1 style="text-align:center;color:white;">Active Posts</h1>
</div>
</div>
<br/>
<ul class="list-group list-group-flush">
<?php
include('DbConnection.php');
$query='select kid from company where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
$date=date('Y-m-d');
$query='select post_id,title,ExpDated from companyposts where company_id='.$arr['kid'].' and ExpDated > "'.$date.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=1;$i<=$n;$i++){
    $array=mysqli_fetch_array($res);
?>
<form method="post" action="CompanyViewPost.php">
<li class="list-group-item">
<?php echo $array['title']; ?>&emsp;<?php echo $array['ExpDated']; ?>
<input type="number" value="<?php echo $array['post_id']; ?>" name="pid" hidden>
<button class="btn btn-link" type="Submit">View</button>
</li>
</form>
<?php } ?>
</ul>
</div>
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