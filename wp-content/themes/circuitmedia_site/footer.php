<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package circuitmedia-site
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
			<a href="<?php echo esc_url( __( 'mailto:info@circuitmedia.com', 'circuitmedia_site' ) ); ?>"><?php printf( __( 'Say Hi'), 'WordPress' ); ?></a>
			<span class="sep"></span>
			
		</div><!-- .site-info -->
	
	<nav id="site-navigation" class="footer-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</nav>

	<nav id="site-navigation" class="social-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
			</nav>




	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
