<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EAGP
 */
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
   <div class="slider-wrapper parallax-slider" id="carousel-slider-wrapper welcome">
			<?php
				$slider = new WP_Query(array(
				    'post_type'      => 'slider',
				    'order_by'       => 'rand',
				    'posts_per_page' => 1
				));
				if($slider->have_posts()) {
				    // https://getbootstrap.com/examples/carousel/
					echo "<div id='carouselSlider' class='carousel slide' data-ride='carousel' data-interval='3000'>\n";
					echo 	"<div class='carousel-inner' role='listbox'>\n";
					while ( $slider->have_posts() ) : $slider->the_post();
						echo	"<a class='item active'";
						if (esc_html(get_post_meta(get_the_ID(), '_cmb2_slider_link', true)) != '')
							echo " href='" . esc_html(get_post_meta(get_the_ID(), '_cmb2_slider_link', true)) . "'";

						echo    ">\n";
						echo		the_post_thumbnail();
			//			echo		"<div class='container-fluid'>\n";
//					    echo			"<div class='containerBG'>\n";
						echo			"<div id='carouselH' class='carousel-caption'>\n";
						echo				"<h1>" . get_the_title() . "</h1>\n";
						echo				 the_content();
						echo			"</div>\n";
				//		echo		"</div>\n";
//						echo		"</div>\n";
				        echo    "</a>\n";
					endwhile;
				    wp_reset_postdata();
				    $slider = new WP_Query(array(
				        'post_type'      => 'slider',
				        'order_by'       => 'rand',
				        'posts_per_page' => 5,
				        'offset'         => 1
				    ));
				    while ( $slider->have_posts() ) : $slider->the_post();
				        echo	"<a class='item'";
						if (esc_html(get_post_meta(get_the_ID(), '_cmb2_slider_link', true)) != '')
							echo " href='" . esc_html(get_post_meta(get_the_ID(), '_cmb2_slider_link', true)) . "'";

						echo    ">\n";
				        echo		the_post_thumbnail();
				      // echo		"<div class='container-fluid'>\n";
//					    echo			"<div class='containerBG'>\n";
				        echo			"<div class='carousel-caption'>\n";
				        echo				"<h1>" . get_the_title() . "</h1>\n";
				        echo				 the_content();
				        echo			"</div>\n";
					   // echo		"</div>\n";
//				        echo		"</div>\n";
				        echo    "</a>\n";
				    endwhile;
				    echo    "</div>\n";
				    
				    echo "</div>\n";
				}
				wp_reset_postdata();
			?>
		</div>
	
	</div><!--close of row tag-->
</div>

