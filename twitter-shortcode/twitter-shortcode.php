<?php
/*
Plugin Name: Twitter-shortcode
Version: 0.1-alpha
Description: PLUGIN DESCRIPTION HERE
Author: YOUR NAME HERE
Author URI: YOUR SITE HERE
Plugin URI: PLUGIN SITE HERE
Text Domain: twitter-shortcode
Domain Path: /languages
*/

add_shortcode( 'twitter', 'twitter_shortcode' );

function twitter_shortcode( $p, $content ) {
	$content = str_replace( "@", '', $content ); // @をつねに削除

	if ( !preg_match( "/^[0-9a-z_]{1,15}$/i", $content ) ) {
		return;
	}

	return sprintf(
		'<a href="https://twitter.com/%s">@%s</a>',
		esc_attr( $content ),
		esc_html( $content )
	);
}

