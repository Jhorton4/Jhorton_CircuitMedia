 <?php
  /*
  Template Name: Home Page Template
  */

get_header(); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_background_image'); ?>);">
  	<div class="content-wrap row">
  		<h1><?php the_field('hero_headline'); ?></h1>
  		<p><?php the_field('hero_subhead'); ?></p>
  		<a class="button" href="<?php the_field('hero_button_link'); ?>"><?php the_field ('hero_button_label'); ?></a>
	</div>
</div>

<div class="drivers">
 	<div class="row">

 <!-- first column -->
		<div class="driver-column">
   			<img src="<?php the_field('driver_icon_1'); ?>">
   			<h2><?php the_field('driver_title_1'); ?></h2>
   			<p>><?php the_field('driver_description_1'); ?></p>
		</div>

<!-- end of first column -->



<!-- second column -->

		<div class="driver-column">
   			<img src="<?php the_field('driver_icon_2'); ?>">
   			<h2><?php the_field('driver_title_2'); ?></h2>
   			<p>><?php the_field('driver_description_2'); ?></p>
		</div>

<!-- end of second column -->



<!-- third column -->

		<div class="driver-column">
   			<img src="<?php the_field('driver_icon_3'); ?>">
   			<h2><?php the_field('driver_title_3'); ?></h2>
   			<p>><?php the_field('driver_description_3'); ?></p>
		</div>

<!-- end of third column -->

	</div>
</div>

<?php get_footer(); ?>



