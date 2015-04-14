 <?php
  /*
  Template Name: Products
  */

get_header(); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_background_image'); ?>);">
    <div class="content-wrap row">
        <h3><?php the_field('products_headline'); ?></h3>
        <hr/>
    </div>
</div>

<div class="column">
    <div class="feature-image-overlay" style= "background-image: url('<?php the_field('product_feature_image'); ?>');" >
      <h3><?php the_title(); ?></h3>
      <p><?php the_field('product_title'); ?></p>
    </div>
 </div>


<?php get_footer(); ?>


