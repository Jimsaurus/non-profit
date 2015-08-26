<footer>
  <div id="footer-sidebar" class="container">
	  <div id="footer-widget">
	    <?php
	    if(is_active_sidebar('footer-widget')){
	      dynamic_sidebar('footer-widget');
	      } ?>
	  </div>
    <!-- <p>&copy;  <?php// echo date('Y'); ?></p> -->
    <p>&copy 2015 <a href="www.jamesmcdermid.ca">James McDermid</a> &amp; <a href="http://francislanglois.com">Francis Langlois</a> | All Rights Reserved</p>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>
