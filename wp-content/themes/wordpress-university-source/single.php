<?php include("globaloptions.php"); ?>
<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div id="post-<?php the_ID(); ?>" class="post">

		
		<h2 class="posttitle"><?php the_title(); ?></h2>
	
		<?php $data = get_post_meta( $post->ID, 'key', true ); ?>
		<?php  if ($data[ 'custom_option' ]) { ?>
			<p><?php echo $data[ 'custom_option' ]; ?></p>
		<?php } ?>
	
		<div class="entry">
				
		<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                		
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>						
			
				
		<div class="clear"></div>
        </div><!--end entry-->
        
        <br />
                        
        <div id="commentsection">
		<?php comments_template(); ?>
        </div>
		
		<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
        
	</div><!--end post-->

	<div class="clear" id="pageend"></div>

<?php get_footer(); ?>