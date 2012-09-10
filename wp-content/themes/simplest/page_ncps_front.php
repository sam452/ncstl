<?php
/*
Template Name:Front Page
*/
?>
<?php get_header(); ?>

<div class='subcontenthome'>  
     
  <div id='info'>
  	
 <div class="homepic"><img src="<?php echo get_template_directory_uri(); ?>/img/engine576.jpg" width="100%" height="100%" alt="NCStL logo" /></div>

	<div class='middle'>	
	  <div id='box1' class='col'>
			<?php query_posts('category_name=events&showposts=1'); ?>
		<?php while (have_posts()) : the_post(); ?>
		<?php the_title('<h5 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h5>'); ?>
		   <div id="innerbody">
		    <?php the_excerpt(); ?>
		   </div> 
		<?php endwhile;?>
	  </div><!--#box1-->

	  <div id='box2' class='col'>
		<?php query_posts('category_name=members&showposts=1'); ?>
		<?php while (have_posts()) : the_post(); ?>
		<?php the_title('<h5 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h5>'); ?>
	   <div id="innerbody">
	    <?php the_excerpt(); ?>
	   </div> 
		<?php endwhile;?>
	  </div><!--#box2-->

	  <div id='box3' class='col'>
	   <div class='merchbox'>	
		    <?php query_posts('post_type=merchandise&showposts=1'); ?>
			<?php while (have_posts()) : the_post(); ?>
		  <div class='merchtitle'>
			<?php the_title('<h6 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h6>'); ?>
		  </div><!--.merchtitle-->
	      <div class='merchthumb'>
	        <?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			  the_post_thumbnail();
			} 
			?>
		  </div><!--.merchthumb-->
		<div id="innerbody">  
		  <div class='merchtext'>	
	        <?php the_excerpt(); ?>
	      </div><!--.merchtext-->
	    </div>  
			<?php endwhile;?>
	   </div><!--.merchbox-->		
	  </div><!--#box3-->	  
	  <div style="clear:both;"></div>
	</div><!--endmiddle-->
   </div><!--#info-->	  
  
      
 </div>  <!--end subcontenthome-->

<?php get_footer(); ?>


