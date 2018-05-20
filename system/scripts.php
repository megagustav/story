<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../system/js/jquery-3.2.1.slim.min.js"></script>
<script src="../system/js/popper.js"></script>
<script src="../system/js/bootstrap.min.js"></script>

<script>
(function($) {
  $(function() { // DOM Ready

    // Toggle navigation
    $('#nav-toggle').click(function() {
      this.classList.toggle("active");
      // If sidebar is visible:
      if ($('body').hasClass('show-nav')) {
        // Hide sidebar
        $('body').removeClass('show-nav');
      } else { // If sidebar is hidden:
        $('body').addClass('show-nav');
        // Display sidebar
      }
    });
  });
})(jQuery);
</script>