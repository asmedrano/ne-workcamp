<?php
add_shortcode('shed_item', 'shedItem');

function shedItem($atts){
	$atts = shortcode_atts(
		array(
			'image' => '',
			'title' => '',
			'description' => '<!-->',
			'price' => 0,
			'pp_button_id' => ''
		), $atts);
	
	$out = '
		<div class="shed-item">
			<h4>%s</h4>

			<a class="shed-item-img" style="background-image:url(%s);"></a>
			<div class="shed-meta">
			<p>%s</p>
			<h5>$%s</h5>
			<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="%s">
			<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
			</div>
		</div>
		<div class="clearfix"></div>
	';

	return sprintf($out, 
		$atts['title'],
		$atts['image'],
		$atts['description'],
		$atts['price'],
		$atts['pp_button_id']
	);

}

?>
