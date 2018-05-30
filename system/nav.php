<header class="page-header d-none d-md-block" data-gumshoe-header data-scroll-header>
  <div class="page-nav">
    <nav class="active-spy" data-gumshoe>
      <!-- Turn anchor links into Smooth Scroll links by adding the [data-scroll] data attribute -->
      <a data-scroll href="#<?php echo $intro ?>"><?php echo $intro ?></a>
      <a data-scroll href="#<?php echo $project_1_nav ?>"><?php if ($showNumbers) echo ++$a.'. ' ?><?php echo $project_1 ?></a>
      <a data-scroll href="#<?php echo $project_2_nav ?>"><?php if ($showNumbers) echo ++$a.'. ' ?><?php echo $project_2 ?></a>
      <a data-scroll href="#<?php echo $project_3_nav ?>"><?php if ($showNumbers) echo ++$a.'. ' ?><?php echo $project_3 ?></a>
      <a data-scroll href="#<?php echo $project_4_nav ?>"><?php if ($showNumbers) echo ++$a.'. ' ?><?php echo $project_4 ?></a>
      <a data-scroll href="#<?php echo $project_5_nav ?>"><?php if ($showNumbers) echo ++$a.'. ' ?><?php echo $project_5 ?></a>
      <a data-scroll href="#<?php echo $contact ?>"><?php echo $contact ?></a>
    </nav>
    <!-- Arrows -->
    <a class="nav-arrow nav-arrow-left"><svg class="icon"><use xlink:href="#arrow-up"/></svg></a>
    <a class="nav-arrow nav-arrow-right"><svg class="icon"><use xlink:href="#arrow-down"/></svg></a>
  </div>
</header>


<!-- Side Nav -->
<aside class="<?php if ($hideSide) echo 'd-none' ?> col-lg-3 col-md-4 col-sm-6 position-fixed p-0 m-0">

  <nav class="nav flex-column nav-pills nav-col" id="scroll" role="tablist" aria-orientation="vertical">
	  <a class="nav-link active text-center text-sm-left" data-scroll href="#introduction"><samp><?php echo $intro ?></samp></a>
	  <a class="nav-link text-center text-sm-left" data-scroll href="#<?php echo $project_1_nav ?>"><samp><?php if ($showNumbers) echo ++$b.'. ' ?><?php echo $project_1 ?></samp></a>
	  <a class="nav-link text-center text-sm-left" data-scroll href="#<?php echo $project_2_nav ?>"><samp><?php if ($showNumbers) echo ++$b.'. ' ?><?php echo $project_2 ?></samp></a>
	  <a class="nav-link text-center text-sm-left" data-scroll href="#<?php echo $project_3_nav ?>"><samp><?php if ($showNumbers) echo ++$b.'. ' ?><?php echo $project_3 ?></samp></a>
	  <a class="nav-link text-center text-sm-left" data-scroll href="#<?php echo $project_4_nav ?>"><samp><?php if ($showNumbers) echo ++$b.'. ' ?><?php echo $project_4 ?></samp></a>
	  <a class="nav-link text-center text-sm-left" data-scroll href="#<?php echo $project_5_nav ?>"><samp><?php if ($showNumbers) echo ++$b.'. ' ?><?php echo $project_5 ?></samp></a>
	  <a class="nav-link text-center text-sm-left" data-scroll href="#contact"><samp><?php echo $contact ?></samp></a>
  </nav>
  
  <p class="small text-muted pt-5"><b>Some of these projects are confidential.</b> Please keep this link to yourself or only share it with those it may concern.<br /><br />
	  &copy; <?php echo date("Y"); ?> <?php echo $name; ?></p>
		  
</aside>