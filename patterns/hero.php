<?php
/**
 * Title: Hero
 * Slug: folio/hero
 * Categories: featured
 * Description: A large intro section with heading, text and call to action buttons.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"level":1,"fontSize":"x-large"} -->
	<h1 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Hi, I build things for the web.', 'Hero heading', 'folio' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"fontSize":"large"} -->
	<p class="has-large-font-size"><?php echo esc_html_x( 'Developer focused on WordPress themes, plugins and fast, accessible websites.', 'Hero text', 'folio' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#work"><?php esc_html_e( 'See my work', 'folio' ); ?></a></div><!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Get in touch', 'folio' ); ?></a></div><!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
