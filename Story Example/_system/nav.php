<header class="page-header d-none d-md-block" data-gumshoe-header data-scroll-header>
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
</header>
