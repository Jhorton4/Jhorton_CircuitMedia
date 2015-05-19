 <?php
  /*
  Template Name: News
  */

get_header(); ?>

<div class="title">
    <div class="description row">
  		  <h3><?php the_field('article_headline'); ?></h3>
        <hr/>
    </div>
</div>

<div class="row clearfix">
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


    <div class="single-image">
        <div class="feature-image-overlay" style= "background-image: url('<?php the_field('article_feature_image'); ?>');" ></div>
    </div>

            <div class="article-description">
              <h2><?php the_field('article_title'); ?></h2>
              <hr>
              <p><?php the_field('article_short_description'); ?></p>
            </div> 

<?php
    // Resets the Loop
    endwhile;
    wp_reset_postdata();
?>
 </div>
<?php get_footer(); ?>



