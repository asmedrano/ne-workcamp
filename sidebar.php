<?php
/**
 * @package WordPress
 * @subpackage NE-Workcamp
 */
?>

	<div id="sidebar">
		<div id="content-wrap">
			<div id="fixed-content">
				<a href="/about-us" class="fixed-link" id="about-link"></a>
				<a href="http://www.facebook.com/workcampNE" target="blank" class="fixed-link" id="facebook"></a>
				<a href="https://twitter.com/workcampne" target="blank" class="fixed-link" id="twitter"></a>
				<a href="" class="fixed-link" id="youtube"></a>
				<a href="<?php bloginfo('rss2_url'); ?>" target="blank" class="fixed-link" id="subscribe"></a>
				<img src="<?=$GLOBALS["TEMPLATE_RELATIVE_URL"]?>images/Side-bar-art-wc.png" />
			</div>

			<div id="categories">
				<h4 class="font-blue"> NEWS CATEGORIES</h4> 
				<ul>
				<?php wp_list_categories('title_li='); ?>
				</ul>
				<div id="search">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div><!--end sidebar -->

  





