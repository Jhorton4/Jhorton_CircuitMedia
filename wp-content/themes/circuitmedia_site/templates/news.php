 <?php
  /*
  Template Name: News
  */

get_header(); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_background_image'); ?>);">
  	<div class="content-wrap row">
  		  <h3><?php the_field('article_headline'); ?></h3>
        <hr/>
    </div>
</div>

<div class="gallery">

<?php
    // The Arguments
    $args = array(
        'post_type' => 'article',  // Name of Your Custom Post Type
        'posts_per_page' => 12       // Number of Posts to Retrieve
    );
    // Start Loop
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>


<div class="column">
    <div class="feature-image-overlay" style= "background-image: url('<?php the_field('article_feature_image'); ?>');" >
      <h3><?php the_title(); ?></h3>
      <p><?php the_field('article_short_description'); ?></p>
    </div>
 </div>

<?php
    // Resets the Loop
    endwhile;
    wp_reset_postdata();
?>
 </div>
<?php get_footer(); ?>



