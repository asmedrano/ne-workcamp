<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
  <div class="clearfix"></div>
  <div id="footer" class="font-blue">
	workcampNE Inc. is a recognized 501(c)(3) &bull; <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=Hoc9kaM4tln-wu5_lSks70Zc0ub11lY5qn6Oa5lGmod4df-_DUwFWH_uuTO&dispatch=5885d80a13c0db1f8e263663d3faee8db02a037e263542f58098410815cf7df7" target="blank">Donate to Workcamp</a>
  </div>
</div> <!--! end of #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>js/vendor/jquery-1.8.0.min.js"><\/script>')</script>

<!--[if (gte IE 6)&(lte IE 8)]>
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/vendor/selectivizr-min.js") ?>
<![endif]-->

  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/plugins.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/main.js") ?>

  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
			   
  <?php wp_footer(); ?>

</body>
</html>
