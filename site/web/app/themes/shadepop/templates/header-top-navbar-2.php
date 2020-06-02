<header class="banner navbar navbar-static-top" role="banner">
	<a id="logo-circle" title="<?php bloginfo('name'); ?>" class="brand" href="<?php echo home_url(); ?>/">
        <img id="logo" alt="<?php bloginfo('name'); ?>" src="<?php echo of_get_option('logo_upload'); ?>">
      </a>
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      
      <a title="<?php bloginfo('name'); ?>" href="<?php echo home_url(); ?>/">
        <img id="logo-collapse" alt="<?php bloginfo('name'); ?>" src="<?php echo of_get_option('logo_upload'); ?>">
      </a>
      
      <nav class="nav-main nav-collapse collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>