 <?php
  /*
  Template Name: Products
  */

get_header(); ?>

<div class="title">
    <div class="description row">
        <h3><?php the_field('products_headline'); ?></h3>
        <hr/>
    </div>
</div>

<div class="row clearfix">

<?php
    // The Arguments
    $args = array(
        'post_type' => 'products',  // Name of Your Custom Post Type
        'posts_per_page' => 4       // Number of Posts to Retrieve
    );
    // Start Loop
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>


<div class="products">
    <div class="feature-image-overlay" style= "background-image: url('<?php the_field('product_feature_image'); ?>');" ></div>
</div>      

    <div class="product-description">
      <h2><?php the_title(); ?></h2>
      <p><?php the_field('product_description'); ?></p>
    </div>

<?php
    // Resets the Loop
    endwhile;
    wp_reset_postdata();
?>
 </div>
<?php get_footer(); ?>






