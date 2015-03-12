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
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'circuitmedia_site' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'circuitmedia_site' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'circuitmedia_site' ), 'circuitmedia-site', '<a href="http://joe.circuitmedia@gmail.com" rel="designer">Joseph Horton</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
