<?php if (is_front_page ()) {}
else if (is_singular ('product')) {}
else { ?>
<div class="page-header">
  <h1>
    <?php echo roots_title(); ?>
  </h1>
</div>
<?php } ?>