<section id="content" role="main" class="white-background medium-margin-top">
	<article>

		<div class="container-fluid" id="objectives">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container medium-margin-top" id="home-header">
			<div class="row medium-margin-bottom">
				<section class="entry-content">
					<header class="article-header" id="header">
						<h1 class="entry-title text-center text-upper margin-top margin-bottom"><?php the_title(); ?></h1>
					</header>
					
					<?php the_content(); ?>
					<div class="entry-links"><?php wp_link_pages(); ?></div>
				</section>
				<?php /*?><?php get_sidebar(); ?><?php */?>
			</div>
			</div>
			</div>
		</div><!--close of container fluid-->

	<div class="container-fluid">
		<div class="row">
			<img src="<?php echo get_template_directory_uri(); ?>/images/collageEnergy.jpg" alt="Images of Energy in the Southwestern Pennslyvania area" />
		</div>
	</div>
	
	<div class="container medium-margin-top news-post" id="newsletter">
		<div class="row medium-margin-top">
			<h1 class="text-center text-upper medium-margin-bottom" id="news-title">EnergyWatch Newsletter</h1>
			<?php
				$the_query = new WP_Query(array(
					'post_type'      => 'news_post',
					'posts_per_page' => 1,
					'meta_query'     => array(
						array(
							'key'    => '_cmb2_post_or_link',
							'value'  => 'post'
						),
					),
				));

				if ($the_query->have_posts()) {
					while ($the_query->have_posts()) {
						$the_query->the_post();

						echo '<div class="col-md-8 col-md-offset-2 col-sm-12">';
						echo '<img src="' . esc_html(get_post_meta(get_the_ID(), '_cmb2_image', true)) . '" alt="' . get_the_title() . '" class="post-image invisible" />';
							echo '<div class="row margin-top post-content invisible">';
							//	echo '<div class="col-xs-2">';
//									echo '<p class="text-muted text-center">' . get_the_date('M j') . '</p>';
//								echo '</div>';
								echo '<div class="col-xs-12">';
									echo '<h3 class="text-center no-margin">' . get_the_title() . '</h3>';
									echo '<p class="margin-top">' . esc_html(get_post_meta(get_the_ID(), '_cmb2_content', true)) .' <a href="http://us1.campaign-archive.com/?u=3d70a7e788f6f15096e67163b&id=eb422430c3" target="_blank">Read More</a> </p> ';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					}
				}

				wp_reset_postdata();
			?>
			<?php
				$the_query = new WP_Query(array(
					'post_type'      => 'news_post',
					'posts_per_page' => 3,
					'meta_query'     => array(
						array(
							'key'    => '_cmb2_post_or_link',
							'value'  => 'link'
						),
					),
				));

				if ($the_query->have_posts()) {
					while ($the_query->have_posts()) {
						$the_query->the_post();

						echo '<div class="col-md-8 col-md-offset-2 col-sm-12 news-link invisible">';
							echo '<div class="row thin-margin-bottom">';
								echo '<div class="col-xs-2">';
									echo '<p class="text-muted text-center">' . get_the_date('M j') . '</p>';
								echo '</div>';

								echo '<div class="col-xs-10">';
									echo '<a href="' . esc_html(get_post_meta(get_the_ID(), '_cmb2_url', true)) . '" target="_blank">' . get_the_title() . '</a>';
									echo '<p class="text-muted"><em>' . esc_html(get_post_meta(get_the_ID(), '_cmb2_source', true)) . '</em></p>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					}
				}

				wp_reset_postdata();
			?>
		</div>	
	</div>
	<div class="thin-margin-top container">
		<div class="row">
			<h3 class="text-center margin-bottom">Archives</h3>
			
		</div>
		<div class="row">
			<div class="no-padding col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
			<ul style="list-style: none; margin: 0 0; padding:0 .25em;">
				<li><a href="http://us1.campaign-archive2.com/?u=3d70a7e788f6f15096e67163b&id=f4958b53d3" target="_blank"><strong>09/11/17</strong> - EnergyWatch News and Events | Sep 2017</a></li>
				<li><a href="http://us1.campaign-archive2.com/?u=3d70a7e788f6f15096e67163b&id=eb422430c3" target="_blank"><strong>09/13/16</strong> - EnergyWatch News and Events | Sep 2016</a></li>
				<li><a href="http://us1.campaign-archive2.com/?u=3d70a7e788f6f15096e67163b&id=22bae4f1aa" target="_blank"><strong>04/19/16</strong> - EnergyWatch News and Events | Apr 2016</a></li>
				<li><a href="http://us1.campaign-archive2.com/?u=3d70a7e788f6f15096e67163b&id=272a931940" target="_blank"><strong>10/20/15</strong> - EnergyWatch News and Events | Oct 2015</a></li>
				<li><a href="http://us1.campaign-archive2.com/?u=3d70a7e788f6f15096e67163b&id=4c26785d55" target="_blank"><strong>08/17/15</strong> - EnergyWatch News and Events | Aug 2015</a></li>
				</ul>
			</div>
			<div class="no-padding col-lg-4 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
			<ul style="list-style: none; margin: 0 0; padding:0 .25em;">
				<li><a href="http://us1.campaign-archive2.com/?u=3d70a7e788f6f15096e67163b&id=e16155a692" target="_blank"><strong>04/08/15</strong> - EnergyWatch News and Events | Apr 2015</a></li>
				<li><a href="http://us1.campaign-archive2.com/?u=3d70a7e788f6f15096e67163b&id=4f34573b8c" target="_blank"><strong>02/02/15</strong> - EnergyWatch News and Events | Feb 2015</a></li>
				<li><a href="http://us1.campaign-archive2.com/?u=3d70a7e788f6f15096e67163b&id=a42ffe8672" target="_blank"><strong>10/16/14</strong> - EnergyWatch News and Events | Oct 2014</a></li>
				<li><a href="http://us1.campaign-archive2.com/?u=3d70a7e788f6f15096e67163b&id=d7e3ebe503" target="_blank"><strong>08/14/14</strong> - EnergyWatch News and Events | Aug 2014</a></li>
				<li><a href="http://us1.campaign-archive2.com/?u=3d70a7e788f6f15096e67163b&id=206f4811fa" target="_blank"><strong>06/05/14</strong> - EnergyWatch News and Events | Jun 2014</a></li>
				</ul>
			</div>
			
		</div>
		
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<img src="<?php echo get_template_directory_uri(); ?>/images/FooterEnergyHouse.jpg" alt="Images of an Energy efficient house" />
		</div>
	</div>

</article>				
	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>
</section>
<script type="text/javascript">
	// Adds margin-top to main content to create parallax effect w/ slider
	// We do this here instead of main.js because jQuery is slowwww
	//window.onload = function() {	
		//var carouselCaptionHeight = document.getElementById('carouselH').offsetHeight;
//		var half = 4.5;
//		var halfCarouselCaptionHeight = carouselCaptionHeight / half;
		//var sliderHeight = document.getElementById('carousel-slider-wrapper').offsetHeight;
		//document.getElementById('content').style.marginTop = sliderHeight + "px";
	//}
	// console.log(sliderHeight);
</script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<?php get_footer(); ?>
