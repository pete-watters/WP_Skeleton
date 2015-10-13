<?php
/**
 * WP-Skeleton template for displaying the footer
 *
 * @package WordPress
 * @subpackage WP-Skeleton
 * @since WP-Skeleton 1.0
 */
?>

				<ul class="footer-widgets"><?php
					if ( function_exists( 'dynamic_sidebar' ) ) :
						dynamic_sidebar( 'footer-sidebar' );
					endif; ?>
				</ul>

			</div>
		<?php wp_footer(); ?>
	</body>
</html>