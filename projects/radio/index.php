<!DOCTYPE html>

<html>
	<head>
		<?php include("settings.php");?>
		<?php include("../../system/header.php");?>
	</head>
<body>
	<div id="top">
		<div class="d-none d-md-block top-left float-left"><a href="../../"><i class="far fa-arrow-left"></i> <?php echo $title_left; ?></a></div>
		<div class="d-none d-md-block top-right float-right"><?php echo $title_right; ?></div>
	</div>
	<div id="bottom">
		<div class="d-none d-md-block bottom-left float-left"><?php echo $bottom_left; ?></div>
		<div class="d-none d-md-block bottom-right float-right"><?php echo $bottom_right; ?></div>
	</div>
	<main id="main" class="content">
			<?php for ($i = 0; $i < $chapter_count; $i++){ include($chapter_list[$i][1]); }; ?>
	</main>
	<?php include("../../system/scripts.php");?>
</body>
</html>
