<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EAGP
 */

get_header('black'); ?>
<div id="content" class="site-content container large-margin-top">
<div class="row">
<div class="col-sm-12 col-md-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<div id="related_posts" class="margin-bottom"><h3>Related Posts</h3><div class="row">
			<?php $orig_post = $post;
			global $post;
			$categories = get_the_category($post->ID);
			if ($categories) {
			$category_ids = array();
			foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
			$args=array(
			'category__in' => $category_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page'=> 3, // Number of related posts that will be shown.
			'ignore_sticky_posts'=>1
			);
			$my_query = new wp_query( $args );
			if( $my_query->have_posts() ) {
			//echo '<span>test</span>';
			while( $my_query->have_posts() ) {
			$my_query->the_post();?>
			<div class="col-sm-4">

			<div class="relatedcontent grey-background internal-padding">
			<h4><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
			<small><?php the_time('M j, Y') ?></small>
			</div>
			
			</div>
			<?
			}
			//echo '</div></div>';
			}
			}
			$post = $orig_post;
			wp_reset_query(); ?>
			</div></div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!--close of col-->

<div class="col-sm-12 col-md-4">
<?php
get_sidebar(); ?>
</div><!--close of col-->
</div><!--close of row-->

<?php
get_footer();
