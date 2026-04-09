<?php
/**
 * The footer template file
 *
 * @package Subtle
 */

?>
<footer class="site-footer">
	<?php
	$footer_column_sidebars = array( 'footer-column-1', 'footer-column-2', 'footer-column-3' );
	$active_footer_columns  = array_values( array_filter( $footer_column_sidebars, 'is_active_sidebar' ) );
	?>
	<?php if ( $active_footer_columns ) : ?>
		<div class="footer-columns">
			<?php foreach ( $active_footer_columns as $sidebar_id ) : ?>
				<div class="footer-column <?php echo esc_attr( $sidebar_id ); ?>">
					<?php dynamic_sidebar( $sidebar_id ); ?>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-bottom' ) ) : ?>
		<div class="footer-bottom">
			<?php dynamic_sidebar( 'footer-bottom' ); ?>
		</div>
	<?php endif; ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>
