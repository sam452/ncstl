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
        <!--<div class='train'><img src="<?php echo get_template_directory_uri(); ?>/img/576.jpg" width="767" height="400" alt="576" />
        </div>-->
      <div class='subcontent'>  
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <?php if ( !is_singular() && get_the_title() == '' ) : ?>
              <a href="<?php the_permalink(); ?>">(more...)</a>
            <?php endif; ?>
            <?php if ( is_singular() ) : ?>
              <div class="pagination"><?php wp_link_pages(); ?></div>
            <?php endif; ?>
            <div class="clear"> </div>
          </div><!-- post_class() -->
          <?php if ( is_singular() ) : ?>
            <div class="meta">
              <p>Posted by <?php the_author_posts_link(); ?>
              on <a href="<?php the_permalink(); ?>"><?php the_date(); ?></a>
              in <?php the_category( ', ' ); ?><?php the_tags( ', ' ); ?></p>
            </div><!-- meta -->
            <?php comments_template(); ?>
          <?php endif; ?>
        <?php endwhile; else: ?>
          <div class="hentry"><h2>Sorry, the page you requested cannot be found</h2></div>
        <?php endif; ?>
      </div>  <!--end subcontent-->

        <?php if ( is_active_sidebar( 'primary' ) ) : ?>
          <div class="sidebar"><?php dynamic_sidebar( 'primary' ); ?></div>
        <?php endif; ?>
        <?php if ( is_singular() || is_404() ) : ?>
          <div class="left"><a href="<?php bloginfo( 'url' ); ?>">&laquo; Home page</a></div>
        <?php else : ?>
          <div class="left"><?php next_posts_link( '&laquo; Older posts' ); ?></div>
          <div class="right"><?php previous_posts_link( 'Newer posts &raquo;' ); ?></div>
        <?php endif; ?>
        <div class="clear"> </div>

      </div><!-- content -->
      
      <?php get_footer(); ?>
  </body>
</html>