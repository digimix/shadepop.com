<?php
global $post;
$herotext = get_post_meta( $post->ID, 'sp_hero_copy', true );
$heroimg = get_post_meta( $post->ID, 'sp_hero_img', true );
$copy_1 = get_post_meta( $post->ID, 'sp_submodule_copy', true );
$copy_2 = get_post_meta( $post->ID, 'sp_submodule_2_copy', true );
$copy_3 = get_post_meta( $post->ID, 'sp_submodule_3_copy', true );
$btn_copy = get_post_meta( $post->ID, 'sp_submodule_3_btn_copy', true );
$btn_link = get_post_meta( $post->ID, 'sp_submodule_3_btn_link', true );
$color_1 = get_post_meta( $post->ID, 'sp_submodule_colorpicker', true );
$color_2 = get_post_meta( $post->ID, 'sp_submodule_2_colorpicker', true );
$color_3 = get_post_meta( $post->ID, 'sp_submodule_3_btn_colorpicker', true );
$bg_img_1 = get_post_meta( $post->ID, 'sp_submodule_img', true );
$bg_img_2 = get_post_meta( $post->ID, 'sp_submodule_2_img', true );
$bg_img_3 = get_post_meta( $post->ID, 'sp_submodule_3_img', true );
$l_logo = get_post_meta( $post->ID, 'sp_submodule_2_logo', true );
$title_2 = get_post_meta( $post->ID, 'sp_submodule_2_title', true );
?>

<div id="intro" class="module">
	<div class="hero" style="background-image:url('<?php echo $heroimg; ?>');">
		<div class="banner banner-full jumbotron" style="margin-top: -151px;">
			<div class="wrap"><h1 itemprop="name"><?php echo $herotext; ?></h1></div>
		</div>
	</div>
</div>
<!--/end intro-->

<div>
	<div id="sub-module" class="row-fluid orange" style="background-color:<?php echo $color_1;?>;">
		<div class="span7"><?php echo $copy_1;?></div>
		<div class="span5 module-bg-img" style="background:url(<?php echo $bg_img_1;?>);"></div>
	</div>

	<div id="sub-module" class="row-fluid green" style="background-color:<?php echo $color_2;?>">
		<div class="span5 module-bg-img" style="background:url(<?php echo $bg_img_2;?>);"></div>
		<div class="span7"><h2 style="font-size:50px;font-weight:200;"><?php echo $title_2;?> <img style="margin-bottom:10px;width:200px;" alt="Shade Pop" src="<?php echo $l_logo;?>"></h2><?php echo $copy_2;?></div>
	</div>
</div>

<div id="order" class="module" style="border-top:15px solid #fff;">
	<div class="hero" style="background-image:url('<?php echo $bg_img_3;?>');">
		<div class="banner banner-full jumbotron" style="margin-top:-151px;">
	      <div class="wrap" style="border:0;"><h1 itemprop="name"><?php echo $copy_3;?></h1><a class="order-now-btn" href="<?php echo $btn_link;?>"><p style="background-color:<?php echo $color_3;?>;" itemprop="description"><?php echo $btn_copy;?></p></a></div>
		</div>
	</div>
</div>