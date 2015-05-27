 <?php
  /*
  Template Name: Home Page
  */

get_header(); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_background_image_1'); ?>);">
  	<div class="content-wrap row">
  		<h1><?php the_field('hero_headline_1'); ?></h1>
	</div>
</div>

<div class="row clearfix">


  <div class="middle" style="background-image: url(<?php the_field('hero_middle_image'); ?>);"></div>
      
      <div class="short-description">
          <h2>CIRCUIT MEDIA</h2>
          <hr>
          <p><?php the_field('hero_short_description'); ?></p>
      </div>  

</div>

<div class="hero-bottom" style="background-image: url(<?php the_field('hero_background_image_2'); ?>);">
    <div class="content-wrap row">
      <h1><?php the_field('hero_headline_2'); ?></h1>
  </div>
</div>



<?php get_footer(); ?>



