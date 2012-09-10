<?php get_header(); ?>
  
  <div id="content">
    
    <div class='subcontent'> 
       <div id="innerbody">
        <?php if(function_exists('fontResizer_place')) { fontResizer_place(); } ?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_title('<h3 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h3>'); ?>

          <?php the_content(); ?>
              
          </div>
            <?php endwhile; ?>
          <?php else : ?>
            <p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>
          <?php endif; ?>

  </div><!--end innerbody-->
  </div>  <!--end subcontent-->
  </div><!--end content -->
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>



  

