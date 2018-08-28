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
<div class="container-fluid margin-top thin-margin-bottom">

<div class="row">
<div class="col-md-5 col-sm-12">

	<div class="row">
		<div class="featured-image thin-margin-top page-image2 col-xs-12">
			<?php echo the_post_thumbnail(); ?>
			<footer class="entry-footer thin-margin-top margin-bottom">
			<?php allegheny_energy_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		</div>	
	</div>
	
</div>
<div class="col-md-7 col-sm-12">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content margin-top">
		<?php
			the_excerpt( sprintf(
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
	<div class="entry-meta"><small>
			<?php allegheny_energy_posted_on(); ?>
			</small>
		</div><!-- .entry-meta -->
	</div>
</div><!--close of row-->

	
</div><!--close of container-fluid-->	
</article><!-- #post-<?php the_ID(); ?> -->
<hr>
