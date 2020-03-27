<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Expect-UA-compatible" content="ie=edge">
	<title>Student Add</title>
	<!--Bootstrap link -->
	<link href="<?= base_url(); ?>assets/bootstrap/bootstrap.min.css" rel="stylesheet">
	<!--Bootstrap link -->
	<style>
         .footer-copyright{
         	background-color: darkgray;
         	text-decoration-color: white;
         }
         .footer-text{
         	color: white;
         }
         .dropdown-menu{
         	background-color: darkgrey;
         }
	</style>
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg" style="background-color: #d8d3d3;">
		<a class="nav-link" href="">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

			<ul class="navbar nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="">Students</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Department</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Teacher</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">About Us</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo  $this->session->userdata('full_name') ;?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Profile</a>
						<a class="dropdown-item" href="<?= base_url('login/logout')?>">Log Out</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
</header>

<!--<div class="row">-->
<!--	<div class="col-sm-6">-->
<!--		<div class="card">-->
<!--			<div class="card-body">-->
<!--				<h5 class="card-title">Special title treatment</h5>-->
<!--				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
<!--				<a href="#" class="btn btn-primary">Go somewhere</a>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="col-sm-6">-->
<!--		<div class="card">-->
<!--			<div class="card-body">-->
<!--				<h5 class="card-title">Special title treatment</h5>-->
<!--				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
<!--				<a href="#" class="btn btn-primary">Go somewhere</a>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!--<div class="row">-->
<!--	<div class="col-sm-6">-->
<!--		<div class="card">-->
<!--			<div class="card-body">-->
<!--				<h5 class="card-title">Special title treatment</h5>-->
<!--				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
<!--				<a href="#" class="btn btn-primary">Go somewhere</a>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="col-sm-6">-->
<!--		<div class="card">-->
<!--			<div class="card-body">-->
<!--				<h5 class="card-title">Special title treatment</h5>-->
<!--				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
<!--				<a href="#" class="btn btn-primary">Go somewhere</a>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!--<div class="row">-->
<!--	<div class="col-sm-6">-->
<!--		<div class="card">-->
<!--			<div class="card-body">-->
<!--				<h5 class="card-title">Special title treatment</h5>-->
<!--				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
<!--				<a href="#" class="btn btn-primary">Go somewhere</a>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="col-sm-6">-->
<!--		<div class="card">-->
<!--			<div class="card-body">-->
<!--				<h5 class="card-title">Special title treatment</h5>-->
<!--				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
<!--				<a href="#" class="btn btn-primary">Go somewhere</a>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->


<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component fhis is a simple hero unit, a simple jumbotron-style component fhis is a simple hero unit, a simple jumbotron-style component fhis is a sihis is a simple hero unit, a simple jumbotron-style component fmple hero unit, a simple jumbotron-style component fhis is a simple hero unit, a simple jumbotron-style chis is a simple hero unit, a simple jumbotron-style component fomponent for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a class="footer-text" href="#">Provashish Roy</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<script src="<?= base_url(); ?>assets/jquery/jquery-3.4.1.slim.min.js"></script>
<script src="<?= base_url(); ?>assets/jquery/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>
