<?php include("globaloptions.php"); ?>
<?php get_header(); ?>


<div class="listing">
	<h2 class="entrytitle">Search Results</h2>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
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