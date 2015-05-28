 <?php
  /*
  Template Name: Work
  */

get_header(); ?>

<div class="title">
    <div class="description row">
        <h3><?php the_field('work_headline'); ?></h3>
        <hr>
        <p><?php the_field('work_description'); ?></p>
    </div>
</div>

<div class="gallery-half">

<?php
    // The Arguments
    $args = array(
        'post_type' => 'category',  // Name of Your Custom Post Type
        'posts_per_page' => 4       // Number of Posts to Retrieve
    );
    // Start Loop
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>

        <div class="column half">
            <div class="overlay">
                <div class="feature-image-overlay" style= "background-image: url('<?php the_field('category_image'); ?>');">
                    <div class="more-info">

                        <h2><?php the_field('category_icon'); ?></h2>
                         <p><?php the_field('category_name'); ?></p>
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



