<?php
/**
 * The template for displaying all pages.
 *
 */
 

      <?php get_header(); ?>
This is the single-Merchandise template. 


      <div id="content">
      <div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<?php $loop = new WP_Query( array( 'post_type' => 'merchandise', 'posts_per_page' => 100 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="post">
<?php the_post_thumbnail(); ?>
<div class="postInfo">
<h3 class="lgr"><?php the_title() ?></h3>
<a href="<?php the_permalink() ?>">Read More</a>
</div>
</div>
<?php endwhile; ?>




      </div><!-- content -->
      
      <?php get_footer(); ?>
  </body>
</html>

?>