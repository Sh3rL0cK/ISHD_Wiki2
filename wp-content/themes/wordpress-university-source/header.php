<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php include("globaloptions.php"); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<style type="text/css">
<!--
#headerContainer {
background:<?php echo $wpuniversity_color ?> url('<?php bloginfo('template_url'); ?>/images/header_tile.png') repeat-x;
_background:<?php echo $wpuniversity_color ?>  url('<?php bloginfo('template_url'); ?>/images/header_tile_ie6.gif') repeat-x;
}
a {color: <?php echo $wpuniversity_color ?>;}
-->
</style>

<noscript>
<style type="text/css">
<!--
#tabs > div {display: inherit;}
-->
</style>
</noscript>

<?php wp_head(); ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<!--[if lt IE 8]>
<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script>
<![endif]-->

</head>

<body>

<div id="headerContainer">
	<div id="header">
		
		<div id="topBar">
			<div id="searcher"><?php include ("searchform.php"); ?></div>
			<div id="today"><?php echo date("l | F jS, Y "); ?></div>
		</div><!--end topBar-->
	
		<h1 id="logo"><a href="<?php bloginfo('url')?>"><?php bloginfo('name'); ?></a></h1><!--end logo-->    

	
		<div id="navigation">
			<ul id="dropmenu">
        		<li <?php if (is_front_page()) {?>class="current_page_item"<?php }?>><a href="<?php bloginfo('url'); ?>">HOME</a></li>
    			<?php wp_list_cats('exclude='. $wpuniversity_cat .''); ?>
        		<?php wp_list_pages('sort_column=menu_order&exclude='. $wpuniversity_page .','. $wpuniversity_footerpage .'&title_li='); ?>
			</ul><!--end dropmenu-->
		</div><!--end navigation-->
	
	</div><!--end header-->
</div><!--end headerContainer-->
	
<div id="contentContainer">
	<div id="content">
	
	<?php if(is_front_page()) { ?>
	<div id="featured">
	<div class="main_image">
		<?php $recentPosts = new WP_Query(); $recentPosts->query('category_name='. $wpuniversity_slider .'&showposts=1'); while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
		<?php include("firstimage.php"); ?>
		<?php $thumbwidth = 618; $thumbheight = 293;?>
			
		<img src="<? bloginfo('template_url'); ?>/scripts/timthumb.php?src=<? echo $image ?>&w=<? echo $thumbwidth ?>&h=<? echo $thumbheight ?>&zc=1" alt="<?php the_title(); ?>" height="<? echo $thumbheight ?>" width="<? echo $thumbwidth ?>" />

		<div class="desc">
			<a href="#" class="collapse">Close Me!</a>

			<div class="block">
				<h2><?php the_title(); ?></h2>
				<small><?php the_time('m.d.Y') ?></small>
				<p class="sample"><?php the_content_rss('', TRUE, '', 27); ?> <a class="continue" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>
			</div>
		</div>
		<?php endwhile; ?>
	</div><!--end main_image-->
	
	<div class="image_thumb">
	
		<ul>
			<?php $recentPosts = new WP_Query(); $recentPosts->query('category_name='. $wpuniversity_slider .'&showposts=4'); while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
			<?php include("firstimage.php"); ?>
			<?php $littlewidth = 50; $littleheight = 38;?>

			<li>
				<a href="<? bloginfo('template_url'); ?>/scripts/timthumb.php?src=<? echo $image ?>&w=<? echo $thumbwidth ?>&h=<? echo $thumbheight ?>&zc=1"><img src="<? bloginfo('template_url'); ?>/scripts/timthumb.php?src=<? echo $image ?>&w=<? echo $littlewidth ?>&h=<? echo $$littleheight ?>&zc=1" alt="<?php the_title(); ?>" height="<? echo $littleheight ?>" width="<? echo $littlewidth ?>" /></a>
				<div class="block">
					<h2><?php the_title(); ?></h2>
					<small><?php the_time('m.d.Y') ?></small>
					
					<p class="sample"><?php the_content_rss('', TRUE, '', 27); ?> <a class="continue" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>
				</div>
			</li>
			<?php endwhile; ?>
		</ul>
	</div><!--end image_thumb-->
	<div class="clear"></div>
	</div><!--end featured-->
	<?php } ?>
	
	<div id="main">