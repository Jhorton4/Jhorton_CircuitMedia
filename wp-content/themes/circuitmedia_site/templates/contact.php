 <?php
  /*
  Template Name: Contact
  */

get_header(); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_background_image'); ?>);">
    <div class="content-wrap row">
        <h3><?php the_field('contact_headline'); ?></h3>
        <hr/>
    </div>
</div>

  <div class="row top clearfix">
      <div class="column contact">
      </div>
        <!-- Google Map Embed -->
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3069.61106470622!2d-104.988004!3d39.703447999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c7ed91d6f8fdf%3A0x231eaf9731fdbbf8!2sCircuit+Media+LLC!5e0!3m2!1sen!2sus!4v1425156237218" width="600" height="450" frameborder="0" style="border:0"></iframe>
      </div>
  </div>


<?php get_footer(); ?>



