<?php // Project Settings
$title		= "Lorem Ipsum";
$location	= "/Rome, Italy";
$goal		  = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.";
$tasks		= "Sit, Dolor, Lorem, Ipsum, Amet";
$id			  = $chapter_list[$i][2];
?>

<div class="container-fluid chapter mx-0 mb-2 mb-md-3 pb-5 pt-5" id="<?php echo $id; ?>">
	<div class="row">
		<!-- FOR DESKTOP / TABLET -->
		<div class="card noborder d-none d-md-block">
			<img class="card-img" src="/_chapters/<?php echo $id; ?>/0.jpg">
		  	<div class="card-img-overlay">
			  	<div class="col-xl-8 col-lg-10 shadow-lg py-4 px-5 mb-5 text-white rounded gaussian">
					<h2 class="card-title display-3 pt-2 pb-0 mb-0"><?php echo $title; ?></h2>
					<h2 class="card-text font-weight-light pb-3"><?php echo $location; ?></h2>
			  	
					<div class="row mt-5 pb-2">
						<div class="col-sm-6">
							<div class='h4'><i class="fas fa-bullseye-arrow"></i> project goals</div>
							<div class='h4 font-weight-light'><?php echo $goal; ?></div>
						</div>
						<div class="col-sm-6">
							<div class='h4'><i class="far fa-desktop-alt"></i> tasks</div>
							<div class='h4 font-weight-light'><?php echo $tasks; ?></div>
						</div>
					</div>					  
				</div>
			</div>
		</div>
		<!-- FOR MOBILE -->
		<div class="card noborder d-md-none">
		  <div class="card-body">
			<h4 class="card-title display-4 pt-2 pb-0 mb-0"><?php echo $title; ?></h2>
			<h4 class="card-text font-weight-light pb-3"><?php echo $location; ?></h2>
			
			<div class="row mt-5 pb-2">
				<div class="col-sm-6 mb-5 mb-md-0">
					<div class='h4'><i class="fas fa-bullseye-arrow"></i> project goals</div>
					<div class='h4 font-weight-light'><?php echo $goal; ?></div>
				</div>
				<div class="col-sm-6">
					<div class='h4'><i class="far fa-desktop-alt"></i> tasks</div>
					<div class='h4 font-weight-light'><?php echo $tasks; ?></div>
				</div>
			</div>	
		  </div>
		  <img class="card-img-bottom" src="/_chapters/<?php echo $id; ?>/0.jpg">
		</div>
		
	</div>
</div>

	<div class="col-md-4 offset-lg-1 pl-lg-0 col-sm-8 pt-5">
		<h3>Lorem Ipsum</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>

<div class="row mt-md-5 pt-3 pt-md-0">
	<div class="col-lg-10 offset-lg-1">
		<img class="img-fluid" src="/_chapters/<?php echo $id; ?>/1.png"/>
	</div>
</div>

<div class="row mt-md-5 pt-3 pt-md-0">
	<div class="col-lg-10 offset-lg-1">
		<img class="img-fluid" src="/_chapters/<?php echo $id; ?>/2.jpg"/>
	</div>
</div>

<div class="row mt-md-5 pt-3 pt-md-0">
	<div class="col-12">
		<img class="img-fluid" src="/_chapters/<?php echo $id; ?>/3.jpg"/>
	</div>
	
	<div class="col-md-4 offset-lg-1 col-sm-8 pt-5">
		<h3>Amet Silit</h3>
		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  <a class="btn btn-danger" href="#" role="button">Button *</a>
	  <p class="pt-2 text-muted"><small>*Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small></p>
	</div>
	
</div>

<div class="row mt-md-5 pt-md-5">
	<div class="col-md-6 col-lg-5 pt-3 pt-md-0">
		<img class="img-fluid" src="/_chapters/<?php echo $id; ?>/5.jpg"/>
	</div>
	<div class="col-md-5 offset-lg-2 pt-3 pt-md-0">
		<img class="img-fluid" src="/_chapters/<?php echo $id; ?>/4.jpg"/>
	</div>
	
	<div class="col-md-4 offset-lg-1 col-sm-8 pt-5 pt-md-0">
		<h3>Expecto Patronum</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	
</div>

