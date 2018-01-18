<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php //get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<section class="footer-1">
			<div class="container">
				<?php get_template_part("footer-widget");?>
			</div>
		</section>
		<section class="footer-2">
			<div class="container py-3 ">
				<div class="site-info">
					Copyright &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
					- All Rights Reserved.
				</div><!-- close .site-info -->
			</div>
		</section>

	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
