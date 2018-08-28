<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EAGP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container-fluid margin-bottom">

<div class="row">
<div class="col-sm-12">

	<div class="row">
	<div class="featured-image2">
		<div class="featured-image page-image2 col-xs-12 margin-bottom">
			<?php echo the_post_thumbnail(); ?>		
		</div>	
	</div>	
	</div>
	
</div>
<div class="col-sm-12">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
		endif; ?>
		<div class="entry-meta"><small>
			<?php allegheny_energy_posted_on(); ?>
			</small>
	</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<hr>
	<div class="entry-content margin-top">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'allegheny_energy' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'allegheny_energy' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<footer class="entry-footer margin-bottom">
			<?php allegheny_energy_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</div>
	
</div><!--close of row-->

	
</div><!--close of container-fluid-->	
</article><!-- #post-<?php the_ID(); ?> -->
<hr>
