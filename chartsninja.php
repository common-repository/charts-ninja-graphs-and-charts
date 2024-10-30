<?php
/*
 * Plugin Name: Charts Ninja - Graphs and Charts
 * Plugin URI: https://charts.commoninja.com
 * Description: Add & create <strong>Graphs and Charts</strong> for your Wordpress website on-the-fly. No prior knowledge required. Just a simple integration with Charts Ninja.
 * Version: 2.1.0
 * Author: Common Ninja
 * Author URI: https://www.commoninja.com/
 * License: GPLv2 or later
 */

/*
 * Shortcode to diplay Charts Ninja chart in your site.
 * 
 *	   The list of arguments is below:
 *     'chartid' (string) - Chart GUID
 */
 
function chartsninja_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'chartid' => '95320fe4-2f7a-4b1b-a9b0-4551533dab58'
	), $atts ) );
	
	$html = "<div class=\"commonninja_component\" comp-type=\"chart\" comp-id=\"$chartid\"></div>
	<script type=\"text/javascript\">
	(function() {
		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.src = 'https://cdn.commoninja.com/sdk/latest/commonninja.js';
		document.getElementsByTagName('head')[0].appendChild(script);
	})();
	</script>";

	return $html;
}

add_shortcode( 'chartsninja', 'chartsninja_shortcode' );

?>