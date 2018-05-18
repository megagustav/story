<!DOCTYPE html>
<html>

	<head>
		<?php include("settings.php");?>
	</head>

	<body data-spy="scroll" data-target="#scroll" data-offset="20">
		
		<!-- Page Border -->
		<div id="left"></div>
		<div id="right"></div>
		<div id="top"></div>
		<div id="bottom"></div>
	
		<!-- Company Name -->
	  <div class="d-none d-md-block frame-top-company float-right">Portfolio for <?php echo $company; ?></div>
	
		<!-- Nav and Toggle -->
		<?php include("nav.php");?>
		<a id="nav-toggle" class="position <?php if ($hideSide) echo 'd-none' ?>" aria-label="Toggle Navigation"><span></span><span></span><span></span><span></span></a>
	
		<main id="main" class="col-sm-12 m-0 p-0">
		  <?php include("projects/0_intro/intro.php");?>
		  <?php include("projects/1_contextual/project.php");?>
		  <?php include("projects/2_shift/project.php");?>
		  <?php include("projects/3_humans/project.php");?>
		  <?php include("projects/4_transport/project.php");?>
		  <?php include("projects/5_upcycling/project.php");?>
		  <?php include("projects/99_contact/contact.php");?>
		</main>
		
	
		<?php include("scripts.php");?>
		<script src="js/scripts.js"></script>
		
	</body>
	
</html>