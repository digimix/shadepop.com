<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <div class="social row">
    <div class="alignright">
    <?php if ( of_get_option('social_facebook') ) { ?><a href="http://facebook.com/<?php echo of_get_option('social_facebook'); ?>"><i class="icon-facebook"></i></a><?php } else {} ?>
    <?php if ( of_get_option('social_twitter') ) { ?><a href="http://twitter.com/<?php echo of_get_option('social_twitter'); ?>"><i class="icon-twitter"></i></a><?php } else {} ?>
    <?php if ( of_get_option('social_instagram') ) { ?><a href="http://instagram.com/<?php echo of_get_option('social_instagram'); ?>"><i class="icon-instagram"></i></a><?php } else {} ?>
    <?php if ( of_get_option('social_pinterest') ) { ?><a href="http://pinterest.com/<?php echo of_get_option('social_pinterest'); ?>"><i class="icon-pinterest"></i></a><?php } else {} ?>
    </div>
    </div>
    <div class="row clearfix">
    <div class="span6">
    <p>&copy; <?php echo date('Y'); ?> Better Stuff, LLC. <?php bloginfo('name'); ?> is patent pending. DigiMix <a title="Web Design New York" href="http://digimix.us">Web Design New York</a></p>
    </div>
    <div class="span6">
    <?php
          if (has_nav_menu('footer_navigation')) :
            wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'nav nav-pills alignright'));
          endif;
        ?>
    </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
