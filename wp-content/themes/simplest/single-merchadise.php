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

<?
// * if you want to work with the genre category on your query
// $wp_query = new WP_Query(array('post_type' => 'video', 'genre' => 'scifi','posts_per_page' => -1));
//
// * if you want to work with the actor tag on your query
// $wp_query = new WP_Query(array('post_type' => 'video', 'genre' => 'scifi','actor' => 'keanureaves','posts_per_page' => -1));
//
$wp_query = new WP_Query(array('post_type' => 'merchandise','posts_per_page' => -1));
if (have_posts()) :
     while (have_posts()) : the_post();
?>
     <div>
       <h3><a href="<?the_permalink();?>"><?=get_the_title();?></a></h3>
     </div>
     <div>
       <p><?=get_the_content();?></p>
     </div>
<?
    endwhile;
else:
?>
     <div>
       <p>No registers found.</p>
     </div>
<?
endif;
?>




      </div><!-- content -->
      
      <?php get_footer(); ?>
  </body>
</html>

?>