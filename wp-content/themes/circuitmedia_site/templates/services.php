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


<div class="column">
    <div class="feature-image-overlay" style= "background-image: url('<?php the_field('ability_icon'); ?>');" >
      <h3><?php the_title(); ?></h3>
      
      <p><?php the_field('ability_skill_1'); ?></p>
      <p><?php the_field('ability_description_1'); ?></p>
      
      <p><?php the_field('ability_skill_2'); ?></p>
      <p><?php the_field('ability_description_2'); ?></p>
      
      <p><?php the_field('ability_skill_3'); ?></p>
      <p><?php the_field('ability_description_3'); ?></p>

    </div>
 </div>

<?php
    // Resets the Loop
    endwhile;
    wp_reset_postdata();
?>
 </div>
<?php get_footer(); ?>



