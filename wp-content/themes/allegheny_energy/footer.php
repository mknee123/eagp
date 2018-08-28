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
				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					#mc_embed_signup{background:transparent; clear:left; font:.75em; Helvetica,Arial,sans-serif; }
					/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	

					#mc_embed_signup form { max-width: 300px; width:100%; margin: 0 auto !important; padding: 10px 0 10px 0; }
					#mc_embed_signup input.email { border-radius: 0px;  -webkit-border-radius: 0;
						-moz-border-radius: 0px; padding: 5px 10px; margin: 0;  width: 100%; text-align: center; }
					
					#mc_embed_signup input.button {
						display: block;
						width: 100%;
						margin: 0 !important;
						min-width: 90px;
						padding: 0;
					}
					
					#mc_embed_signup .button {
						clear: both;
						background-color:#1a77b9 !important;
						border: 0 none;
						border-radius: 0; -webkit-border-radius: 0;
						-moz-border-radius: 0px; }
					
					
				</style>
				<div id="mc_embed_signup">
				<h4 class="text-center" style="color:#fff;">Register for our e-Newletter</h4>
				<form action="//energyalliancegreaterpittsburgh.us1.list-manage.com/subscribe/post?u=3d70a7e788f6f15096e67163b&amp;id=8b2384e6d5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">

					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3d70a7e788f6f15096e67163b_8b2384e6d5" tabindex="-1" value=""></div>
					<div class="clear"><input type="submit" value="Join" name="join" id="mc-embedded-subscribe" class="button"></div>
					</div>
				</form>
				</div>

				<!--End mc_embed_signup-->
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
