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
	  <div class="d-none d-md-block frame-top-company float-right"><?php echo $for; ?></div>
	
		<!-- Nav and Toggle -->
		<?php include("../system/nav.php");?>
		<a id="nav-toggle" class="position <?php if ($hideSide) echo 'd-none' ?>" aria-label="Toggle Navigation"><span></span><span></span><span></span><span></span></a>
	
		<main id="main" class="col-sm-12 m-0 p-0">
		  <?php include($intro_url."/page.php");?>
		  <?php include($project_1_url."/page.php");?>
		  <?php include($project_2_url."/page.php");?>
		  <?php include($project_3_url."/page.php");?>
		  <?php include($project_4_url."/page.php");?>
		  <?php include($project_5_url."/page.php");?>
		  <?php include($contact_url."/page.php");?>
		</main>
		
	
		<?php include("../system/scripts.php");?>
		
	</body>
	
</html>