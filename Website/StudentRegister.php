<?php
include('header.php');
?>
<div class="container-fluid" style="padding:20px;">
<br/><br/>
<form method="post" action="StudentRegistration.php" style="border:5px solid white;padding:15px;" enctype="multipart/form-data">
<div class="row">
<div class="col">
<h1 style="color:white;text-align:center;">Student Registration</h1>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Name" name="sname" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="email" class="form-control" placeholder="Email" name="email" required>
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enrollment No." name="enrollment" required>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<input type="text" class="form-control" placeholder="Username" name="username" required>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<input type="password" class="form-control" placeholder="Password" name="password" required>
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<select class="form-control" name="gender" required>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<input type="number" class="form-control" placeholder="Phone Number" name="phone" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<input type="date" class="form-control" placeholder="Date Of Birth" name="dob" required>
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<input type="text" class="form-control" placeholder="10th Mark" name="tenth" min="0" max="100" required>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<input type="text" class="form-control" placeholder="12th Mark" name="tweleve" min="0" max="100" required>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<input type="number" class="form-control" placeholder="Passing Year" name="passing" min="2019" max="2050"required>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<input type="text" class="form-control" placeholder="College Id" name="clgid" required>
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<select class="form-control" name="clgname" required>
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
<div class="col-md-3">
<div class="form-group">
<input type="text" class="form-control" placeholder="College Branch" name="clgbranch" required>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<input type="number" class="form-control" placeholder="CGPA" name="cgpa" max="10" required>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<input type="number" class="form-control" placeholder="Experience" name="exp" min="0" max="4" required>
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<textarea class="form-control" rows="3" name="address" placeholder="Full Address of Student" required></textarea>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label style="color:white;">Upload your Profile Image</label>
<input type="file" class="form-control" placeholder="Collage Id" name="photo" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label style="color:white;">Upload your Resume</label>
<input type="file" class="form-control" placeholder="Collage Id" name="resume" required>
</div>
</div>
</div>
<br>
<div class="row">
</div class="col">
<button type="submit" class="btn btn-primary" style="width:100%;">Submit</button>
</div>
</div>
</form>
</div>
<?php
    include('footer.php');
?>