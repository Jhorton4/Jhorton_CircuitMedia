 <?php
  /*
  Template Name: Feature
  */

get_header(); ?>


<div class="row clearfix">
    <?php
        // The Arguments
        $args = array(
            'post_type' => 'feature',  // Name of Your Custom Post Type
            'posts_per_page' => 12       // Number of Posts to Retrieve
        );
        // Start Loop
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
    ?>

    <div class="title">
        <div class="description row">
            <h3><?php the_field('feature_headline'); ?></h3>
            <hr/>
        </div>
    </div>

    <div class="feature-image">
        <div class="feature-image-overlay" style= "background-image: url('<?php the_field('feature_image'); ?>');" ></div>
    </div>

            <div class="feature-article">
              <p><?php the_field('feature_article'); ?></p>
            </div> 

  </div>

<?php
    // Resets the Loop
    endwhile;
    wp_reset_postdata();
?>
 </div>
<?php get_footer(); ?>



