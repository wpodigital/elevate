<?php
/**
 * Elevate WPO theme setup.
 *
 * @package Elevate_WPO
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function elevate_wpo_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'elevate_wpo_setup' );

function elevate_wpo_assets() {
	wp_enqueue_style( 'elevate-wpo-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'elevate_wpo_assets' );
