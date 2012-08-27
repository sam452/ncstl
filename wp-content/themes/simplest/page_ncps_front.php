<?php
/*
Template Name:Front Page
*/
?>
<?php get_header(); ?>

<div class='subcontent'>  
     <?php if(function_exists('fontResizer_place')) { fontResizer_place(); } ?> 	
  <div id='info' class='frontpost'>

  	<div id='post1'>
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
  	</div><!--#post1-->

  </div><!--#info-->

	  <div id='box1' class='frontpost'>
	  	<div id='post2'>
			<?php query_posts('category_name=events&showposts=1'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php the_title('<h5 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h5>'); ?>
	            <div class="entry-content">
	            <?php the_content(__('Continue reading', 'example')); ?>
	            <?php wp_link_pages('before=<p class="pages">' . __('Pages:','example') . '&after=</p>'); ?>
	          	</div>
				<?php endwhile;?>
	  	</div><!--#post2-->
	  </div><!--#box1-->

	  <div id='box2' class='frontpost'>
		<div id='post3'>
			<?php query_posts('category_name=members&showposts=1'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php the_title('<h5 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h5>'); ?>
	            <div class="entry-content">
	            <?php the_excerpt(__('Continue reading', 'example')); ?>
	            <?php wp_link_pages('before=<p class="pages">' . __('Pages:','example') . '&after=</p>'); ?>
	          	</div>
				<?php endwhile;?>
	  	</div><!--#post3-->
	  </div><!--#box3-->

	  <div id='box3'>
		<div id='post4' class='frontpost'>
			<?php query_posts('category_name=events&showposts=1'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php the_title('<h6 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h6>'); ?>
	            <div class="entry-content">
	            <?php the_content(__('Continue reading', 'example')); ?>
	            <?php wp_link_pages('before=<p class="pages">' . __('Pages:','example') . '&after=</p>'); ?>
	          	</div>
				<?php endwhile;?>
	  	</div><!--#post4-->
	  </div><!--#box3-->	  

  <div id='box4'>

  </div><!--#box4-->
      
 </div>  <!--end subcontent-->
<div class='sidebar'>
<?php dynamic_sidebar('sidebar_1'); ?>
</div>
<?php get_footer(); ?>


