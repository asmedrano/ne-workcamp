<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
  <div class="clearfix"></div>
  <div id="footer" class="blue">
	<span class="wcne-text-logo">workcamp<i>NE</i></span> Inc. is a recognized 501(c)(3) &bull; <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=87LDQUABJWN8S" target="blank">Donate to <span class="wcne-text-logo">workcamp<i>NE</i></span></a>


  </div>

</div> <!--! end of #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>js/vendor/jquery-1.8.0.min.js"><\/script>')</script>

<!--[if (gte IE 6)&(lte IE 8)]>
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/vendor/selectivizr-min.js") ?>
<![endif]-->

  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/plugins.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/main.js") ?>
<?php //versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/vendor/frendeto.js") ?>
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
			   
  <?php wp_footer(); ?>

</body>
</html>
