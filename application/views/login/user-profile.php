<!DOCTYPE html>
<html>
<head>
	<title>User profile</title>
		<link href="<?= base_url(); ?>assets/bootstrap/bootstrap.min.css" rel="stylesheet">

		<style>
			.form-control{
			  width: 40%;
			}
			.container{
				margin-top: 4%;
			}
		</style>

</head>
<body>
<div  class="container"> 
<form action="<?= base_url('login/update_profile')?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">User name</label>
    <input type="text" class="form-control" name="username" value="<?php echo $user->username; ?>" size="10" required>
  </div>
  <input type="hidden" name="id" value="<?php echo $user->id ;?>" />
  <div class="form-group">
    <label for="exampleInputPassword1">Full Name</label>
    <input type="text" name="fullname" value="<?php echo $user->fullname ;?>" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" value="<?php echo$user->email ;?>" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" name="password"  value="<?php echo $user->password ;?>" class="form-control" required>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!-- Footer -->
<script src="<?= base_url(); ?>assets/jquery/jquery-3.4.1.slim.min.js"></script>
<script src="<?= base_url(); ?>assets/jquery/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>