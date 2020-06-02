<!--
  <div id="pre-header" class="container" style="background:none;z-index:2000;position:relative;">
    <a class="navbar-brand" href="<?php echo home_url(); ?>/">
      <img id="logo" alt="<?php bloginfo('name'); ?>" src="<?php echo of_get_option('logo_upload'); ?>">
    </a>
  </div>
-->
<header class="banner navbar navbar-static-top" role="banner">
  <div class="container">
    <a class="navbar-brand" href="<?php echo home_url(); ?>/">
      <img alt="<?php bloginfo('name'); ?>" src="<?php echo of_get_option('logo_upload'); ?>">
    </a>
    <button data-target=".nav-main" data-toggle="collapse" type="button" class="navbar-toggle">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <nav class="nav-main nav-collapse collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>


<!--
<a id="logo-circle" title="<?php bloginfo('name'); ?>" class="brand" href="<?php echo home_url(); ?>/">
        <img id="logo" alt="<?php bloginfo('name'); ?>" src="<?php echo of_get_option('logo_upload'); ?>">
      </a>
-->