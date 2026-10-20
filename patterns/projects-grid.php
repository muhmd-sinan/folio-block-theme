<?php
/**
 * Title: Projects grid
 * Slug: folio/projects-grid
 * Categories: featured
 * Description: Three-column grid of project cards.
 */
?>
<!-- wp:group {"align":"wide","anchor":"work","layout":{"type":"constrained","wideSize":"1140px"}} -->
<div id="work" class="wp-block-group alignwide">
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Selected work', 'folio' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"folio-card","style":{"spacing":{"padding":{"all":"var:preset|spacing|30"}},"border":{"width":"1px","color":"#e7e5e4","radius":"8px"}}} -->
			<div class="wp-block-group folio-card">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html( sprintf( /* translators: %d: project number */ __( 'Project %d', 'folio' ), $i ) ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'Short description of the problem, your approach and the result.', 'folio' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endfor; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
