<?php

/**
 * Enqueue everything for the mobile navigation.
 */
function siteorigin_mobilenav_enqueue_scripts(){
	wp_enqueue_script('siteorigin-mobilenav', get_template_directory_uri().'/extras/mobilenav/mobilenav.js', array('jquery'), SO_THEME_VERSION);
	wp_localize_script('siteorigin-mobilenav', 'mobileNav', array(
		'search' => array('url' => get_site_url(), 'placeholder' => __('Search', 'siteorigin')),
		'text' => array(
			'navigate' => __('Navigate', 'siteorigin'),
			'back' => __('Back', 'siteorigin'),
			'close' => __('Close', 'siteorigin')
		)
	));
	wp_enqueue_style('siteorigin-mobilenav', get_template_directory_uri().'/extras/mobilenav/mobilenav.css', array(), SO_THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'siteorigin_mobilenav_enqueue_scripts');