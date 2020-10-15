<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package speedway
 */

?>

</div>
<!-- Container end here -->

<!-- Footer -->
<div class="container-fluid footer">
	<div class="container">
		<div class="row ">
			<div class="col-xs-12 col-sm-4 col-md-4">
				<?php 
				// Footer left sidebar
				if( is_active_sidebar( 'footer-left-sidebar' ) ) {
					dynamic_sidebar( 'footer-left-sidebar' );
				}
				?>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<?php 
				// Footer middle sidebar
				if( is_active_sidebar( 'footer-middle-sidebar' ) ) {
					dynamic_sidebar( 'footer-middle-sidebar' );
				}
				?>
			</div>
			<div class="col-sm-12 col-md-4">
				<?php 
				// Footer right sidebar
				if( is_active_sidebar( 'footer-right-sidebar' ) ) {
					dynamic_sidebar( 'footer-right-sidebar' );
				}
				?>
			</div>
		</div>		
	</div>
</div>
<!-- Footer end here -->

<!-- Footer bottom -->
<div class="container-fluid footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-social">
					<ul>
						<li><a href=""><img src="<?php echo get_template_directory_uri() . '/img/Facebook.png'; ?>"></a></li>
						<li><a href=""><img src="<?php echo get_template_directory_uri() . '/img/Linkedin.png'; ?>"></a></li>
						<li><a href=""><img src="<?php echo get_template_directory_uri() . '/img/Instagram.png'; ?>"></a></li>
						<li><a href=""><img src="<?php echo get_template_directory_uri() . '/img/Twitter.png'; ?>"></a></li>
						<li><a href=""><img src="<?php echo get_template_directory_uri() . '/img/Youtube.png'; ?>"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer bottom end here -->

<?php wp_footer(); ?>
</body>
</html>
