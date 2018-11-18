<!DOCTYPE html>
<html>
	<head>
		<?php include("settings.php");?>
		<?php include("../_system/header.php");?>
		<?php include("../_system/scripts.php");?>
	</head>
<body data-spy="scroll" data-target="#scroll" data-offset="20">
	<div id="top">
		<div class="d-none d-md-block frame-top-company float-right">Portfolio for <?php echo $company; ?></div>
		<?php include("../_system/nav.php");?>
	</div>
	<div id="bottom"></div>
	<main id="main" class="content">
		<?php for ($i = 0; $i < $chapter_count; $i++){ include($chapter_list[$i][1]); }; ?>
	</main>
</body>
</html>
