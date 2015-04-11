 <?php
  /*
  Template Name: Store
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

<div class="row">

<?php
    // The Arguments
    $args = array(
        'post_type' => 'store',  // Name of Your Custom Post Type
        'posts_per_page' => 8       // Number of Posts to Retrieve
    );
    // Start Loop
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>

<!-- // This Repeats 3 Times-->

<div class="column third">
    <a class="store-image-overlay" href="<?php the_permalink(); ?>"><img src="<?php the_field('item_feature_image'); ?>" /></a>
    <a href="<?php the_permalink(); ?>"<h3><?php the_title(); ?></h3></a>
    <p><?php the_field('item_title'); ?></p>
 </div>

<?php
    // Resets the Loop
    endwhile;
    wp_reset_postdata();
?>
</div>

<?php get_footer(); ?>



