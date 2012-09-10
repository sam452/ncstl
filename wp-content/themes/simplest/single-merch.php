<?php
/*
Template Name: New merchandise
*/


get_header(); ?>
<div class='merchsubcontent'>  
  <?php if(function_exists('fontResizer_place')) { fontResizer_place(); } ?>
  <div id="merchinnerbody">
  <div class="breadcrumbs">
    
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
<div id='merchtitle'>
      <h1>Merchandise</h1>
    </div>

  </div>
    <?php query_posts('post_type=merchandise&showposts=20'); ?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_title('<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>'); ?>
        <div class="entry-content">
        <?php the_content(); ?>
        </div>
        <h3 class="merch price"><?php echo get_post_meta(get_the_ID(),'merch_price',true);?></h3>
          <?php $designvar = get_post_meta($post->ID, 'merch_designs', true); ?>
          <?php if(!empty($designvar)) ?>
        <div class="merch design">
          <?php echo $designvar; ?> 
        </div>
          <?php 
          $metas = get_post_meta( get_the_ID(), 'merch_sizes', false ); ?>
          <?php
          if ( in_array( $val, $metas ) ): ?>
            {
             <h4 class="merch sizes"><?php echo get_post_meta(get_the_ID(),'merch_sizes', false);?></h4>   
            }
            else:
            {                  
            } ?>
          <?php endif; ?>        
          </div>
          <?php endwhile; ?>
          <?php else : ?>
            <p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>
          <?php endif; ?>
      <?php wp_reset_query();?>

          <?php 
        $pages = (get_query_var('paged') )? get_query_var ('paged'):1;
        query_posts( array( 'category__in' => 5, 'posts_per_page' => 1, 'paged'=>$paged ) );?>
      <?php while (have_posts()) : the_post(); ?>
    <div class='posts'>  
      <?php the_title('<h5 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h5>'); ?>      
      <?php the_excerpt(); ?>      
    </div>  
      <?php endwhile;?>
      <?php wp_pagenavi();?>
      <?php wp_reset_query();?>
      </div><!-- endinnerbody -->
    </div>  <!--endsubcontent-->

<?php get_footer(); ?>