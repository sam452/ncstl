<?php 
/**
*Template Name: Page Template
 */

get_header();?>
<?php 
query_posts( 'post_type=person' );
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php echo get_post_meta(get_the_ID(),'person_fname',true);?></h1>
<h3><?php echo get_post_meta(get_the_ID(),'person_company',true);?></h3>
<?php the_content();?>
<?php endwhile; else: ?>
<p>you have no posts</p>
<?php endif; ?>

</section>
<section id="side">
	<?php dynamic_sidebar('right-sidebar');?>
</section>
<?php get_footer();?>