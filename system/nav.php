<header class="page-header" data-gumshoe-header data-scroll-header style="background: #fff; height: 40px; width: 100%; z-index: 8; position: fixed; top: 0;">
  <div class="page-nav">
    <nav class="active-spy" data-gumshoe>
      <!-- Turn anchor links into Smooth Scroll links by adding the [data-scroll] data attribute -->
      <?php for ($i = 0; $i < $chapter_count; $i++){
        echo '<a data-scroll href="#'.$chapter_list[$i][2].' ">'.$chapter_list[$i][0].'</a>';
        };
      ?>
    </nav>
    <!-- Arrows // i don't know why they have to be here, but keep them -->
    <a class="nav-arrow-left"></a>
    <a class="nav-arrow-right"></a>
  </div>
  
  <div class="d-none d-sm-block frame-top-company float-right"><?php echo $for; ?></div>
</header>
