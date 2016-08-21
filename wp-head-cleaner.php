<?php
	/**
	* Plugin Name: WP Head Cleaner
	* Plugin URI: http://bendesoft.hu/en
	* Description: Remove unnecessary tags from header
	* Version: 1.0
	* Author: BendeSoft (Istvan Benko)
	* Author URI: http://bendesoft.hu/en
	* License: GPL-2.0+
 	* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
	*/

	function bs_headercleanup () {
	    remove_action('wp_head', 'wp_generator'); // remove wordpress version
	    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 ); // remove shortlink

	    remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
	    remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer link

	    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );  // remove emojis
	    remove_action( 'wp_print_styles', 'print_emoji_styles' );   // remove emojis

	    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head'); // remove the / and previous post links

	    remove_action('wp_head', 'feed_links', 2); // remove rss feed links
	    remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
	}
	add_action('after_setup_theme', 'bs_headercleanup');

?>