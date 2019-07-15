<?php
include('CollegeHeader.php');
if(isset($_SESSION['username'])){
    include('DbConnection.php');
$query='Select * from college where username="'.$_SESSION['username'].'"';
    $res=mysqli_query($con,$query);
    $arr=mysqli_fetch_array($res);
?>
<br/><br/>
<h1 style="text-align:center;color:white;"><?php echo $arr['cname'] ?> Profile</h1>
<br/>
<div class="container">
<div class="row" style="border:5px solid white;padding:15px;font-weight:bold;font-size:20px;">
<div class="col-md-4"></br>
<img style="border:1px solid white;" src="College/<?php echo $arr['image']; ?>"height="35%" width="100%"><br><br>
<li class="list-group-item"><span style="color:red;">College ID</span> : <span style="color:blue"><?php echo $arr['cid']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Name</span> : <span style="color:blue"><?php echo $arr['cname']; ?></span></li>

<br/>
</div>
<div class="col-md-8">
<ul class="list-group list-group-flush">
<li class="list-group-item"><span style="color:red;">University</span> : <span style="color:blue"><?php echo $arr['university']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Average Grade</span> : <span style="color:blue"><?php echo $arr['grade']; ?></span></li></br>
<li class="list-group-item"><span style="color:red;">Address</span> : <span style="color:blue"><?php echo $arr['caddress']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Contact Number</span> : <span style="color:blue"><?php echo $arr['cphone']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Email</span> : <span style="color:blue"><?php echo $arr['cemail']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Website</span> : <span style="color:blue"><?php echo $arr['cwebsite']; ?></span></li><br/>
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