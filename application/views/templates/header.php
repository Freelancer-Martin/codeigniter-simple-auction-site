<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<?php
		$this->load->helper('url');
		//$this->load->model('Users_Create_DB_and_Table');

	?>
	<title>Rpa24 | login</title>

	<title>User Registration Script in CodeIgniter</title>
	<!-- Optional theme -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php //echo base_url(); ?>assets/styles.css" >
	<script   src="https://code.jquery.com/jquery-3.1.1.js" ></script>
	<!-- Latest compiled and minified JavaScript -->

	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</head>
<body>

<div class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">
				<a href="index.php"><img src="<?php echo base_url(); ?>assets/images/logo.jpg"></a>
			</div>
			<div class="col-8">
				<div class="row">
					<div class="col-12">
						<nav class="float-right">
							<ul class="nav">
								<li class="nav-item"><a href="<?php echo base_url(); ?>index.php/about" class="nav-link">About</a></li>
								<li class="nav-item"><a href="<?php echo base_url(); ?>index.php/language" class="nav-link">Language</a></li>
								<li class="nav-item"><a href="<?php echo base_url(); ?>index.php/contacts" class="nav-link">Contacts</a></li>
								<li class="nav-item"><a href="<?php echo base_url(); ?>index.php/privacy-policy" class="nav-link">Privacy Policy</a></li>
								<li class="nav-item"><a href="<?php echo base_url(); ?>index.php/how-it-works" class="nav-link">Hows it works</a></li>
							</ul>
						</nav>
					</div>
				</div>

			</div>
			<div class="col-2">
			    <a href="<?php echo base_url(); ?>index.php/login" class="btn btn-block btn-primary">Log in</a>
			    <a href="<?php echo base_url(); ?>index.php/register" class="btn btn-block btn-primary">Register</a>
					<a href="<?php echo base_url(); ?>index.php/IdentifyingBuyerVehicle" class="btn btn-block btn-primary">Post Your enquiry now</a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-10">
			<nav class="nav-justified">
				<ul class="nav nav-pills nav-fill">
					<li class="nav-item"><a href="<?php echo base_url(); ?>index.php/register" class="nav-link border"><img src="<?php echo base_url(); ?>assets/images/excavator.png"><br><small>Construction Equipment</small></a></li>
					<li class="nav-item"><a href="<?php echo base_url(); ?>index.php/register" class="nav-link border"><img src="<?php echo base_url(); ?>assets/images/dump-truck.png"><br> Trucks Trailers</a></li>
					<li class="nav-item"><a href="<?php echo base_url(); ?>index.php/register" class="nav-link border"><img src="<?php echo base_url(); ?>assets/images/tractor.png"><br>Agriculture</a></li>
					<li class="nav-item"><a href="<?php echo base_url(); ?>index.php/register" class="nav-link border"><img src="<?php echo base_url(); ?>assets/images/grounds-care.png"><br> Ground Care</a></li>
					<li class="nav-item"><a href="<?php echo base_url(); ?>index.php/register" class="nav-link border"><img src="<?php echo base_url(); ?>assets/images/material-handling.png"><br> Material Handling</a></li>
					<li class="nav-item"><a href="<?php echo base_url(); ?>index.php/register" class="nav-link border"><img src="<?php echo base_url(); ?>assets/images/reply.png"><br> Transport</a></li>
					<li class="nav-item"><a href="<?php echo base_url(); ?>index.php/register" class="nav-link border"><img src="<?php echo base_url(); ?>assets/images/document.png"><br> Inspection</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
