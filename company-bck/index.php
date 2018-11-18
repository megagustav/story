<!DOCTYPE html>
<html>
	<head>
		<?php include("settings.php");?>
		<?php include("../system/header.php");?>
	</head>
	<body>
		<div id="left"></div>
		<div id="right"></div>
		<div id="top"></div>
		<div id="bottom"></div>

		<?php include("../system/nav.php");?>

		<main id="main" class="col-sm-12 m-0 p-0">
			<?php for ($i = 0; $i < $chapter_count; $i++){ include($chapter_list[$i][1]); }; ?>
		</main>
		<?php include("../system/scripts.php");?>
	</body>
</html>
