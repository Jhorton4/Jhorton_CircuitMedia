 <?php
  /*
  Template Name: Services
  */

get_header(); ?>

<div class="title">
    <div class="description row">
        <h3><?php the_field('services_headline'); ?></h3>
        <hr/>
    </div>
</div>

<div class="gallery">

<?php
    // The Arguments
    $args = array(
        'post_type' => 'abilities',  // Name of Your Custom Post Type
        'posts_per_page' => 4       // Number of Posts to Retrieve
    );
    // Start Loop
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>

</div>

      <div class="row clearfix">
        <div class="skill-title">
          <h2><?php the_field('ability_title'); ?></h2>
          <hr>
        </div>
      
            <div class="service-descriptions">

                <div class="description-left">
                  <h1><?php the_field('ability_description_title_1'); ?></h1>
                  <hr>
                  <p><?php the_field('ability_description_1'); ?></p>
                </div>

                 
                <div class="description-middle">  
                  <h1><?php the_field('ability_description_title_2'); ?></h1>
                  <hr>
                  <p><?php the_field('ability_description_2'); ?></p>
                </div>


                <div class="description-right">
                  <h1><?php the_field('ability_description_title_3'); ?></h1>
                  <hr>
                  <p><?php the_field('ability_description_3'); ?></p>
                </div>  

            </div>
          
      </div>

<?php
    // Resets the Loop
    endwhile;
    wp_reset_postdata();
?>
 </div>
<?php get_footer(); ?>



