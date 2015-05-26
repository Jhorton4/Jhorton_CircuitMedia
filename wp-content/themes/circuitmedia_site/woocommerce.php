<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package circuitmedia-site
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="title">
  		  <h3>STORE</h3>
        <hr/>
</div>

	<div class="row clearfix">
		<div class="woocommerce">
			<?php woocommerce_content(); ?>
	    </div>
	</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
