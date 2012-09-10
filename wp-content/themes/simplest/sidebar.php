<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage simplest
 * @since simplest 1.0
 */
?>
<div class='sidebar'>
	<?php if ( is_page (array('ncstl') ) ):
          dynamic_sidebar('sidebar_1');
      elseif ( is_page (array('about-us','contact-information','privacy-policy','join','mission-statement') ) ):
          dynamic_sidebar('sidebar_1');
      elseif ( is_page (array('history','cities','stories','links-of-interest','memorabilia','abandoned','nashville-paducah-memphis-division','articles') ) ):
          dynamic_sidebar('sidebar_3');
      elseif ( is_page (array('locomotives','engine-576','steam-engines','diesel-engines','passenger','freight','maintanence') ) ):
          dynamic_sidebar('sidebar_4');
      elseif ( is_page (array('people','people-of-the-railroad','genealogy-research','photographs') ) ):
          dynamic_sidebar('sidebar_5');
      elseif ( is_page (array('events') ) ):
          dynamic_sidebar('sidebar_6');   
      elseif ( is_404(array()) ) :
          get_sidebar('404');
      else :
          get_sidebar();
      endif; 
    ?>
</div> <!--end sidebar-->