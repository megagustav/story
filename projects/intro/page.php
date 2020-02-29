<div class="chapter" id="<?php echo $chapter_list[$i][2]; ?>">
	<div class="container-fluid mx-0 px-0 chapter-begin">
		
		<div class="row">
		
			<!-- TITLE ON MOBILE -->
			<div class="col-12 px-3 d-md-none" >
				<h2 class="display-4 pt-4">Portfolio for <?php echo $company; ?></h2>
				<p class="h4 text-muted font-weight-light pb-4 pt-2"><?php echo $published; ?></p>
			</div>
		
			<div class="container-fluid">
				<div class="row no-gutters">
		
					<div class="col-12 col-md-6 px-3 pl-md-0 pr-md-5 mb-5">
						<img src="../../projects/intro/01.png" class="d-none d-md-block img-fluid" alt="Portrait">
						<img src="../../projects/intro/02.jpg" class="d-md-none img-fluid" alt="Portrait">
					</div>

					<div class="col-12 col-md-6 px-3 pl-md-0 pr-md-5 mt-5 pt-5 mb-5" >
						<p class="h4 font-weight-light">
							<?php echo file_get_contents('cover.txt') ?>
						</p>
					</div>
			
				</div><!-- row -->
			</div><!-- container-fluid -->
			
		</div>
			
	</div>
</div>