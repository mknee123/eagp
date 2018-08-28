<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EAGP
 */

?>

	</div> <!--#content -->
</div><!-- #page -->
	
<footer id="footer" class="footer-sticky black-background padding-top-bottom">
	<div class="container-fluid" style="max-width: 1440px;">
		<div class="row">
			<div class="col-xs-12">
				<p class="footer-logo">
				<img src="<?php echo get_template_directory_uri() ?>/images/EnergyAllianceLogo_Pgh_STACKED_WHITE.svg" alt="<?php bloginfo('name') ?>" class="center-block" title="Energy Alliance of Greater Pittsburgh Logo" />
				</p>
				<h4 class="margin-top margin-bottom text-center">
					<a href="mailto:cdobbins@alleghenyconference.org">Contact Us</a>
				</h4>
				
			</div>
		</div>
	</div>	
</footer><!-- #colophon -->

<!--</section>-->
<?php wp_footer(); ?>
	
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
</body>
</html>
