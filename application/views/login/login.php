<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Expect-UA-compatible" content="ie=edge">
	<title>Login</title>
	<!--Bootstrap link -->
	<link href="<?= base_url(); ?>assets/bootstrap/bootstrap.min.css" rel="stylesheet">
	<!--Bootstrap link -->
<style>
	.login_title{
		margin-bottom: 10px;
		text-align: center;
		color: #1b6d85;
	}
	.btn-success{
		margin-left: 40%;
	}
	.form-control{
		width: 100%;
		text-align: justify;
	}
	.container{
		padding-right: 15px;
		padding-left: 15px;
		margin-right: auto;
		margin-left:auto;
	}
	.login{
		max-width: 330px;
		padding: 15px;
		margin: 0 auto;
		margin-top:10%;
	}

</style>
</head>
<body>
 <div class="container">

	  <form action="<?= base_url('login/login_action') ?>" method="post" class="login">
		  <?php if ($this->session->flashdata('user_success')) { ?>
			  <div class="alert alert-danger" style="width: 102%!important;"> <?= $this->session->flashdata('user_success') ?> </div>
		  <?php } ?>
		  <h3 class="login_title">Login</h3>
			  <input type="text" class="form-control" name="username" value="" placeholder="Enter Your Username" required/><br>
		      <?php echo form_error('username', '<span style="color: red" class="form_error">', '</span>'); ?>
		      <input type="password" class="form-control" name="password" value="" placeholder="Enter Your Password" required/><br>
		      <?php echo form_error('password', '<span style="color: red" class="form_error">', '</span>'); ?>
		      <button type="submit" class="btn btn-success" name="submit" value="submit">Login</button>

	  </form>
  </div>


<script src="<?= base_url(); ?>assets/jquery/jquery-3.4.1.slim.min.js"></script>
<script src="<?= base_url(); ?>assets/jquery/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>
