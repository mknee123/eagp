<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EAGP
 */

get_header('black'); ?>
<section id="content" role="main" class="large-margin-bottom">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container-fluid">
				<div class="row">
					<div class="featured-image page-image col-xs-12 margin-bottom">
						<?php echo the_post_thumbnail(); ?>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<section class="entry-content <?php echo ((is_active_sidebar('side_widget_area')) ? 'col-sm-8 col-xs-12' : 'col-sm-12'); ?>">
						<header class="article-header" id="header">
							<h1 class="entry-title text-upper text-center margin-bottom"><?php the_title(); ?></h1>
						</header>
						<?php the_content(); ?>
						<div class="entry-links"><?php wp_link_pages(); ?></div>
					</section>
					<?php /*?><?php get_sidebar(); ?><?php */?>
				</div>
			</div>
		</article>
		<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>
</section>

<?php

get_footer();
