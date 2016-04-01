				</main><!-- #main -->
    </div><!-- /.content -->
  </div><!-- /.container -->
</div><!-- /.wrap -->

<footer class="content-info" role="contentinfo">
<?php // declare variables
	$uuatheme_copyright_text = get_theme_mod('uuatheme_copyright_text');
	$uuatheme_welcoming_congregation_link = get_theme_mod('uuatheme_welcoming_congregation_link');
	$uuatheme_green_sanctuary_link = get_theme_mod('uuatheme_green_sanctuary_link');
?>

	<div class="spacer container">
		&nbsp;
	</div>

  <div class="container">
	  <div class="row footer-widgets">
	    <?php dynamic_sidebar('sidebar-footer-one'); ?>
	    <?php dynamic_sidebar('sidebar-footer-two'); ?>
	    <?php dynamic_sidebar('sidebar-footer-three'); ?>
	    <section class="col-md-3 affiliation-logos widget text-3 widget_text">			
		    <a href="http://cuc.ca" title="Canadian Unitarian Council"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/cuc-flag.png" alt="Canadian Unitarian Council Logo" class="img-responsive uua-flag"></a>
	    	<?php if ( $uuatheme_welcoming_congregation_link = get_theme_mod('uuatheme_welcoming_congregation_link') ) : ?>
					<a href="<?php echo esc_url($uuatheme_welcoming_congregation_link); ?>" title="Welcoming Congregation"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/welcoming-congregation.png" alt="Welcoming Congregation Logo" class="welcoming-congregation-logo"></a>
				<?php endif; ?>
	    	<?php if ( $uuatheme_green_sanctuary_link = get_theme_mod('uuatheme_green_sanctuary_link') ) : ?>
					<a href="<?php echo esc_url($uuatheme_green_sanctuary_link); ?>" title="Green Sanctuary"><img src="<?php echo get_template_directory_uri();?>/assets/img/GreenSanctuaryLogo.png" alt="Green Sanctuary Logo" class="green-sanctuary-logo"></a>
				<?php endif; ?>
			</section>
	  </div>
	  
    <div class="footer-details">
		  <div class="col-md-4">
			  <div class="copyright"><?php if ( $uuatheme_copyright_text = get_theme_mod('uuatheme_copyright_text') ) { ?>
					<?php echo $uuatheme_copyright_text; ?>
				<?php } else { ?>
					&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>
				<?php } ?>
			  </div>
		  </div>
		  <div class="col-md-8 footer-navigation">
  			<?php get_template_part( 'partials/social-media-icons' ); ?>

		    <?php
		      if (has_nav_menu('footer_navigation')) :
		        wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'nav nav-pills'));
		      endif;
		    ?>			  
		  </div>
	  </div>
  </div>
  
</footer>
	
<?php wp_footer(); ?>

	<script>
		jQuery(document).ready(function($) {

			/* Toggles for search and location */
			$('.location-toggle').click(function () {
		    $('.slide-location').toggleClass('active');
			});

			$('.search-toggle').click(function () {
		    $('.slide-search').toggleClass('active');
			});

			
			/* MatchHeights */			
			$(function() {
		    $('.widget .thumbnail, .match').matchHeight();
			});
			
		  // FITVIDS - Target your .container, .wrapper, .post, etc.
	    $(".wrap").fitVids();
			
			/*  Smooth scrolling anchor links */
			$('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
			        || location.hostname == this.hostname) {
			
			        var target = $(this.hash);
			        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			           if (target.length) {
			             $('html,body').animate({
			                 scrollTop: target.offset().top
			            }, 1000);
			            return false;
			        }
			    }
			});
			
			
		});
	</script>

</body>
</html>
