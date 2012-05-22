<?php include("globaloptions.php"); ?>
<?php get_header(); ?>

<div id="tabs">
<?php $homePosts1 = new WP_Query(); $homePosts1->query('category_name='. $wpuniversity_postshome1 .'&showposts='. $wpuniversity_showhome .'');  ?>
<?php $homePosts2 = new WP_Query(); $homePosts2->query('category_name='. $wpuniversity_postshome2 .'&showposts='. $wpuniversity_showhome .'');  ?>
<?php $homePosts3 = new WP_Query(); $homePosts3->query('category_name='. $wpuniversity_postshome3 .'&showposts='. $wpuniversity_showhome .'');  ?>
<?php $homePosts4 = new WP_Query(); $homePosts4->query('category_name='. $wpuniversity_postshome4 .'&showposts='. $wpuniversity_showhome .'');  ?>
<?php $homePosts5 = new WP_Query(); $homePosts5->query('category_name='. $wpuniversity_postshome5 .'&showposts='. $wpuniversity_showhome .'');  ?>
<?php $homePosts6 = new WP_Query(); $homePosts6->query('category_name='. $wpuniversity_postshome6 .'&showposts='. $wpuniversity_showhome .'');  ?>


<h2 class="categorytitle tabNavigation">
<span>
<a href="#category1"><?php echo $wpuniversity_postshome1; ?></a> 
<a href="#category2"><?php echo $wpuniversity_postshome2; ?></a> 
<a href="#category3"><?php echo $wpuniversity_postshome3; ?></a>
<a href="#category4"><?php echo $wpuniversity_postshome4; ?></a>
<a href="#category5"><?php echo $wpuniversity_postshome5; ?></a>
<a href="#category6"><?php echo $wpuniversity_postshome6; ?></a>
</span>
</h2>

<?php if ($homePosts1->have_posts()) :?>
<div class="listing" id="category1">
		<?php while ($homePosts1->have_posts()) : $homePosts1->the_post(); ?>	
		<div class="post">
		
		<?php include("firstimage.php"); ?>	
		<?php include("thumbnail.php"); ?>
		
		<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
		<small><?php the_time('m.d.Y') ?>&nbsp; | &nbsp;<?php comments_popup_link('No Comments &rsaquo;&rsaquo;', '1 Comment &rsaquo;&rsaquo;', '% Comments &rsaquo;&rsaquo;'); ?></small>
		
		<p class="sample"><?php the_content_rss('', TRUE, '', 33); ?> <a class="continue" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>

        <div class="clear"></div>
		</div><!--end post-->

		<?php endwhile; ?>

	
</div><!--end listing-->
<?php endif; ?>

<?php if ($homePosts2->have_posts()) :?>
<div class="listing" id="category2">
		<?php while ($homePosts2->have_posts()) : $homePosts2->the_post(); ?>	
		<div class="post">
		
		<?php include("firstimage.php"); ?>	
		<?php include("thumbnail.php"); ?>
		
		<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
		<small><?php the_time('m.d.Y') ?>&nbsp; | &nbsp;<?php comments_popup_link('No Comments &rsaquo;&rsaquo;', '1 Comment &rsaquo;&rsaquo;', '% Comments &rsaquo;&rsaquo;'); ?></small>
		
		<p class="sample"><?php the_content_rss('', TRUE, '', 33); ?> <a class="continue" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>

        <div class="clear"></div>
		</div><!--end post-->

		<?php endwhile; ?>

	
</div><!--end listing-->
<?php endif; ?>

<?php if ($homePosts3->have_posts()) :?>
<div class="listing" id="category3">
		<?php while ($homePosts3->have_posts()) : $homePosts3->the_post(); ?>	
		<div class="post">
		
		<?php include("firstimage.php"); ?>	
		<?php include("thumbnail.php"); ?>
		
		<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
		<small><?php the_time('m.d.Y') ?>&nbsp; | &nbsp;<?php comments_popup_link('No Comments &rsaquo;&rsaquo;', '1 Comment &rsaquo;&rsaquo;', '% Comments &rsaquo;&rsaquo;'); ?></small>
		
		<p class="sample"><?php the_content_rss('', TRUE, '', 33); ?> <a class="continue" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>

        <div class="clear"></div>
		</div><!--end post-->

		<?php endwhile; ?>

	
</div><!--end listing-->
<?php endif; ?>

<?php if ($homePosts4->have_posts()) :?>
<div class="listing" id="category4">
		<?php while ($homePosts4->have_posts()) : $homePosts4->the_post(); ?>	
		<div class="post">
		
		<?php include("firstimage.php"); ?>	
		<?php include("thumbnail.php"); ?>
		
		<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
		<small><?php the_time('m.d.Y') ?>&nbsp; | &nbsp;<?php comments_popup_link('No Comments &rsaquo;&rsaquo;', '1 Comment &rsaquo;&rsaquo;', '% Comments &rsaquo;&rsaquo;'); ?></small>
		
		<p class="sample"><?php the_content_rss('', TRUE, '', 33); ?> <a class="continue" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>

        <div class="clear"></div>
		</div><!--end post-->

		<?php endwhile; ?>

	
</div><!--end listing-->
<?php endif; ?>

<?php if ($homePosts5->have_posts()) :?>
<div class="listing" id="category5">
		<?php while ($homePosts5->have_posts()) : $homePosts5->the_post(); ?>	
		<div class="post">
		
		<?php include("firstimage.php"); ?>	
		<?php include("thumbnail.php"); ?>
		
		<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
		<small><?php the_time('m.d.Y') ?>&nbsp; | &nbsp;<?php comments_popup_link('No Comments &rsaquo;&rsaquo;', '1 Comment &rsaquo;&rsaquo;', '% Comments &rsaquo;&rsaquo;'); ?></small>
		
		<p class="sample"><?php the_content_rss('', TRUE, '', 33); ?> <a class="continue" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>

        <div class="clear"></div>
		</div><!--end post-->

		<?php endwhile; ?>

	
</div><!--end listing-->
<?php endif; ?>

<?php if ($homePosts6->have_posts()) :?>
<div class="listing" id="category6">
		<?php while ($homePosts6->have_posts()) : $homePosts6->the_post(); ?>	
		<div class="post">
		
		<?php include("firstimage.php"); ?>	
		<?php include("thumbnail.php"); ?>
		
		<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
		<small><?php the_time('m.d.Y') ?>&nbsp; | &nbsp;<?php comments_popup_link('No Comments &rsaquo;&rsaquo;', '1 Comment &rsaquo;&rsaquo;', '% Comments &rsaquo;&rsaquo;'); ?></small>
		
		<p class="sample"><?php the_content_rss('', TRUE, '', 33); ?> <a class="continue" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>

        <div class="clear"></div>
		</div><!--end post-->

		<?php endwhile; ?>

	
</div><!--end listing-->
<?php endif; ?>

</div><!--end tabs-->
<?php get_footer(); ?>