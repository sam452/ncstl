        <?php register_nav_menu( 'primary', 'Primary Menu' ); ?> 

         <?php  if(function_exists('register_nav_menus')) : ?>  
          
        <?php register_nav_menus(  
            array(  
                'top_header' => 'Menu at the very top of the page',  
                'bottom_header' => 'Menu Below header Banner' )  
            );  
        ?>  
      
    <?php endif; ?>  

         

    <?php if (function_exists('register_sidebar'))  
    register_sidebar(array(  
    'name'=>'Left Side',  
    'before_widget' => '<div class="leftwidgets">',  
    'after_widget' => '</div>',  
    'before_title' => '<h2 class="widgettitle">',  
    'after_title' => '</h2>',  
    ));  
?>
<?php if (function_exists('register_sidebar'))  
    register_sidebar(array(  
    'name'=>'Right Side',  
    'before_widget' => '<div class="rightwidgets">',  
    'after_widget' => '</div>',  
    'before_title' => '<h2 class="widgettitle">',  
    'after_title' => '</h2>',  
    ));  
?>

