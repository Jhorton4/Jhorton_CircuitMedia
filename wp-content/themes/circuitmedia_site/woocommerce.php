<?php


get_header(); ?>

<div class="title">
    <div class="description row">
        <h3><?php the_field('product_headline'); ?></h3>
        <hr/>
    </div>
</div>

			<div class="row">
			 <div class="store">
					<?php woocommerce_content(); ?>
			 </div>
			</div>	



<?php get_footer(); ?>


