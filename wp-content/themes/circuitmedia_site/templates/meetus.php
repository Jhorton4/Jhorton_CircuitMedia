 <?php
  /*
  Template Name: Meet Us
  */

get_header(); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_background_image'); ?>);">
  	<div class="content-wrap row">
  		  <h3><?php the_field('team_headline_1'); ?></h3>
        <hr/>
  		  <p><?php the_field('team_description'); ?></p>
        <h3><?php the_field('team_headline_2'); ?></h3>
        <hr/>
    </div>
</div>

<div class="gallery">

<?php
    // The Arguments
    $args = array(
        'post_type' => 'people',  // Name of Your Custom Post Type
        'posts_per_page' => 12       // Number of Posts to Retrieve
    );
    // Start Loop
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>


<div class="column">
    <div class="feature-image-overlay" style= "background-image: url('<?php the_field('person_headshot'); ?>');" >
      <h3><?php the_title(); ?></h3>
      <p><?php the_field('person_title'); ?></p>
      <a href= "mailto:<?php the_field('person_email_link'); ?>"><span class="genericon genericon-mail"></span></span></a>
      <a href="<?php the_field('person_linkedin_link'); ?>"><span class="genericon genericon-linkedin-alt"></span></a>
    </div>
 </div>

<?php
    // Resets the Loop
    endwhile;
    wp_reset_postdata();
?>
 </div>
<?php get_footer(); ?>



