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
            'post_type' => 'work',  // Name of Your Custom Post Type
            'posts_per_page' => 9       // Number of Posts to Retrieve
        );
        // Start Loop
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="column">
            <div class="overlay">
                <div class="feature-image-overlay" style= "background-image: url('<?php the_field('piece_feature_image'); ?>');">
                    <div class="more-info">

                        <h2><?php the_title(); ?></h2>
                         <p><?php the_field('piece_title'); ?></p>
                          <hr>
                    </div>
                </div>
            </div>
        </div>

          <?php
              // Resets the Loop
              endwhile;
              wp_reset_postdata(); ?>
</div>
          <?php get_footer(); ?>



