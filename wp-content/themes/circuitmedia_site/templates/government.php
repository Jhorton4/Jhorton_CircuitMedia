 <?php
  /*
  Template Name: Government
  */

get_header(); ?>

<div class="title">
    <div class="description row">
        <h3><?php the_field('government_headline'); ?></h3>
        <hr>
        <p><?php the_field('government_description'); ?></p>
    </div>
</div>

<div class="gallery">

<?php
    // The Arguments
    $args = array(
        'post_type' => 'government',  // Name of Your Custom Post Type
        'posts_per_page' => 8       // Number of Posts to Retrieve
    );
    // Start Loop
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>

        <div class="column">
            <div class="overlay">
              <a href="<?php the_field('government_link'); ?>"><span class="feature-image-overlay" style= "background-image: url('<?php the_field('government_image'); ?>'); ">
                    <div class="more-info">

                        <h2><?php the_field('government_title'); ?></h2>
                         
                    </div>
                  </span></a>
            </div>
        </div>

          <?php
              // Resets the Loop
              endwhile;
              wp_reset_postdata(); ?>
</div>
          <?php get_footer(); ?>



