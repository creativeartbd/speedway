<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package speedway
 */

get_header();
?>
<!--  Container -->
<div class="container-fluid blog-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title">Speedway News</h1>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<main id="primary" class="site-main speedway-blog">
				<?php
				if ( have_posts() ) :
					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;
					/* Start the Loop */
					?>
					<div class="row">
					<?php
					while ( have_posts() ) :
						the_post();
						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						?>					
						<div class="col-md-6">	
							<div class="speedway-article">
								<?php
								get_template_part( 'template-parts/content', 'all' );
								?>
							</div>								
						</div>
						<?php
					endwhile;
					?>
					</div>
					<?php
					the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
			</main><!-- #main -->
		</div> 	
		<!-- col-md-12 end here -->
	</div>
	<!-- row end here -->
</div>
<!-- Container end here -->

<div class="container-fluid promo">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Looking for High-Quality Fuel?</h1>
				<a href="" class="btn btn-primary find-a-speedway">Find a Speedway</a>
			</div>
		</div>
	</div>
</div>
<?php

get_footer();
