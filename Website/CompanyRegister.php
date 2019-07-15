<?php
    include('header.php');
?>
<div class="container-fluid" style="padding:20px;">
<br/><br/>
<form method="post" action="CompanyRegistration.php" enctype="multipart/form-data" style="border:5px solid white;padding:15px;">
<div class="row">
<div class="col">
<h1 style="color:white;text-align:center;">Company Registration</h1>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<input type="number" class="form-control" placeholder="Company ID" name="kid">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<input type="text" class="form-control" placeholder="Company Name" name="kname">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<input type="email" class="form-control" placeholder="Company Email" name="kemail">
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-9">
<div class="form-group">
<textarea class="form-control" rows="3" name="kaddress" placeholder="Full Address of Company"></textarea>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label style="color:white;">Upload Company Image</label>
<input style="height:53px;" type="file" class="form-control" placeholder="Upload Company Image" name="image">
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Company Website" name="web">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Company Contact Number" name="kphone">
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<input type="text" class="form-control" placeholder="Create Username" name="username">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<input type="password" class="form-control" placeholder="Create Password" name="password">
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