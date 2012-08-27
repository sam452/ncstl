<?php
<<<<<<< HEAD
/**
 * The template for displaying all pages.
 *
 */
 
 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '&mdash;' ); ?></title>
    <?php if ( is_singular() && get_option( 'thread_comments') ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="container"><!--This is container-->

      <?php get_header(); ?>



      <div id="content">
      <div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
=======
/*
Template Name:about
*/
?>
<?php get_header(); ?>

   
        
      <div class='subcontent'>  
        <?php if(function_exists('fontResizer_place')) { fontResizer_place(); } ?>
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



>>>>>>> Branch-off-Master-as-of-8/21





<<<<<<< HEAD

      </div><!-- content -->
      
      <?php get_footer(); ?>
  </body>
</html>
=======
<?php get_sidebar();?>
<?php get_footer(); ?>
>>>>>>> Branch-off-Master-as-of-8/21
