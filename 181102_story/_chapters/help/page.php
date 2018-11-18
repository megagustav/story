<?php // Project Settings
$title		= "brand strategy for help remedies";
$location	= "/university, london";
$goal		= "a product to counteract drug- use that blends into the user’s day with invisible technology";
$tasks		= "brand communication, concept creation, CMF, prototyping, exhibition";
$id			= $chapter_list[$i][2];
?>

<div class="container-fluid chapter mx-0" id="<?php echo $id; ?>">
	<div class="row">
		<!-- FOR DESKTOP / TABLET -->
		<div class="card noborder d-none d-md-block">
			<img class="card-img" src="/_chapters/<?php echo $id; ?>/0.jpg" alt="Card image">
		  	<div class="card-img-overlay">
			  	<div class="col-xl-8 col-lg-10 shadow-lg py-4 px-5 mb-5 text-white rounded gaussian">
					<h2 class="card-title display-3 pt-2 pb-0 mb-0"><?php echo $title; ?></h2>
					<h2 class="card-text font-weight-light pb-3"><?php echo $location; ?></h2>
			  	
					<div class="row mt-5 pb-2">
						<div class="col-sm-6">
							<div class='h4'><i class="fas fa-bullseye-arrow"></i> project goal</div>
							<div class='h4 font-weight-light'><?php echo $goal; ?></div>
						</div>
						<div class="col-sm-6">
							<div class='h4'><i class="fas fa-person-dolly"></i> responsibilities</div>
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
					<div class='h4'><i class="fas fa-bullseye-arrow"></i> project goal</div>
					<div class='h4 font-weight-light'><?php echo $goal; ?></div>
				</div>
				<div class="col-sm-6">
					<div class='h4'><i class="fas fa-person-dolly"></i> responsibilities</div>
					<div class='h4 font-weight-light'><?php echo $tasks; ?></div>
				</div>
			</div>	
		  </div>
		  <img class="card-img-bottom" src="/_chapters/<?php echo $id; ?>/0.jpg" alt="Card image cap">
		</div>
		
	</div>
</div>


<div class="row mt-5 pt-5">
	<div class="col-12">
		<img class="img-fluid" src="/_chapters/<?php echo $id; ?>/1.jpg" alt="Spark hero"/>
	</div>
</div>

<div class="row mt-5 pt-5">
	<div class="col-md-11 offset-md-1">
		<img class="img-fluid" src="/_chapters/<?php echo $id; ?>/2.jpg" alt="Spark hero"/>
	</div>
</div>

<div class="row m-0 pt-5 mt-5">
	<div class="col-md m-0 p-0">
	    <div class="masonry gallery gap-wide">
			<img class="mb-3 gap-wide" src="/_chapters/<?php echo $id; ?>/3.jpg" alt=""/>
			<img class="mb-3 gap-wide" src="/_chapters/<?php echo $id; ?>/4.jpg" alt=""/>
			<img class="mb-3 gap-wide pt-md-4 mt-md-4" src="/_chapters/<?php echo $id; ?>/5.jpg" alt=""/>
			<img class="mb-3 gap-wide" src="/_chapters/<?php echo $id; ?>/6.jpg" alt=""/>
	    </div>
	</div>
</div>

<div class="row mt-md-5 pt-md-5">
	<div class="col-12">
		<img class="img-fluid" src="/_chapters/<?php echo $id; ?>/7.jpg" alt="Spark hero"/>
	</div>
</div>
