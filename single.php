<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package speedway
 */

get_header();
?>

<div class="container-fluid single-blog-page">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="title-wrapper">
					<h1><?php echo get_the_title(); ?></h1>					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="article-pub-date">
				<p>Published <?php echo get_the_date(); ?></p>
			</div>
			<main id="primary" class="site-main single-article">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				// the_post_navigation(
				// 	array(
				// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'speedway' ) . '</span> <span class="nav-title">%title</span>',
				// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'speedway' ) . '</span> <span class="nav-title">%title</span>',
				// 	)
				// );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>
			</main><!-- #main -->
		</div>
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<div class="row latest-post">
		<?php 
		$args = array(
			'numberposts' => 3,
			'exclude' => [ get_the_ID() ]
		);		   
		$latest_posts = get_posts( $args );

		if( $latest_posts ) {			
			foreach( $latest_posts as $post ) :
				$permalink = get_the_permalink( $post->ID );
			?>
			<div class="col-md-4">
				<?php the_post_thumbnail( 'speedway_blog' ); ?>
				<h1><a href="<?php echo $permalink; ?>"><?php echo wp_trim_words( get_the_title( $post->ID ), 3 ); ?></a></h1>
				<p>
					<?php 
					$string = strip_tags( get_the_excerpt( $post->ID ) );
					if (strlen($string) > 100) {
			
						// truncate string
						$stringCut = substr($string, 0, 100);
						$endPoint = strrpos($stringCut, ' ');
			
						//if the string doesn't contain any space then it will cut without word basis.
						$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
						//$string .= '... <a href="/this/story">Read More</a>';
					}
					echo $string;
					?>
				</p>
			</div>			
			<?php
			endforeach;
		}		
		?>		
	</div>
</div>


<div class="container-fluid promo">	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Looking for High-Quality Fuel?</h1>
				<a href="#" class="btn btn-primary find-a-speedway">Find a Speedway</a> 
			</div>
		</div>
	</div>
</div>

<?php

get_footer();
