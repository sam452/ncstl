      <div id="header-container"><!--3:25pm added to test header container-->
      <div id="header" class="chrome-center"> <!--3:25pm added to test header-->


       <!-- removed extra header -->


  <div class="bLogo"><img src="<?php echo get_template_directory_uri(); ?>/img/bowtie.gif" width="100%" height="72" alt="NCStL logo" />
    </div>
    <div class="576Logo"><img src="<?php echo get_template_directory_uri(); ?>/img/576park_da.jpg" width="77%" height="100" alt="576 logo" />
        </div>

  <div class="bloginfo">
        <h1 style="text-align: center;"><?php bloginfo( 'name' ); ?></h1>
              <p id="description"><?php bloginfo( 'description' ); ?></p>
    </div> <!--- blog info div -->
        
      <nav>
      <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) ) ?>
      </nav>
       
</div><!--end of header-->
</div><!--end of header container-->
