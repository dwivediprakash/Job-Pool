<?php
include('header.php');
?>
<div class="container-fluid">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" style="text-align:center;"><br/><br/>
<?php
if(isset($_SESSION['message'])){ ?>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
<strong><?php echo $_SESSION['message']; ?></strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php } ?>
<form style="border:2px solid white;padding:30px;" method="post" action="Login.php"><br/>
    <h1 style="color:white;">Login Form</h1><br/>
    <label style="color:white;font-size:20px;">Login As</label>
    <select class="form-control" style="height:45px;" name="aswhat">
    <option value="student">Student</option>
    <option value="college">College</option>
    <option value="company">Company</option>
    </select>
    <br/>
  <input style="height:45px;" class="form-control" type="text" placeholder="Username" name="username"/><br/>
  <input style="height:45px;" class="form-control" type="password" placeholder="Password" name="password"/><br/>
  <button style="height:45px;background-color:#074b6b;color:white;font-size:20px;" class="form-control" type="submit" >Login</button>
  <br/>
<hr style="background-color:white;"/>
<a href="" data-toggle="modal" data-target="#exampleModal" style="color:rgb(125, 198, 247);">
  New Here? Click here to Register
</a><br/>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-image:url('Images/modalBackground.png');background-size:cover;">,
      <div class="modal-header">,
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;font-size:30px;">Register As </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <a style="font-size:25px;color:white;" href="StudentRegister.php" class="btn btn link"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Student</a><br/>
  <a style="font-size:25px;color:white;" href="CollegeRegister.php" class="btn btn link"><i class="fa fa-institution" aria-hidden="true"></i> College</a><br/>
  <a style="font-size:25px;color:white;" href="CompanyRegister.php" class="btn btn link"><i class="fa fa-building" aria-hidden="true"></i> Company</a>
      </div>
    </div>
  </div>
</div>
</div><br/>
</form>
</div>
<div class="col-md-4"></div>
</div>
</div>
<br/>
<?php
include('footer.php');
?>