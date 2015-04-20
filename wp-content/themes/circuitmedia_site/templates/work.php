 <?php
  /*
  Template Name: Work
  */

get_header(); ?>

<div class="title">
    <div class="description row">
        <h3><?php the_field('work_headline'); ?></h3>
        <hr/>
    </div>
</div>


<div class="gallery">

<?php
    // The Arguments
    $args = array(
        'post_type' => 'works',  // Name of Your Custom Post Type
        'posts_per_page' => 9       // Number of Posts to Retrieve
    );
    // Start Loop
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>


<div class="column">
    <div class="feature-image-overlay" style= "background-image: url('<?php the_field('piece_feature_image'); ?>');" >
      <h3><?php the_title(); ?></h3>
    </div>
 </div>

<?php
    // Resets the Loop
    endwhile;
    wp_reset_postdata();
?>
</div>

<?php get_footer(); ?>



<div class="column third">
    <a class="feature-image-overlay" href="<?php the_permalink(); ?>"><img src="<?php the_field('portfolio_feature_image'); ?>" /></a>
    <a href="<?php the_permalink(); ?>"<h3><?php the_title(); ?></h3></a>
    <p><?php the_field('portfolio_short_description'); ?></p>
 </div>



