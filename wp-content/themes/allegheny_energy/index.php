<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EAGP
 */

get_header('black'); ?>

<div id="content" class="site-content container margin-bottom large-margin-top">
<div>
	
	<div class="row">
		<div class="col-sm-12 col-md-8">
		

			<header class="page-header">
				<h1 class="page-title">News & Events</h1>
			</header><!-- .page-header -->
		
		
		
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'excerpt' );

					endwhile;
					echo "<div class='large-margin-bottom'>" . the_posts_navigation() . "</div>";

					

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--close of col -->
		<div class="col-sm-12 col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div><!--close of row -->
</div><!-- close of container fluid -->
<?php
get_footer(); 
