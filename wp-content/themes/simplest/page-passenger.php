<?php
/*
Template Name:Passenger
*/
?>
<?php get_header(); ?>
  <div class='subcontent'>  
    <div id="innerbody">
  	<?php if(function_exists('fontResizer_place')) { fontResizer_place(); } ?>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title('<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>'); ?>
    <div class="entry-content">
    <?php the_content(); ?>
    </div>
    </div>
      <?php endwhile; ?>
    <?php else : ?>
      <p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>
      <?php endif; ?>
      <?php wp_reset_query();?>

    <?php 
      $pages = (get_query_var('paged') )? get_query_var ('paged'):1;
      query_posts( array( 'category__in' => 26, 'posts_per_page' => 1, 'paged'=>$paged ) );?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_title('<h5 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h5>'); ?>      
    <?php the_excerpt(); ?>      
    <?php endwhile;?>
    <?php wp_pagenavi();?>
    <?php wp_reset_query();?>
  </div>
</div> 
<?php dynamic_sidebar('sidebar_4'); ?>
<?php get_footer(); ?>