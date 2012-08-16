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
    <div id="container">This is container
      <div id="header">
        <header>Header content here</header>
       <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <p id="description"><?php bloginfo( 'description' ); ?></p>
        <?php if ( has_nav_menu( 'menu' ) ) : wp_nav_menu(); else : ?>
          <ul><?php wp_list_pages( 'title_li=&depth=-1' ); ?></ul>
        <?php endif; ?> 
      </div><!-- header -->

      <div id="content">
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
        <?php if ( is_active_sidebar( 'widgets' ) ) : ?>
          <div class="widgets"><?php dynamic_sidebar( 'widgets' ); ?></div>
        <?php endif; ?>
        <?php if ( is_singular() || is_404() ) : ?>
          <div class="left"><a href="<?php bloginfo( 'url' ); ?>">&laquo; Home page</a></div>
        <?php else : ?>
          <div class="left"><?php next_posts_link( '&laquo; Older posts' ); ?></div>
          <div class="right"><?php previous_posts_link( 'Newer posts &raquo;' ); ?></div>
        <?php endif; ?>
        <div class="clear"> </div>
      </div><!-- content -->
      
      
      <footer class="clearfix">
        <div class="bLogo"><img src="<?php echo get_template_directory_uri(); ?>/img/bowtie.gif" width="128" height="72" alt="NCStL logo" /><span class="typemin">
        NC&StL Preservation Society, Inc. is in no way affiliated with the NC&StL Railway or any of its successors. As a non-profit entity, NCPS presents these pages to the public purely for educational and historic interest.
        </span>
        </div>
        <div class="footerLinks">
          <ul>
            <li>
            <a class="footerLinkText" href="/ncstl/about_us/" name="about">About us</a>
            </li>
            <li>
            <a class="footerLinkText" href="/ncstl/category/history_memorabilia/">History / Memorabilia</a>
            </li>
            <li>
            <a class="footerLinkText" href="/ncstl/category/locomotives_equipment/">Locomotives / Equipment</a>
            </li>
            <li>
            <a class="footerLinkText" href="/ncstl/category/merchandise/">Merchandise</a>
            </li>
          </ul>

        </div>
        <div class="footerLinks">
          <ul>
            <li>
            <a class="footerLinkText" href="/ncstl/contact/" name="contact">Contact us</a>
            </li>
            <li>
            <a class="footerLinkText" href="/ncstl/category/events/">Events</a>
            </li>
            <li>
            <a class="footerLinkText" href="/ncstl/category/members/">Members only</a>
            </li>
            <li>
            <a class="footerLinkText" href="/ncstl/privacy-policy/" name="privacy">Privacy policy</a>
            </li>
          </ul>

        </div>
        <div class="pPal">Please take a moment to send a tax-deductible contribution to NCPS.
          <br>
            We can't do it without your help!
          <br>
          <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
          <input type="hidden" value="_s-xclick" name="cmd">
          <input type="hidden" value="D5NRKJGL2PZC6" name="hosted_button_id">
          <input type="image" border="0" alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif">
          <img width="1" border="0" height="1" src="https://www.paypal.com/en_US/i/scr/pixel.gif" alt="">
          </form>
        </div>
      </footer>
    </div><!-- container -->
    <?php wp_footer(); ?>
    <div class="copyright">&copy;2012, NC&amp;StL Preservation Society
			</div>
  </body>
</html>