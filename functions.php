<?php
/**
 * Folio theme setup.
 *
 * @package folio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'after_setup_theme', 'folio_setup' );
function folio_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_editor_style( 'style.css' );
}

add_action( 'init', 'folio_register_pattern_category' );
function folio_register_pattern_category() {
	register_block_pattern_category(
		'folio',
		array( 'label' => __( 'Folio', 'folio' ) )
	);
}

add_action( 'wp_enqueue_scripts', 'folio_enqueue_styles' );
function folio_enqueue_styles() {
	wp_enqueue_style(
		'folio-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
