<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package circuitmedia-site
 */
    <body>
    	<div id="wrapper">
    		<div id="header"></div>
    		<div id="content"></div>
    		<div id="footer"></div>
    	</div>
    </body>

?>
<footer>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_footer(); ?>
</footer>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'circuitmedia_site' ); ?></a>

<div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="row">

	  	<div class="bottom-logo">
		 	<img src="<?php bloginfo('template_directory'); ?>/images/circuitmediagreen02.png" alt="" />
	  	</div>

	  	<div class="say-hi">
			<a href="<?php echo esc_url( __( 'mailto:info@circuitmedia.com', 'circuitmedia_site' ) ); ?>"><?php printf( __( 'Say Hi'), 'WordPress' ); ?></a>
		</div>


		<div class="social-navigation">
			<nav id="site-navigation" class="social-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
			</nav>

		</div>

	</div>

		<p class="copyright">© Circuit Media  <?php echo date("Y"); ?></p>


</footer>


	<div id="content" class="site-content">


</body>
</html>
