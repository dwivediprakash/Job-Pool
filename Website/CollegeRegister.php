<?php
    include('header.php');
?>
<div class="container-fluid" style="padding:20px;">
<br/><br/>
<form method="post" action="CollegeRegistration.php" enctype="multipart/form-data" style="border:5px solid white;padding:15px;">
<div class="row">
<div class="col">
<h1 style="color:white;text-align:center;">College Registration</h1>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<input type="number" class="form-control" placeholder="College ID" name="cid" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<select class="form-control" name="cname" required>
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
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<input type="email" class="form-control" placeholder="College Email" name="cemail" required>
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<input type="text" class="form-control" placeholder="College Grade" name="cgrade" required>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<input type="text" class="form-control" placeholder="Board/University" name="cuniv" required>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<input type="text" class="form-control" placeholder="College website" name="cwebsite" required>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<input type="number" class="form-control" placeholder="College Contact Number" name="cno" required>
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-9">
<div class="form-group">
<textarea class="form-control" rows="3" name="address" placeholder="Full Address of College" required></textarea>
</div>
</div>
<div class="col-md-3">
<label style="color:white;">Upload your Profile Photo</label>
<div class="form-group">
<input type="file" class="form-control" name="photo" style="height:53px;" required>
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<input type="text" class="form-control" placeholder="Create Username" name="username" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<input type="password" class="form-control" placeholder="Create Password" name="password" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<button type="submit" class="btn btn-primary" style="width:100%;">Register</button>
</div>
</div>
</div>
</form>
</div>
<?php
    include('footer.php');
?>