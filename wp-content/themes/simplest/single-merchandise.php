<?php
/**
* Template Name: your post name Template
*/
 

       get_header(); ?>
This is the single-Merchandise template. 


      <div id="content">
      <div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

      	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          	<?php the_title('<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>'); ?>
          	<div class="entry-content">
			<?php the_content(__('Continue reading', 'example')); ?>
          	<h3 class="merch price"><?php echo get_post_meta(get_the_ID(),'merch_price',true);?></h3>
          	
          	<?php $designvar = get_post_meta($post->ID, 'merch_designs', true); ?>
          	  <?php if(!empty($designvar)) ?>
          	  <div class="merch design">
          	  <?php echo $designvar; ?> </div>
          	  
          	          	
          	<?php 
          	 $metas = get_post_meta( get_the_ID(), 'merch_sizes', false ); ?>

          	<?php
          	if ( in_array( $val, $metas ) ): ?>
          	  {
          	   <h4 class="merch sizes"><?php echo get_post_meta(get_the_ID(),'merch_sizes', false);?></h4>
 
          	  }
          	  else:
          	  {
          	    
          	  } ?>
          	<?php endif; ?>  



			<?php wp_link_pages('before=<p class="pages">' . __('Pages:','example') . '&after=</p>'); ?>
		</div>
		</div>
		<?php endwhile; ?>
		<?php else : ?>
			<p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>
		<?php endif; ?>





      </div><!-- content -->
      
      <?php get_footer(); ?>
  </body>
</html>

?>