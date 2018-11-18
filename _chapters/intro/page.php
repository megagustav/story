<div class="container-fluid chapter first-chapter mb-3 mb-md-0" id="<?php echo $chapter_list[$i][2]; ?>">
	<div class="row">
		<div class="col-12 px-3 d-md-none" >
			<h2 class="display-4 pt-4">Portfolio for <?php echo $company; ?></h2>
			<p class="h4 text-muted font-weight-light pb-4 pt-2"><?php echo $published; ?></p>
		</div>
		
		<div class="px-0 col-md-6 mt-0 mb-5 mb-md-0 pr-0 pr-md-5">
			<img src="/_chapters/intro/01.png" class="d-none d-md-block img-fluid" alt="<?php echo $name; ?> Portrait" width="100%" height="auto">
			<img src="/_chapters/intro/02.jpg" class="d-md-none img-fluid" alt="<?php echo $name; ?> Portrait" width="100%" height="auto">
			
			<div class="d-none d-md-block mr-3 alert alert-warning mt-5" role="alert">
			  <p><i class="far fa-exclamation-triangle"></i> Some of these projects are confidential.</p>
			  <hr>
			  <p class="mb-0">Please use Safari to view this website as some of the CSS is still experimental and will only render there.</p>
			</div>
			
		</div>

		<div class="col-md-6 col-xl-5 pl-md-0 mt-0 pt-xl-5 mt-xl-5" >
			<p class="h4 font-weight-light"><?php echo $greeting; ?></p>
			<p class="h4 font-weight-light"><?php echo file_get_contents('cover.txt') ?></p>
		</div>
		
		<div class="d-md-none mx-3 alert alert-warning mt-5" role="alert">
		  <p><i class="far fa-exclamation-triangle"></i> Some of these projects are confidential.</p>
		  <hr>
		  <p class="mb-0">Please use Safari to view this website as some of the CSS is still experimental and will only render there.</p>
		</div>
		
	</div>
</div>
