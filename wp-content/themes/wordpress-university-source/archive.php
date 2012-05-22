<?php get_header();?>

	<div class="listing">
	
	<?php if (have_posts()) : ?>
	
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="entrytitle"><?php single_cat_title(); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="entrytitle"><?php single_tag_title(); ?></h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="entrytitle"><?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="entrytitle"><?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="entrytitle"<?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="entrytitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="entrytitle">Blog Archives</h2>
 	  <?php } ?>

	
	<?php while (have_posts()) : the_post(); ?>
			
		<div class="post">
		
		<?php include("firstimage.php"); ?>	
		<?php include("thumbnail.php"); ?>
		
		<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
		<small><?php the_time('m.d.Y') ?>&nbsp; | &nbsp;<?php comments_popup_link('No Comments &rsaquo;&rsaquo;', '1 Comment &rsaquo;&rsaquo;', '% Comments &rsaquo;&rsaquo;'); ?></small>
		
		<p class="sample"><?php the_content_rss('', TRUE, '', 33); ?> <a class="continue" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>

        <div class="clear"></div>
		</div><!--end post-->

		<?php endwhile; ?>

		<?php include("navigation.php"); ?>

	<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php endif; ?>
	
	<div class="clear"></div>
	</div><!--end listing-->
	
	
<?php get_footer(); ?>