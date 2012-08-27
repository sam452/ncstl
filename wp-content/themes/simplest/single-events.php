<?php
/*
Template Name:events
*/
?>
<?php get_header(); ?>
 
   
        
      <div class='subcontent'>  
      	
      	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          	<?php the_title('<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>'); ?>
          	<div class="entry-content">
			<?php the_content(__('Continue reading', 'example')); ?>
			<?php wp_link_pages('before=<p class="pages">' . __('Pages:','example') . '&after=</p>'); ?>
		</div>
		</div>
		<?php endwhile; ?>
		<?php else : ?>
			<p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>
		<?php endif; ?>





      </div>  <!--end subcontent-->




<?php get_sidebar(); ?>
<?php get_footer(); ?>